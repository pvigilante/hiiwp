<?php
$section = 'sidebar_section';
Kirki::add_section( $section, array(
    'priority'    => 6,
    'title'       => __( 'Sidebar', 'textdomain' ),
    'description' => __( 'Widget Styles', 'textdomain' ),
    'icon' => 'dashicons-editor-indent'
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'sidebar_widget_title_font',
    'label'       => esc_attr__( 'Title Style', 'kirki' ),
    'description' => __( 'Define styles for widgets title' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );


Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'sidebar_widget_text_font',
    'label'       => esc_attr__( 'Text Style', 'kirki' ),
    'description' => __( 'Define styles for widget text' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'sidebar_widget_link_font',
    'label'       => esc_attr__( 'Link Style', 'kirki' ),
    'description' => __( 'Define styles for widget links' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );


Kirki::add_field( 'hiiwp', array(
    'type'        => 'spacing',
    'settings'    => 'sidebar_padding',
    'label'       => esc_attr__( 'Sidebar Padding', 'kirki' ),
    'description' => __( 'Define padding around the sidebar' ),
    'section'     => $section,
    'default'     => $hiilite_options['sidebar_padding'],
    'priority'    => 1,
) );
Kirki::add_field( 'hiiwp', array(
    'type'        => 'spacing',
    'settings'    => 'sidebar_widget_margin',
    'label'       => esc_attr__( 'Widget Margin', 'kirki' ),
    'description' => __( 'Define margin around the individual widgets within the sidebar' ),
    'section'     => $section,
    'default'     => $hiilite_options['sidebar_widget_margin'],
    'priority'    => 1,
) );
?>