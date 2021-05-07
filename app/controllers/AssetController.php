<?php

namespace App\Controllers;

class AssetController {
	private static $assetsPath;

	public static function registerAssets() {
		add_action( 'wp_enqueue_scripts', function () {
			self::$assetsPath = plugin_dir_url( __FILE__ ) . '../../assets';
			$version          = wp_get_theme()->get( 'Version' );

			self::registerStyles( $version );
			self::registerScripts( $version );
		} );

		add_action( 'admin_enqueue_scripts', function () {
			self::$assetsPath = plugin_dir_url( __FILE__ ) . '../../assets';

			$version          = wp_get_theme()->get( 'Version' );

			self::registerAdminStyles( $version );
			self::registerAdminScripts( $version );
		} );
	}

	private static function registerStyles( $version ) {

	}

	private static function registerScripts( $version ) {

	}

	private static function registerAdminStyles( $version ) {
        
	}

	public static function registerAdminScripts( $version ) {

	}
}
