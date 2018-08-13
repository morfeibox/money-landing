<?php
namespace Model;
class Loan extends \atk4\data\Model {

public $table = 'loan';

function init(){
    parent::init();

    $this->addFields([
        
        ['date','required'=>true],
        ['amount','required'=>true]
        ]);

        $this->hasOne('friend_id', new Friend());
    }
}