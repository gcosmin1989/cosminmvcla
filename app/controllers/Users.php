<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        // Verifiare dupa metoda POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Curatarea datelor venite prin POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            // Validare Email
            if (empty($data['email'])) {
                $data['emailError'] = 'Pleae enter email';
            } else {
                // Check email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken';
                }
            }

            // Validare username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Pleae enter name';
            }

            // Validare parola
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordError'] = 'Password must be at least 6 characters';
            }

            // Validare confirmare parola
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please confirm password';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match';
                }
            }

            // Ne asiguram ca erorile sunt goale
            if (empty($data['emailError']) && empty($data['usernameError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash parola
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register utilizator
                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Incarcare Views cu erori
                $this->view('users/register', $data);
            }

        } else {
            // Init data
            $data = [
                'username' => '',
                'email' => '',
                'password' => '',
                'confirmPassword' => '',
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }

    public function login()
    {
        // Verificam POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];

            // Validare Email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email';
            }

            // Validare parola
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter password';
            }

            // Verificare dupa email
            if ($this->userModel->findUserByEmail($data['email'])) {

            } else {
                // Daca userukl nu este gasit aruncam urmatorea eroare
                $data['emailError'] = 'No user found';
            }

            // Nu sunt erori
            if (empty($data['emailError']) && empty($data['passwordError'])) {

                // Logare utilizator
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    // Creare Sesiune de logat
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password incorrect';

                    $this->view('users/login', $data);
                }
            } else {
                $this->view('users/login', $data);
            }


        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => '',
            ];

            $this->view('users/login', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->username;
        redirect('pages');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
}