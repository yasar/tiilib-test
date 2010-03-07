<?php
Tii::Import(_.'apps'._.'admin'._.'application.php');

class Admin extends TiiApplication_Admin{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function Index(){
		$this->Template()->SetContent('page_content', 'heeellllooo');
	}
}
