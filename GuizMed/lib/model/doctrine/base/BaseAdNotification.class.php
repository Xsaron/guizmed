<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdNotification', 'doctrine');

/**
 * BaseAdNotification
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $notification_id
 * @property integer $prev_user_id
 * @property integer $new_user_id
 * @property integer $patient_id
 * @property blob $reason
 * @property integer $accepted
 * @property integer $checked
 * @property timestamp $date
 * @property AdUser $AdUser
 * @property AdPatient $AdPatient
 * @property AdUser $AdUser_3
 * 
 * @method integer        getNotificationId()  Returns the current record's "notification_id" value
 * @method integer        getPrevUserId()      Returns the current record's "prev_user_id" value
 * @method integer        getNewUserId()       Returns the current record's "new_user_id" value
 * @method integer        getPatientId()       Returns the current record's "patient_id" value
 * @method blob           getReason()          Returns the current record's "reason" value
 * @method integer        getAccepted()        Returns the current record's "accepted" value
 * @method integer        getChecked()         Returns the current record's "checked" value
 * @method timestamp      getDate()            Returns the current record's "date" value
 * @method AdUser         getAdUser()          Returns the current record's "AdUser" value
 * @method AdPatient      getAdPatient()       Returns the current record's "AdPatient" value
 * @method AdUser         getAdUser3()         Returns the current record's "AdUser_3" value
 * @method AdNotification setNotificationId()  Sets the current record's "notification_id" value
 * @method AdNotification setPrevUserId()      Sets the current record's "prev_user_id" value
 * @method AdNotification setNewUserId()       Sets the current record's "new_user_id" value
 * @method AdNotification setPatientId()       Sets the current record's "patient_id" value
 * @method AdNotification setReason()          Sets the current record's "reason" value
 * @method AdNotification setAccepted()        Sets the current record's "accepted" value
 * @method AdNotification setChecked()         Sets the current record's "checked" value
 * @method AdNotification setDate()            Sets the current record's "date" value
 * @method AdNotification setAdUser()          Sets the current record's "AdUser" value
 * @method AdNotification setAdPatient()       Sets the current record's "AdPatient" value
 * @method AdNotification setAdUser3()         Sets the current record's "AdUser_3" value
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdNotification extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_notification');
        $this->hasColumn('notification_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('prev_user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('new_user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('patient_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('reason', 'blob', null, array(
             'type' => 'blob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('accepted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('checked', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdUser', array(
             'local' => 'prev_user_id',
             'foreign' => 'user_id',
             'onDelete' => 'cascade'));

        $this->hasOne('AdPatient', array(
             'local' => 'patient_id',
             'foreign' => 'patient_id',
             'onDelete' => 'cascade'));

        $this->hasOne('AdUser as AdUser_3', array(
             'local' => 'new_user_id',
             'foreign' => 'user_id',
             'onDelete' => 'cascade'));
    }
}