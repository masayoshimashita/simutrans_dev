<?php
//require_once("Controller/Base_Controller.php") ;
class Ja_tab_Controller extends Base_Controller{
//class Index_Controller extends Reinforce_Zwei{
	

	public function Index(){
		$this->Load_Method("Smarty_Wrapper","assign",array("this_page","Simutrans Develop Tools - New Project ")) ;
		$this->display("Index") ;

	}


	public function Display($dis_page){
		$this->Load_Method("Smarty_Wrapper","display","Ja_tab/".$dis_page.".tpl") ;
	}

}

?>