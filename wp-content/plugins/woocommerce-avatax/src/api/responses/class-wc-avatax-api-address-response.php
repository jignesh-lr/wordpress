<?php
/**
 * WooCommerce AvaTax
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade WooCommerce AvaTax to newer
 * versions in the future. If you wish to customize WooCommerce AvaTax for your
 * needs please refer to http://docs.woocommerce.com/document/woocommerce-avatax/
 *
 * @author    SkyVerge
 * @copyright Copyright (c) 2016-2022, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

use SkyVerge\WooCommerce\PluginFramework\v5_10_12 as Framework;

defined( 'ABSPATH' ) or exit;

/**
 * The AvaTax API address response class.
 *
 * @since 1.0.0
 */
class WC_AvaTax_API_Address_Response extends \WC_AvaTax_API_Response {


	/**
	 * Get the normalized address data.
	 *
	 * @since 1.0.0
	 * @return array The normalized address data.
	 */
	public function get_normalized_address() {

		$data = $this->validatedAddresses;

		if ( empty( $data ) ){
			return array();
		}

		// use the first validated address
		$data = current( $data );

		// Map the API response to their proper keys
		$address = array(
			'address_1' => $data->line1,
			'address_2' => $data->line2,
			'city'      => $data->city,
			'state'     => $data->region,
			'country'   => $data->country,
			'postcode'  => $data->postalCode,
		);

		// Make sure the address values are squeaky clean
		$address = array_map( 'wc_clean', $address );

		return $address;
	}


}
