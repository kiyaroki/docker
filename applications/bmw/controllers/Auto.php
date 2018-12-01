<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * @property Auto_model $auto_model
 */

class Auto extends CI_Controller
{
    // +----------------------------------------------------------
    // | BMW
    // +----------------------------------------------------------
    // | 2 ITF - 2018-2019
    // +----------------------------------------------------------
    // | Auto controller
    // +----------------------------------------------------------
    // | M. Decabooter, J. Janssen
    // +----------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('MY_html');
    }

    public function index()
    {
        $data['titel'] = 'Automobiles';

        $this->load->model('auto_model');
        $data['autos'] = $this->auto_model->getAllBySerie();

        $this->load->view('auto_select', $data);
    }

    public function info($id)
    {
        $data['titel'] = 'Automobiles';

        $this->load->model('auto_model');
        $data['auto'] = $this->auto_model->get($id);

        $this->load->view('auto_info', $data);
    }
}
