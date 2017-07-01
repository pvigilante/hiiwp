<?php

	 /* */ ?>
.button {
	-webkit-appearance: none;
}
.button, .vc_general.vc_btn3, .vc_general.vc_btn3:focus, .vc_general.vc_btn3:hover { <?php 
	get_font_css($hiilite_options[ 'typography_button_default_font' ]);
	echo 'background:'.$hiilite_options[ 'typography_button_default_background' ]['base'].';';
	echo 'padding:'.get_spacing($hiilite_options[ 'typography_button_default_padding' ]).';';
	echo 'border:'.
		$hiilite_options['typography_button_default_border_width'].
		' solid '.
		$hiilite_options['typography_button_default_border_color']['base'].
		';';
	echo 'border-radius:'.$hiilite_options[ 'typography_button_default_border_radius' ].';';
	echo preg_replace('/[{}]/','',$hiilite_options['typography_button_custom_css']);?>
}
.button:hover {
	color: white;
	background-color: <?php echo $hiilite_options['typography_button_default_background']['hover']?>;
	border-color: <?php echo $hiilite_options['typography_button_default_border_color']['hover']?>;
}

.button-primary { <?php 
	get_font_css($hiilite_options[ 'typography_button_primary_font' ]);
	echo 'background:'.$hiilite_options[ 'typography_button_primary_background']['base'].';';
	echo 'padding:'.get_spacing($hiilite_options[ 'typography_button_primary_padding' ]).';';
	echo 'border: '.
		$hiilite_options[ 'typography_button_primary_border_width'].
		' solid '.
		$hiilite_options['typography_button_primary_border_color']['base'].
		';';
	echo 'border-radius:'.$hiilite_options['typography_button_primary_border_radius'].';';
	echo preg_replace('/[{}]/','',$hiilite_options['typography_button_primary_custom_css']);?>
}
.button-primary:hover {
	color: white;
	background-color: <?php echo $hiilite_options['typography_button_primary_border_color']['hover']?>;
	border-color: <?php echo $hiilite_options['typography_button_primary_border_color']['hover']?>;
}

.button-secondary { <?php 
	get_font_css($hiilite_options[ 'typography_button_secondary_font' ]);
	echo 'background:'.$hiilite_options[ 'typography_button_secondary_background']['base'].';';
	echo 'padding:'.get_spacing($hiilite_options[ 'typography_button_secondary_padding' ]).';';
	echo 'border: '.$hiilite_options[ 'typography_button_secondary_border_width'].' solid '.$hiilite_options['typography_button_secondary_border_color']['base'].';';
	echo 'border-radius:'.$hiilite_options['typography_button_secondary_border_radius'].';';
	echo preg_replace('/[{}]/','',$hiilite_options['typography_button_secondary_custom_css']);?>
}
.button-secondary:hover {
	color: <?=$hiilite_options['color_two']?>;
	background-color: <?php echo $hiilite_options['typography_button_secondary_background']['hover']?>;
	border-color: <?php echo $hiilite_options['typography_button_secondary_border_color']['hover']?>;
}
.button-dis { 
	border: 2px solid #989898;
	color: #989898;
}


<?php /* */ ?>