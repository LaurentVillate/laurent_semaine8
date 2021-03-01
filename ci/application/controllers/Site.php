<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller 
{

    public function essai_page()
    {
        $this->load->view('essai_page');
    }
}

?>