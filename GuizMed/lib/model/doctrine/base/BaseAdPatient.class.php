<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdPatient', 'doctrine');

/**
 * BaseAdPatient
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $patient_id
 * @property string $fname
 * @property string $lname
 * @property date $bdate
 * @property timestamp $patient_since
 * @property enum $sex
 * @property Doctrine_Collection $AdNonPsychoPat
 * @property Doctrine_Collection $AdNotification
 * @property Doctrine_Collection $AdUserPatient
 * 
 * @method integer             getPatientId()      Returns the current record's "patient_id" value
 * @method string              getFname()          Returns the current record's "fname" value
 * @method string              getLname()          Returns the current record's "lname" value
 * @method date                getBdate()          Returns the current record's "bdate" value
 * @method timestamp           getPatientSince()   Returns the current record's "patient_since" value
 * @method enum                getSex()            Returns the current record's "sex" value
 * @method Doctrine_Collection getAdNonPsychoPat() Returns the current record's "AdNonPsychoPat" collection
 * @method Doctrine_Collection getAdNotification() Returns the current record's "AdNotification" collection
 * @method Doctrine_Collection getAdUserPatient()  Returns the current record's "AdUserPatient" collection
 * @method AdPatient           setPatientId()      Sets the current record's "patient_id" value
 * @method AdPatient           setFname()          Sets the current record's "fname" value
 * @method AdPatient           setLname()          Sets the current record's "lname" value
 * @method AdPatient           setBdate()          Sets the current record's "bdate" value
 * @method AdPatient           setPatientSince()   Sets the current record's "patient_since" value
 * @method AdPatient           setSex()            Sets the current record's "sex" value
 * @method AdPatient           setAdNonPsychoPat() Sets the current record's "AdNonPsychoPat" collection
 * @method AdPatient           setAdNotification() Sets the current record's "AdNotification" collection
 * @method AdPatient           setAdUserPatient()  Sets the current record's "AdUserPatient" collection
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdPatient extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_patient');
        $this->hasColumn('patient_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('fname', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('lname', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('bdate', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('patient_since', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('sex', 'enum', 1, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => 'M',
              1 => 'F',
             ),
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AdNonPsychoPat', array(
             'local' => 'patient_id',
             'foreign' => 'ad_patient_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('AdNotification', array(
             'local' => 'patient_id',
             'foreign' => 'patient_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('AdUserPatient', array(
             'local' => 'patient_id',
             'foreign' => 'patient_id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));
    }
}