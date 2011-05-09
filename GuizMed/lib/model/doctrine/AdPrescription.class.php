<?php

/**
 * AdPrescription
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class AdPrescription extends BaseAdPrescription
{
    function getName($id){
        $medForm = Doctrine_Query::create()->from('medForm amf')->where('amf.med_form_id = ?', $id)->execute();
//        $medBaseId = Doctrine_Query::create()->from('medBaseId mbi')->where('mbi.med_base_id = ?', $medForm[0]->getMedBaseId())->execute();
        return $medForm[0]->getMedBaseId();
        //return $medBaseId->count().'haha';
    }
    function stop($reason){
        $this->setStopDate(date('y-m-d H:m:s'));
        $this->setStopReason($reason);
        $this->save();
    }
}