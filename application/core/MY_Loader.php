<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Loader class extends the core CI_Loader class.
 *
 * @author  Eric 'Aken' Roberts <eric@cryode.com>
 * @link    https://github.com/cryode/CodeIgniter_Smarty
 * @version 1.1.0
 * @license MIT
 */

require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	public function __construct() {
        parent::__construct();
        //$this->_ci_view_paths = array(APPPATH.'../themes/'   => TRUE);
    }
}