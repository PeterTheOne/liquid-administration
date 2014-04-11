<?php

class Motion extends AppModel {
    public $belongsTo = array(
        'Votingsession' => array(
            'className' => 'Votingsession',
            'foreignKey' => 'votingsession'
        )
    );
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'text' => array(
            'rule' => 'notEmpty'
        )
    );
}