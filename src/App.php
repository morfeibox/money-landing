<?php


class App  extends \atk4\ui\App {

    function __construct($is_admin = false) {

        parent:: __construct('Money Landing');

        //Depending on the use, select appropriate layout for our pages
        if ($is_admin){
            $this->initLayout('Admin');
            $this->layout->menuLeft->addItem(['Dushboard', 'icon'=> 'dahsboard'], ['dashboard']);
            $this->layout->menuLeft->addItem(['Guest Admin ', 'icon'=> 'users'], ['admin']);
        }else{
            $this->initLayout('Centered');
        }

        $this->dbConnect(isset($_ENV['CLEARDB_DATABASE_URL']) ? $_ENV['CLEARDB_DATABASE_URL'] :
        'mysql://root:root@localhost/money-landing');
    }
}