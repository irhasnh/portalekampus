<?php
class MainPageD extends MainPage {     
    /**     
     * show page edit nilai [akademik nilai]
    */
    public $showEditNilai=false;    
	public function onLoad ($param) {		
		parent::onLoad($param);				
        if (!$this->IsPostBack&&!$this->IsCallBack) {	
            
        }
	}   
}
?>