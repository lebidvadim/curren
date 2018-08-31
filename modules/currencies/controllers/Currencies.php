<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Currencies extends MX_Controller
{
    public $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model('currencies/M_currencies');
    }
    public function index(){
        $this->output->cache(5);
        $this->data['page'] = 'home';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_URL, 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=3');
        $return = json_decode(trim(curl_exec($curl)), TRUE);
        $error_curl = curl_errno($curl);

        curl_close($curl);
        $this->data['currencies'] = $return;
        $arr['date'] = time();
        $arr['cur'] = json_encode($return);
        $this->M_currencies->ins($arr);
        $this->load->view('main', $this->data);
    }
    public function history(){
        $this->data['page'] = 'history';
        $this->data['currencies'] = $this->M_currencies->get_result_array();
        $this->load->view('history', $this->data);
    }
}