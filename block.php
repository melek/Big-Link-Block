<?php

class BigLinkBlock extends HeadwayBlockAPI {
	
	
	public $id = 'big-link-block';
	
	public $name = 'Big Link Block';
	
	public $options_class = 'BigLinkBlockOptions';

	public $description = 'A custom text block with an anchor overlay which serves as one big button.';
		
	function dynamic_css($block_id) {
		
  return 
  '
  .big-link-overlay {
  position:absolute; 
  width:100%;
  height:100%;
  top:0;
  left: 0;
  z-index: 1;
  background-color:rgba(0, 0, 0, .1);
  transition-property: background-color;
  transition-duration: 0.25s
}

.big-link-overlay {
  background-color:transparent;
  transition-property: background-color;
  transition-duration: 0.25s

}';
		
	}



	function setup_elements() {

		$this->register_block_element(array(
			'id' => 'overlay', 
			'name' => 'Overlay', 
			'selector' => '.big-link-overlay',
			'properties' => array('background', 'borders', 'box-shadow'),
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
		
		$big_link_content = parent::get_setting($block, 'content', null); 
		
		$big_link_url = parent::get_setting($block, 'link_url', null);
		
    echo '<p><a href="'..'"><span class="big-link-overlay"></span></a></p>\n');
    
    echo headway_parse_php(do_shortcode(stripslashes($big_link_content)));

		
	}
	
}