<?php
class FrontEnd extends TiiApplication{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function Index(){
		$this->Template()->SetContent('page_content', 'heeellllooo');
	}
}
