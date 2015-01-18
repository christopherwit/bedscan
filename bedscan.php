<?php
/*
 Plugin Name: Bedscan
 Plugin URI:
 Version: 1.0
 Description: Based on imarin's bedscan.<br>  - It performs a probe scan of the bed approx each 2x2 cm <br> - It presents a graph indicating the Z axis variations.<br>  - It is intended to be used to test how parallel the core XY and the heated bed are,<br>    as well as any dependency with respect to X and Y positions.
 Author: Tom H.
 Author URI:
 Plugin Slug: bedscan
 */

class Bedscan extends Plugin {

	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$this -> layout -> add_js_in_page(array('data' => $this -> load -> view('index/js', '', TRUE), 'comment' => ''));

		$this -> layout -> view('index/index', '');

	}
	
	
	public function remove(){
		
		/** TO DO  */
		
		/** remove files */
		shell_exec('sudo rm -rf '.PLUGINSPATH.strtolower(get_class($this)));
		
		/** SET MESSAGE TO DISPLAY */
		$this->session->set_flashdata('message', "Plugin <strong>".get_class($this)."</strong> removed");
		$this->session->set_flashdata('message_type', 'info');
		
		/** REDIRECT TO PLUGINS PAGE */
		redirect('plugin');
		
	}
	
	

}
?>
