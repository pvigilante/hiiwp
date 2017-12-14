<?php

	 /* */ ?>
.button {
	-webkit-appearance: none;
	display: inline-block;
}
.button, .vc_general.vc_btn3, .vc_general.vc_btn3:focus, .vc_general.vc_btn3:hover, button.single_add_to_cart_button.button.alt, button.single_add_to_cart_button.button.alt.disabled.wc-variation-selection-needed { <?php 
	get_font_css(Hii::$options[ 'typography_button_default_font' ]);
	echo 'background:'.Hii::$options[ 'typography_button_default_background' ]['base'].';';
	echo 'padding:'.get_spacing(Hii::$options[ 'typography_button_default_padding' ]).';';
	echo 'border:'.
		Hii::$options['typography_button_default_border_width'].
		' solid '.
		Hii::$options['typography_button_default_border_color']['base'].
		';';
	echo 'border-radius:'.Hii::$options[ 'typography_button_default_border_radius' ].';';?>
}
<?php
if(strpos(Hii::$options['typography_button_custom_css'], '.button') === false) echo '.button { '.Hii::$options['typography_button_custom_css']. '}';
else echo Hii::$options['typography_button_custom_css'];
?>	
.button:hover {
	color: white;
	background: <?php echo Hii::$options['typography_button_default_background']['hover']?>;
	border-color: <?php echo Hii::$options['typography_button_default_border_color']['hover']?>;
}

.button-primary, body .woocommerce #respond input#submit.alt, body .woocommerce a.button.alt, body .woocommerce button.button.alt, body .woocommerce input.button.alt { <?php 
	get_font_css(Hii::$options[ 'typography_button_primary_font' ]);
	echo 'background:'.Hii::$options[ 'typography_button_primary_background']['base'].';';
	echo 'padding:'.get_spacing(Hii::$options[ 'typography_button_primary_padding' ]).';';
	echo 'border: '.
		Hii::$options[ 'typography_button_primary_border_width'].
		' solid '.
		Hii::$options['typography_button_primary_border_color']['base'].
		';';
	echo 'border-radius:'.Hii::$options['typography_button_primary_border_radius'].';';?>
	display: inline-block;
}
<?php 
if(strpos(Hii::$options['typography_button_primary_custom_css'], '.button-primary') === false) echo '.button-primary { '.Hii::$options['typography_button_primary_custom_css']. '}';
else echo Hii::$options['typography_button_primary_custom_css'];
?>
.button-primary:hover {
	color: white;
	background: <?php echo Hii::$options['typography_button_primary_background']['hover']?>;
	border-color: <?php echo Hii::$options['typography_button_primary_border_color']['hover']?>;
}

.button-secondary { <?php 
	get_font_css(Hii::$options[ 'typography_button_secondary_font' ]);
	echo 'background:'.Hii::$options[ 'typography_button_secondary_background']['base'].';';
	echo 'padding:'.get_spacing(Hii::$options[ 'typography_button_secondary_padding' ]).';';
	echo 'border: '.Hii::$options[ 'typography_button_secondary_border_width'].' solid '.Hii::$options['typography_button_secondary_border_color']['base'].';';
	echo 'border-radius:'.Hii::$options['typography_button_secondary_border_radius'].';';?>
	display: inline-block;
}
<?php
if(strpos(Hii::$options['typography_button_secondary_custom_css'], '.button-secondary') === false) echo '.button-secondary { '.Hii::$options['typography_button_secondary_custom_css']. '}';
else echo Hii::$options['typography_button_secondary_custom_css'];
?>
.button-secondary:hover {
	color: <?php echo Hii::$options['color_two']?>;
	background: <?php echo Hii::$options['typography_button_secondary_background']['hover']?>;
	border-color: <?php echo Hii::$options['typography_button_secondary_border_color']['hover']?>;
}
.button-dis { 
	border: 2px solid #989898;
	color: #989898;
}
<?php

	 /* */ ?>