<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function viewAction(){
        $test = Test::findFirst();
        $this->view->setVar('model', $test);
    }

    public function testAction(){

        echo "<pre>";
        print_r(get_loaded_extensions());
        die;

    }

    public function editAction(){
        $this->view->setVars([
            'name'=>'wjh',
            'age' =>18
        ]);
    }

    public function saveAction(){
        BHelper::print_r2($this->request->getPost());
        //print_r2($this->request);
        die;


    }

}

