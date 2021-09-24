<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index()
    {

        $this->view('pages/index');
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function profile()
    {
        // Get posts
        $posts = $this->postModel->getPostsByAdmin();

        $data = [
            'posts' => $posts
        ];

        $this->view('pages/profile', $data);
    }

}