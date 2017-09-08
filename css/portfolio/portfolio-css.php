<?php if(false): ?><style><?php endif; ?>
.portfolio-piece {
	padding: 0.5em;
}
.portfolio-piece .content-box {
	box-shadow: inset 0 0 1px rgba(0,0,0,0.1);
}
.portfolio-piece h5 {
	margin: 0;
}
.portfolio_row .post_meta {
	position: absolute;
    width: 100%;
    bottom: 10px;
    text-align: center;
}
.portfolio_row .post_meta h3 {
	margin: 2px;
	background: rgba(255,255,255,0.8);
	display: inline-block;
	padding: 5px;
}
.portfolio_row .post_meta small {
	margin: 2px;
    background: rgba(255,255,255,0.8);
    display: inline-block;
    padding: 5px;
}
.single-portfolio .page-title {
	display:none;
}
<?php
if($hiilite_options['portfolio_template'] == 'split') {
?>
.single-portfolio .portfolio {
	padding-top:3em;
	padding-bottom:3em;
	background:<?php echo $hiilite_options['portfolio_background']; ?>;	
}
<?php
}
?>
.single-portfolio .portfolio-gallery {
	background:#fff;
}
.single-portfolio .port-img img,
.single-portfolio .portfolio-gallery .port-img img {
	width:100%;	
}
.single-portfolio .portfolio-gallery .project-comments {
	padding:1em;	
}
.project-info {
	padding:1em;
	min-width:300px;
	background:<?php echo $hiilite_options['portfolio_panel_background']; ?>;		
	color:<?php echo $hiilite_options['portfolio_info_colors']['text']; ?>;		
}
.project-info .row {
	display:flex;	
}
.project-info h1,
.project-info h2,
.project-info h3,
.project-info h4,
.project-info h5,
.project-info h6 {
	color:<?php echo $hiilite_options['portfolio_info_colors']['title']; ?>;		
}
.project-info a {
	color:<?php echo $hiilite_options['portfolio_info_colors']['link']; ?>;		
}
.project-info a:hover {
	color:<?php echo $hiilite_options['portfolio_info_colors']['hover']; ?>;		
}
.project-info .project-title {
	justify-content: space-between;	
	align-items: center;
}
.project-info .project-title h1 {
	font-weight:bold;
	font-size:1.2em;
}
.project-info hr {
		color:<?=$portfolio_work_color;?>;
		border-color: inherit;
	}
.project-info .project-client {
	padding-top:2em;	
}
.project-info .project-client h3 {
	font-weight:bold;
	font-size:0.9em;
}
.project-info .project-client h2 {
	font-size: 1.1em;
}
.project-info .project-icon {
	width:50px;
	flex:1 1 50px;
	min-width:0;
}
.project-info .cat-icon {
	border-radius:50%;	
	padding-top:5px;
	padding-right:10px;
}
.project-info .project-group {
	display:block;	
}
.project-info .project-group,
.project-info .project-social {
	margin-top:2em;	
}
.project-info .project-social {
	display: block;
}
.project-info .project-social a .fa {
	color:<?php echo $hiilite_options['portfolio_info_colors']['link']; ?>;	
	margin-right: 0.5em;
}
.project-info .project-author {
	margin-top:3em;	
}
.project-info .author-icon {
	padding-top:5px;
	padding-right:10px;
}
.project-info .author-icon img {
	border-radius:50%;	
}
.project-info .project-author h4 {
	text-transform: none;
	font-size:1.1em;
	font-weight:bold;
	color:<?php echo $hiilite_options['portfolio_info_colors']['text']; ?>;
}
.project-info .project-author small {
	margin-bottom:1em;	
}
.project-info .project-description {
	margin-top:1em;	
}
@media (max-width:912px){
	.single-portfolio .portfolio .container_inner .in_grid {
		flex-direction:column-reverse;	
	}	
	.portfolio-gallery, .project-info {
		width:100%;
		flex:1 1 100%;	
	}
	.project-info {
		padding:2em;	
	}
}