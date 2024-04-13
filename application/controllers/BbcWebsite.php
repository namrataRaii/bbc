<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BbcWebsite extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
        $this->dateTime = date('d-m-Y');

    }
    public function index()
    
    {
        // echo "hii";die();
        $data['title'] = 'BBC | Home';
        $data['newsdata'] = $this->db->where('status','Published')->get('tbl_news')->result();
         
        $this->load->view('website/index',$data);
       
    }
   
   
    public function blogs()
    {
        $data['title'] = 'BBC | Blogs';
        $blog_data = $this->db->where('status', 'Published')->get('tbl_blog')->result();

      
        $data['blogdata'] = $blog_data;
        
         
        $this->load->view('website/blogs', $data);
       
    }
    public function career()
    {
        $data['title'] = 'BBC | career';
        $data['careerdata'] = $this->db->where('status',1)->get('tbl_job')->result();
        $this->load->view('website/career', $data);
    }
    public function contact()
    {
        $data['title'] = 'contact';
         
        $this->load->view('website/contact', $data);
       
    }
    public function about()
    {
        $data['title'] = 'bbc';
        

         
        $this->load->view('website/about');
       
    }
    public function founder()
    {
        $data['title'] = 'bbc';
        

         
        $this->load->view('website/founder');
       
    }
    public function services()
    {
        $data['title'] = 'services';
        $this->load->view('website/services');
       
    }
    public function taxservices()
    {
        $data['title'] = 'services';
       
        $this->load->view('website/taxservices');
       
    }
    public function businessservices()
    {
        $data['title'] = 'services';
       
        $this->load->view('website/business-and-startup-services');
       
    }
    public function contentservices()
    {
        $data['title'] = 'services';
       
        $this->load->view('website/content-services');
       
    }
    public function itservices()
    {
        $data['title'] = 'services';
        $this->load->view('website/it-and-ites-services');
       
    }
    public function digitalservices()
    {
        $data['title'] = 'services';
       
        $this->load->view('website/digital-marketing-services');
       
    }
    public function recruitmentservices()
    {
        $data['title'] = 'services';
       
        $this->load->view('website/recruitment-and-training-services');
       
    }
    public function profile()
    {
        $data['title'] = 'profile';
    
        $this->load->view('website/profile');
       
    }
    public function sendmail()
    {
       
        $this->load->view('website/send_mail');
       
    }

}