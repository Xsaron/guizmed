<?php

/**
 * MedForm
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class MedForm extends BaseMedForm
{
      public function getBaseId($id)
  {
    $q = Doctrine_Query::create()
    ->from('medBaseId b')
    ->where('b.med_base_id = ?', $id);
return $q->execute();
  }


}