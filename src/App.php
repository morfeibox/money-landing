<?php


class App  extends \atk4\ui\App {

    public $auth;
    
    function __construct($is_admin = false) {

        parent:: __construct('Money Landing');

        //DATABASE CONNECTION
        $this->dbConnect(isset($_ENV['CLEARDB_DATABASE_URL']) ? $_ENV['CLEARDB_DATABASE_URL'] :
        'mysql://root:root@localhost/money-landing');

        //Depending on the use, select appropriate layout for our pages
        if ($is_admin){
            $this->initLayout('Admin');
            $this->layout->menuLeft->addItem(['Back', 'icon'=> 'undo'], ['index']);
            $this->layout->menuLeft->addItem(['Admin', 'icon'=> 'cogs'], ['admin']);
            
            //login menu
             $this->add(new \atk4\login\Auth())
             ->setModel(new Model\Admin($this->db));
           
        }else{
            $this->initLayout('Centered');
            //'check' => falsemenually preform the check if the user is loggin or not
            $this->auth = $this->add(new \atk4\login\Auth([
                'check' => false
            ]));
            $this->auth->setModel(new Model\User($this->db));
        }

        
    }
}