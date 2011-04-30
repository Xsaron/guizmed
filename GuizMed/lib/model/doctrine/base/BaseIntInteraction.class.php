<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('IntInteraction', 'doctrine');

/**
 * BaseIntInteraction
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $int_interaction_id
 * @property integer $med_form_id
 * @property integer $enzym_group_id
 * @property integer $interaction_type
 * @property integer $int_enzym_id
 * @property MedForm $MedForm
 * @property IntEnzymGroup $IntEnzymGroup
 * @property IntEnzym $IntEnzym
 * 
 * @method integer        getIntInteractionId()   Returns the current record's "int_interaction_id" value
 * @method integer        getMedFormId()          Returns the current record's "med_form_id" value
 * @method integer        getEnzymGroupId()       Returns the current record's "enzym_group_id" value
 * @method integer        getInteractionType()    Returns the current record's "interaction_type" value
 * @method integer        getIntEnzymId()         Returns the current record's "int_enzym_id" value
 * @method MedForm        getMedForm()            Returns the current record's "MedForm" value
 * @method IntEnzymGroup  getIntEnzymGroup()      Returns the current record's "IntEnzymGroup" value
 * @method IntEnzym       getIntEnzym()           Returns the current record's "IntEnzym" value
 * @method IntInteraction setIntInteractionId()   Sets the current record's "int_interaction_id" value
 * @method IntInteraction setMedFormId()          Sets the current record's "med_form_id" value
 * @method IntInteraction setEnzymGroupId()       Sets the current record's "enzym_group_id" value
 * @method IntInteraction setInteractionType()    Sets the current record's "interaction_type" value
 * @method IntInteraction setIntEnzymId()         Sets the current record's "int_enzym_id" value
 * @method IntInteraction setMedForm()            Sets the current record's "MedForm" value
 * @method IntInteraction setIntEnzymGroup()      Sets the current record's "IntEnzymGroup" value
 * @method IntInteraction setIntEnzym()           Sets the current record's "IntEnzym" value
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIntInteraction extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('int_interaction');
        $this->hasColumn('int_interaction_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('med_form_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('enzym_group_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('interaction_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('int_enzym_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MedForm', array(
             'local' => 'med_form_id',
             'foreign' => 'med_form_id'));

        $this->hasOne('IntEnzymGroup', array(
             'local' => 'enzym_group_id',
             'foreign' => 'enzym_group_id'));

        $this->hasOne('IntEnzym', array(
             'local' => 'int_enzym_id',
             'foreign' => 'int_enzym_id'));
    }
}