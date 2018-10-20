<?php

if(!defined('WP_UNINSTALL_PLUGIN'))
{
	die;
}

global $wpdb;
$wpdb->query("DELETE FROM wp_posts where post_type='book'");
$wpdb->query("DELETE FROM wp_postmeta where post_id NOT IN (SELECT id FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships where object_id NOT IN (SELECT id FROM wp_posts)");

