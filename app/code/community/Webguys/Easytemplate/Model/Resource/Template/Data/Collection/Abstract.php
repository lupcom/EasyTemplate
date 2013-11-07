<?php

class Webguys_Easytemplate_Model_Resource_Template_Data_Collection_Abstract
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    public function addTemplateFilter( Webguys_Easytemplate_Model_Template $template )
    {
        $this->addFieldToFilter('element_id', $template->getId() );
        return $this;
    }

}