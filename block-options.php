<?php

class BigLinkBlockOptions extends HeadwayBlockOptionsAPI {

	public $tabs = array(
    'options' => 'Big Link Options'
	);

	public $inputs = array(
		'options' => array(
			'content' => array(
				'type' => 'wysiwyg',
				'name' => 'content',
				'label' => 'Content',
				'default' => null
			),
			'linkurl' => array(
        'type' => 'text',
        'name' => 'linkurl',
        'label' => 'Link URL',
        'default' => '',
        'tooltip' => 'This is where clicking the block takes the user'
			)/*,
			'fade-time' => array(
        'type' => 'slider',
        'name' => 'Initial',
        'label' => 'Fade Effect Time',
        'default' => 5,
        'slider-min' => 0,
        'slider-max' => 5,
        'slider-interval' => 1,
        'tooltip' => 'This is how long in seconds it takes for the overlay to switch to and from its hover state.'
      )*/
	));
}