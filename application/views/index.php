<?php
$this->load->view('template/header');
$this->load->view('template/navbar');
$this->load->view('section/appointment');

$this->load->view($page);

$this->load->view('template/footer');
