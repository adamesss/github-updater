<?php
/**
 * GitHub Updater
 *
 * @package   GitHub_Updater
 * @author    Andy Fragen
 * @license   GPL-2.0+
 * @link      https://github.com/afragen/github-updater
 */

namespace Fragen\GitHub_Updater;

/**
 * Exit if called directly.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class GHU_Upgrade
 *
 * @package Fragen\GitHub_Updater
 */
class GHU_Upgrade extends Base {

	/**
	 * DB version.
	 *
	 * @var int
	 */
	private $db_version = 6100;

	/**
	 * GHU_Upgrade constructor.
	 */
	public function __construct() {
		$this->load_options();
		$db_version = isset( self::$options['db_version'] ) ? self::$options['db_version'] : 6000;

		if ( $db_version === $this->db_version ) {
			return;
		}

		switch ( $db_version ) {
			case 6000:
				$this->upgrade_6000();
				break;
			default:
				break;
		}

		$options = array_merge( self::$options, array( 'db_version' => $this->db_version ) );
		update_site_option( 'github_updater', $options );
	}

	/**
	 * Upgrade from version less than 6.0.0.0.
	 */
	private function upgrade_6000() {
		$this->delete_all_transients();
	}

}
