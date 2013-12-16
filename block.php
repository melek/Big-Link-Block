<?php

class BigLinkBlock extends HeadwayBlockAPI {
	
	
	public $id = 'big-link-block';
	
	public $name = 'Big Link Block';
	
	public $options_class = 'BigLinkBlockOptions';

	public $description = 'A custom text block with an anchor overlay which serves as one big button.';
		
/*	function dynamic_css($block_id) {
		
		return;
		
	}
*/

	function setup_elements() {

		$this->register_block_element(array(
			'id' => 'overlay', 
			'name' => 'Overlay', 
			'selector' => '.big-link-overlay',
			'properties' => array('background', 'borders', 'padding', 'rounded-corners', 'box-shadow'),
			'states' => array(
				'Selected' => '.big-link-overlay.selected', 
				'Hover' => '.big-link-overlay:hover', 
				'Clicked' => '.big-link-overlay:active'
			)
		));
		
		$this->register_block_element(array(
			'id' => 'text', 
			'name' => 'Text', 
			'selector' => '.big-link-text',
			'properties' => array('font', 'text-shadow')
			)
		);
		
	}
	
	function content($block) {
		
		$blg_link_input = parent::get_setting($block, 'big_link_content', null); 
		
		if ( $big_link_input == null ) {
			
//			echo big_link_content;
						
		}
		
	}
	
}