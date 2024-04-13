<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagination extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->model('PaginationModel');
    }

    public function index()
    {
        $table = $this->uri->segment(3);
        $config['base_url'] = site_url('Pagination/index/'.$table);
        $config['total_rows'] = $this->PaginationModel->count_items($table);
        $config['per_page'] = 6;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['num_links'] = 2;
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i>';
        $config['prev_link'] = '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous';

        $this->pagination->initialize($config);

        $page = $this->uri->segment(4) ? $this->uri->segment(4) : 1;

        if ($this->input->is_ajax_request()) {
            $data['your_data'] = $this->PaginationModel->get_items($config['per_page'], ($page - 1) * $config['per_page'], $table);
            $this->load->view('pagination', $data);
        } else {
            $data['your_data'] = $this->PaginationModel->get_items($config['per_page'], ($page - 1) * $config['per_page'], $table);
            $this->load->view('pagination', $data);
        }
    }

}
