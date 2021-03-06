<?php

namespace AC\Admin\Asset;

use AC\Asset\Location;
use AC\Asset\Script;

class Addons extends Script {

	public function __construct( $handle, Location $location = null ) {
		parent::__construct( $handle, $location, [ 'jquery' ] );
	}

	public function register() {
		parent::register();

		wp_localize_script( $this->get_handle(), 'AC', [
			'ajax_nonce' => wp_create_nonce( 'ac-ajax' ),
		] );
	}

}