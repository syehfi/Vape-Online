<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('client_produk_model', 'produk');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->library('cart');

        }
        
    
        public function index()
        {
            $data['produk'] = $this->produk->getAllProduk();
            $this->load->view('./template/header_home', $data, FALSE);
            $this->load->view('home/index', $data);       
            $this->load->view('./template/footer');
                
        }

        
    
    }
    
    /* End of file Home.php */
    
?>