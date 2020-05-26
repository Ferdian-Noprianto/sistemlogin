<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('model_menu');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Management Menu';
        $data['menu'] = $this->model_menu->tampilMenu();

        $this->form_validation->set_rules('menu', 'nama menu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->modal_menu->tambahMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu ditambahkan</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Management Submenu';
        $data['submenu'] = $this->model_menu->tampilSubMenu();
        $data['menu'] = $this->model_menu->tampilMenu();

        $this->form_validation->set_rules('menu', 'nama menu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->modal_menu->tambahSubMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu ditambahkan</div>');
            redirect('menu');
        }
    }
}
