<?php
$section = 'typography_page_title_section';


Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'title_font',
    'label'       => esc_attr__( 'Title Style', 'kirki' ),
    'description' => __( 'Define styles for page title' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => ' ',
        'color'          => ' ',
        'text-align'	 => ' ',
    ),
    'priority'    => 1,
    'active_callback'	=> array(
		array(
			'setting'  => 'show_page_titles',
			'operator' => '==',
			'value'    => true,
		),
	),
) );
?>