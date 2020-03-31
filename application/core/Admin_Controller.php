<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if( !($this->session->userdata('role') == 1) )
        {
            show_error('Anda tidak memiliki akses pada halaman ini.');
        }
    }
}