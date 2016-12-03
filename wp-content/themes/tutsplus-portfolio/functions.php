<?php
	/*
	# ==========================================================================
	# functions.php
	#
	# This file contain all the functions needed to setup for theme to work
	# ==========================================================================
	*/
	

	/* ------------------------------- */
	/* 1. CSS */
	/* ------------------------------- */
	
	/** Linking Style Sheet  **/
	function wps_theme_styles()
	{
		wp_enqueue_script('font_css','https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700');
		wp_enqueue_script('google_api','https://fonts.googleapis.com/css?family=Abril+Fatface');
		wp_enqueue_style('bootstrap_css',get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri(). '/css/main.css');
		wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts','wps_theme_styles');


	/* ------------------------------- */
	/* 2. JS */
	/* ------------------------------- */

	/** Linking Scripts File  **/
	function wps_themes_js()
	{
		wp_enqueue_script('modrnizr_js', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', '' , '' , false);
		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('isotope_js', get_template_directory_uri().'/js/isotope.pkgd.min.js',array('jquery'),'',true);
		wp_enqueue_script('plugins_js',get_template_directory_uri(). '/js/plugins.js','',true);
		wp_enqueue_script('main_js',get_template_directory_uri(). '/js/main.js',array('jquery','bootstrap_js','isotope_js','plugins_js'),true);
	}
	
	add_action('wp_enqueue_scripts','wps_themes_js');
?>