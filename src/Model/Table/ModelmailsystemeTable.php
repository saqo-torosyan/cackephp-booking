<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ModelmailsystemeTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('modelmailsysteme'); // Name of the table in the database, if absent convention assumes lowercase version of file prefix
        $this->displayField('id'); // field or virtual field used for default display in associated models, if absent 'id' is assumed
        $this->primaryKey('id'); // Primary key field(s) in table, if absent convention assumes 'id' field

    }
}
