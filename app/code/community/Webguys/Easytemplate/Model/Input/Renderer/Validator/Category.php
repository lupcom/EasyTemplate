<?php

/**
 * Class Webguys_Easytemplate_Model_Input_Renderer_Validator_Category
 *
 */
class Webguys_Easytemplate_Model_Input_Renderer_Validator_Category extends Webguys_Easytemplate_Model_Input_Renderer_Validator_Base
{

    public function prepareForSave($data)
    {
        if (is_numeric($data)) {
            return $data;
        }
        $array = explode('/', $data);
        return end($array);
    }

}
