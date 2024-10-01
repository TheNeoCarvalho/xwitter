<?php

namespace App\Controllers;

error_reporting(0);

use Core\Controller;
use Core\Database;

class AuthController extends Controller
{
   public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            session_start();

            if (empty($username) || empty($password)) {
                $_SESSION['error_message'] = "Por favor, preencha todos os campos.";
                header('Location: /login');
                exit;
            }

            $db = Database::connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['name'] = $user['name'];

                $this->redirect("/dash");
              
            } else {
                $_SESSION['error_message'] = "Usuário ou senha incorretos.";
                header('Location: /login');
                exit;
            }
        } else {
            
            session_start();
            if (isset($_SESSION['user_id'])) {
                $this->redirect('/dash');
                exit;
            }
            
            $this->view('auth/login');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this->redirect('/login');
    }

   public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($name) ||  empty($email) || empty($username) || empty($password)) {
                echo "Por favor, preencha todos os campos.";
                return;
            }

            $db = Database::connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "Nome de usuário já está em uso.";
                return;
            }

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $db->prepare("INSERT INTO users (name, username, password, email) VALUES (:name, :username, :password, :email)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                $this->redirect("/login");
                exit;
            } else {
                echo "Ocorreu um erro ao cadastrar o usuário.";
            }
        } else {
            $this->view('auth/register');
        }
    }

  public function dash()
 {
        // session_start();
        // if (!isset($_SESSION['user_id'])) {
        //     $this->redirect("/login");
        // }

        $this->view('dash/index', ['user' => $_SESSION['name']]);
    }

}