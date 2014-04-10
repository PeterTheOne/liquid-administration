<?php

class Motion extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'text' => array(
            'rule' => 'notEmpty'
        )
    );
}