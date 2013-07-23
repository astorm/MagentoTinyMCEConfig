<?php
class Pulsestorm_Tinymceconfig_Model_Observer
{
    public function addExtraBlocks($observer)
    {
        $layout = $observer->getLayout();
        if(!$layout)
        {
            return;
        }
        $head   = $layout->getBlock('head');
        if(!$head)
        {
            return;
        }
        $head->addJs('pulsestorm_tinymceconfig.js');
        $head->addJs('pulsestorm_tinymceconfig_isloaded.js');
    }    
}
