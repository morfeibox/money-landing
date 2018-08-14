<?php
namespace Model;
class User extends \atk4\data\Model {

public $table = 'user';

function init(){
    parent::init();

    //showing the fields of the db in the form 
    //'system'=>true diss field is hidden and cannot be seen in the form but can be changed in the code
    $this->addFields([
        'email',
        ['name','required'=>true],
        'password',
        ['is_confirmed','type'=>'boolean'],
        ['is_admin','type'=>'boolean', 'system'=>true],
        ]);
    }
}