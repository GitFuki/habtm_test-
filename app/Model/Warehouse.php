<?php
App::uses('AppModel', 'Model');
class Warehouse extends AppModel {
    public $hasAndBelongsToMany = array(
        'Package' => array(
            'className' => 'Package',
            'joinTable' => 'packages_warehouses',
            'foreignKey' => 'warehouse_id',
            'associationForeignKey' => 'package_id',
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