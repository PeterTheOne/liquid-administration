<?php
class Session extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
                'votingsessions' => array(
                    'id' => array(
                        'type' => 'integer',
                        'null' => false,
                        'default' => null,
                        'length' => 10,
                        'key' => 'primary'
                    ),
                    'created' => array(
                        'type' => 'datetime'
                    ),
                    'start' => array(
                        'type' => 'datetime'
                    ),
                    'end' => array(
                        'type' => 'datetime'
                    ),
                    'name' => array(
                        'type' => 'string'
                    ),
                    'text' => array(
                        'type' => 'text'
                    ),
                    'location' => array(
                        'type' => 'string'
                    ),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'id',
                            'unique' => 1
                        ),
                    )
                )
			),
            'create_field' => array(
                'motions' => array(
		            'votingsession' => array(
                        'type' => 'integer',
                        'null' => false,
                        'length' => 10,
                        'key' => 'index'
                    ),
                )
            )
		),
		'down' => array(
			'drop_table' => array(
				'votingsessions'
			),
            'drop_field' => array(
                'motions' => array(
                    'votingsession'
                )
            )
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
