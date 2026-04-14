<?php

class hello extends CI_Controller {

    Public function index()
    {
        $data['nama'] = "Maharani";
        $this->load->view('hello_view', $data);
    }
}