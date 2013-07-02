<?php
/**
* Open Source Initiative OSI - The MIT License (MIT):Licensing
* 
* The MIT License (MIT)
* Copyright (c) 2009 - 2013 Pulse Storm LLC
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
class Alanstormdotcom_Developermanual_Alanstormdotcom_Developermanual_ApiController extends Mage_Adminhtml_Controller_Action
{
    protected function _initCssBlock()
    {
        $styles = $this->getLayout()->createBlock('alanstormdotcom_developermanual/template')->setTemplate('styles.phtml');			
        $this->_addJs($styles);		
    }
    
    protected function _initSingleTemplateBlock()
    {        
        $this->_initCssBlock();			
        $this->_addContent(
            $this->getLayout()->createBlock('alanstormdotcom_developermanual/template')
            ->setTemplate($this->getFullActionName().'.phtml')
        );		
    }

    public function referenceAction()
    {
        $this->loadLayout();        
        $this->_initSingleTemplateBlock();  
        $this->renderLayout();
    }

    public function referenceAllAction()
    {
        $this->loadLayout();        
        $this->_initSingleTemplateBlock();  
        $this->renderLayout();
    }    
    
    public function singleResourceAction()
    {
        $api        = Mage::getSingleton('alanstormdotcom_developermanual/apiref');
        $resource   = $api->getResourceByName($this->getRequest()->getParam('resource'));
        
        $block      = $this->getLayout()->createBlock('alanstormdotcom_developermanual/apiresource');
        $block->setResource($resource)
        ->setShowMethod(true);
        $this->getResponse()->setBody($block->toHtml());
    }
}