<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class CommonController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

// Extend FrontendController instead of CI_Controller for all frontend stuff
class FrontendController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
    }
}

// Extend BackendController instead of CI_Controller for all backend stuff
class BackendController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
    }
}