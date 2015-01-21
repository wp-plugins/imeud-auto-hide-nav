<?php
/******************************************************************/
/*
	Plugin Name: iMeud Auto-hide NAV
	Plugin URI:  http://main53.com/wordpress/auto-hide-nav/
	Author:      Kittichai
	Author URI:  http://main53.com
	Version:     1.0
	Description: Auto-hide nav bar or menu bar. *Effective with Theme with nav, footer tag.
*/ 
/******************************************************************/
	add_action( 'init', 'm_auto_hide_nav' ); 

/******************************************************************/
	function m_auto_hide_nav() {
		wp_enqueue_script('m_auto_hide_nav_script', plugin_dir_url( __FILE__ ) . '/auto-hide-nav.js', array('jquery'));	 
	}

/******************************************************************/ 
