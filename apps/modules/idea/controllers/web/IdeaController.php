<?php

namespace Idy\Idea\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;

class IdeaController extends Controller
{
    public function indexAction()
    {
       return $this->view->pick('home');
     
    }

    public function addViewAction()
    {
        return $this->view->pick('add');;
    }

    public function addAction()
    {
        $email = $this->request->getPost("email");
        $tittle = $this->request->getPost("tittle");
        $content = $this->request->getPost("content");
        var_dump($email,$tittle,$content);
    }

    public function voteAction()
    {

    }

    public function rateAction()
    {
        
    }

}