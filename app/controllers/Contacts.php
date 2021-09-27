<?php

class Contacts extends Controller
{

    public function __construct()
    {
        $this->contactModel = $this->model('Contact');
    }

    public function index()
    {

        $data = [
            'name' => '',
            'email' => '',
            'message' => ''

        ];
        $this->view('contacts/cont', $data);

    }

    public function addComment()
    {
        //var_dump($_POST);die;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'message' => trim($_POST['message']),
                'name_err' => '',
                'email_err' => '',
                'message_err' => ''
            ];
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter your name';
            }
            if (empty($data['email'])) {
                $data['email_err'] = ' Please enter your email';
            }
            if (empty($data['message'])) {
                $data['message_err'] = 'Please enter a message';
            } elseif (strlen($data['message']) < 3) {
                $data['message_err'] = 'The message must be at least 3 characters long';
            }



            if (empty($data['name_err']) && empty($data['email_err'] && empty($data['message_err']))) {
                if ($this->contactModel->addComment($data)) {
                    flash('post_message', 'Comment Sent');
                    redirect('contacts/cont');
                } else {
                    die('something went wrong');
                }
            } else {
                $this->view('contacts/cont', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'message' => ''
            ];
            $this->view('contacts/cont', $data);
        }
    }
}