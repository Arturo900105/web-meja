<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('Home');
    }

    public function details($case = 0)
    {
        $data = array();
        switch ($case) {
            case 0:
                $data['imgSet'] = 'eventos';
                break;
            case 1:
                $data['imgSet'] = 'banquetes';
                break;
            case 2:
                $data['imgSet'] = 'congresos';
                break;
            case 3:
                $data['imgSet'] = 'convenciones';
                break;
        }
        $this->load->view('Details', $data);
    }
}
