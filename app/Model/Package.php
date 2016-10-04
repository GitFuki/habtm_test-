<?php
App::uses('AppModel', 'Model');
class Package extends AppModel {
    public $hasAndBelongsToMany = array(
        'Warehouse' => array(
            'className' => 'Warehouse',
            'joinTable' => 'packages_warehouses',
            'foreignKey' => 'package_id',
            'associationForeignKey' => 'warehouse_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => ''
        )
    );

}