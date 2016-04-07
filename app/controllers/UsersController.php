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
        /**
         * @var \Phalcon\Validation\MessageInterface $msg
         */

        $user = new Users();
        $success = $user->save($this->request->getPost(),['name','email']);
        if ($success)
            echo '成功';
        else
            foreach ($user->getMessages() as $msg) {
               echo  $msg->getMessage() . '<br>';
            }

        die;
    }

}

