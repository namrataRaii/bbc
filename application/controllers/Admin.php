<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->helper(['form', 'security']);
        $this->load->library('form_validation');
        // $this->load->library('emaillibrary');
        date_default_timezone_set("Asia/Kolkata");
        $this->dateTime = date('d-m-Y');
        if (empty($this->session->userdata('Admin'))) {
            redirect(base_url('admin'));
        }
    }


    public function index()
    {
        
        $data['title'] = 'index';
        $data['allusers'] = '';
        $data['total_blog'] = $this->db->count_all('tbl_blog');
        $data['total_jobs'] = $this->db->count_all('tbl_events');
        $data['total_news'] = $this->db->count_all('tbl_news');
         
        $this->load->view('admin/index',$data);
         
    }


    public function statusUpdateNews()
    {

        $userid = $this->uri->segment(3);
        $action = $this->uri->segment(4);
        if ($action == 'pending') {
            $userdata = $this->db->get_where('tbl_news', ['id' => $userid])->row();
            if ($this->db->update('tbl_news', ['status' => 'Pending'], ['id' => $userid])) {

                echo 'published';
            } else {
                echo 'error';;
            }
        } else {
            $userdata = $this->db->get_where('tbl_news', ['id' => $userid])->row();
            if ($this->db->update('tbl_news', ['status' => 'Published'], ['id' => $userid])) {

                echo 'success';
            } else {
                echo 'error';
               
            }
        }
        // echo json_encode([$output]);
    }
    public function statusUpdateGallery()
    {

        $userid = $this->uri->segment(3);
        $action = $this->uri->segment(4);
        if ($action == 'pending') {
            $userdata = $this->db->get_where('tbl_blog', ['id' => $userid])->row();
            if ($this->db->update('tbl_blog', ['status' => 'Pending'], ['id' => $userid])) {
                echo 'published';
            } else {
                echo 'error';
            }
        } else {
            $userdata = $this->db->get_where('tbl_blog', ['id' => $userid])->row();
            if ($this->db->update('tbl_blog', ['status' => 'Published'], ['id' => $userid])) {
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }

    // function to publish Events
    public function statusUpdatejob()
    {

        $userid = $this->uri->segment(3);
        $action = $this->uri->segment(4);
        if ($action == 'pending') {
            $userdata = $this->db->get_where('tbl_job', ['id' => $userid])->row();
            if ($this->db->update('tbl_job', ['status' => 'Pending'], ['id' => $userid])) {
                echo 'published';
            } else {
                echo 'error';
            }
        } else {
            $userdata = $this->db->get_where('tbl_job', ['id' => $userid])->row();
            if ($this->db->update('tbl_job', ['status' => 'Published'], ['id' => $userid])) {
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }



    function job()
    {
        $data['title'] = 'Jobs';

        if (!empty($this->input->post()) && ($this->uri->segment(3) != 'update')) {
            $output['res'] = 'error';
            $this->form_validation->set_rules('job_designation', 'Job Designation', 'trim|required');
            $this->form_validation->set_rules('job_location', 'Job Location', 'trim|required');
            $this->form_validation->set_rules('job_experience', 'Job Experience', 'trim|required');
            $this->form_validation->set_rules('job_duration', 'Job Duration', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $output['res'] = 'error';
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                // echo json_encode([$output]);
            } else {

                $job_designation = $this->input->post('job_designation');
                $job_location = $this->input->post('job_location');
                $job_experience = $this->input->post('job_experience');
                $job_duration = $this->input->post('job_duration');
                $updateExpertise = array(

                    'job_designation' => $job_designation,
                    'job_location' => $job_location,
                    'job_experience' => $job_experience,
                    'job_duration' => $job_duration,
                    'created_at' => $this->dateTime,
                    'status' => 1,
                );
                if ($this->db->insert('tbl_job', $updateExpertise)) {
                    $output['res'] = 'success';
                    $output['msg'] = 'Saved Successfully';
                    $output['redirect'] = base_url('admin/job');
                } else {
                    $output['msg'] = 'Failed to save !';
                }
            }

            echo json_encode([$output]);
        } else {
            if ($this->uri->segment(3) && ($this->uri->segment(3) == 'add')) {
                $data['job'] = $this->db->order_by('id', 'desc')->get('tbl_job')->result();
                 
                $this->load->view('admin/job', $data);
                 
            } else if ($this->uri->segment(4) && ($this->uri->segment(3) == 'edit')) {

                $eventid = base64_decode($this->uri->segment(4));
                $data['job'] = $this->db->order_by('id', 'desc')->get_where('tbl_job', ['id' => $eventid])->row();
                 
                $this->load->view('admin/job-edit', $data);
                 
            } else if ($this->uri->segment(3) && ($this->uri->segment(3) == 'update')) {
                $this->form_validation->set_rules('job_designation', 'Job Designation', 'trim|required');
                $this->form_validation->set_rules('job_location', 'Job Location', 'trim|required');
                $this->form_validation->set_rules('job_experience', 'Job Experience', 'trim|required');
                $this->form_validation->set_rules('job_duration', 'Job Duration', 'trim|required');
                if ($this->form_validation->run() == FALSE) {
                    $output['res'] = 'error';
                    $msg = explode('</p>', validation_errors());
                    $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                    // echo json_encode([$output]);
                } else {
                $eventid = $this->input->post('job_id');
                

                $job_designation = $this->input->post('job_designation');
                $job_location = $this->input->post('job_location');
                $job_experience = $this->input->post('job_experience');
                $job_duration = $this->input->post('job_duration');
                $updateExpertise = array(

                    'job_designation' => $job_designation,
                    'job_location' => $job_location,
                    'job_experience' => $job_experience,
                    'job_duration' => $job_duration,
                    'updated_at' => $this->dateTime,
                );

                
                if ($this->db->update('tbl_job', $updateExpertise, ['id' => $eventid])) {

                    $output['res'] = 'success';
                    $output['msg'] = 'Updated Successfully';
                    $output['redirect'] = base_url('admin/job');
                } else {
                    $output['msg'] = 'Failed to update !';
                }
            }
                echo json_encode([$output]);
            } else {
                $data['job'] = $this->db->order_by('id', 'desc')->get('tbl_job')->result();
                 
                $this->load->view('admin/job-list', $data);
                 
            }
        }
    }


    public function blog()
    {

        ini_set('post_max_size', '32M');
        $data['title'] = 'Blogs';
        $output['res'] = 'error';
        $data['allusers'] = '';
        $data['blogs'] = $this->db->order_by('id', 'desc')->get('tbl_blog')->result();

        if (!empty($this->input->post()) && ($this->uri->segment(3) != 'update')) {


            if (!empty($_FILES["gallery_thumbnail"]["name"])) {
                $document = pathinfo($_FILES['gallery_thumbnail']['name'], PATHINFO_EXTENSION);
                $document_upload = time() . "gallery_thumbnail." . $document;

                $config2['upload_path'] = './uploads/';
                $config2['allowed_types'] = 'jpeg|png|jpg';
                $config2['max_size'] = 1024 * 5; // file size in KB
                $config2['file_name'] = $document_upload;
                $this->load->library('upload');
                $this->upload->initialize($config2);
                $this->upload->do_upload("gallery_thumbnail");
            }


            $gallery_title = $this->input->post('gallery_title');
            $gallery_description = $this->input->post('gallery_description');
            $uploaded_date = $this->input->post('uploaded_date');
            $url = $this->input->post('url');

            $files = $_FILES['gallery'];
            $uploaded_count = 0;
            $uploaded_file_names = array();
            $gallerydata = [];
            // Set the configuration for the upload library
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 1024 * 5;
            $this->load->library('upload');

            // Loop through all the selected files
            foreach ($_FILES['gallery']['name'] as $key => $image_name) {
                $_FILES['userfile']['name'] = $_FILES['gallery']['name'][$key];
                $_FILES['userfile']['type'] = $_FILES['gallery']['type'][$key];
                $_FILES['userfile']['tmp_name'] = $_FILES['gallery']['tmp_name'][$key];
                $_FILES['userfile']['error'] = $_FILES['gallery']['error'][$key];
                $_FILES['userfile']['size'] = $_FILES['gallery']['size'][$key];

                // Modify the field name (userfile) to include an index
                $_FILES['userfile']['name'] = 'test_' . $key . '_' . $image_name;

                // Also, create a new unique name for each uploaded file
                $file_name = 'test_' . $key . '_' . $image_name;
                $this->upload->initialize($config);
                if ($this->upload->do_upload('userfile')) {
                    // $uploaded_count++;
                    // $uploaded_file_names[] = $file_name;
                    $uploaddata = $this->upload->data();
                    $filename = $uploaddata['file_name'];
                    array_push($gallerydata, $filename);
                }
            }

            $filesall = implode(",", $gallerydata);
            $galleryData = array(
                'gallery_title' => $gallery_title,
                'gallery_thumbnail' => $document_upload,
                'gallery_description' => $gallery_description,
                'gallery_images' => $filesall,
                'status' => 'Pending',
                'uploaded_date' => $uploaded_date,
                'url' => $url
            );

            if ((!$this->upload->do_upload("userfile")) || (!$this->upload->do_upload("gallery_thumbnail"))) {
                
                $output['res'] = 'error';
                $msg =  $this->upload->display_errors();
                $output['msg'] = $msg;
            }
            else{
            if ($this->db->insert('tbl_blog', $galleryData)) {
                $output['res'] = 'success';
                $output['msg'] = 'Saved Successfully';
                $output['redirect'] = base_url('admin/blog');
            } else {
                $output['msg'] = 'Failed to Save !';
            }
        }
            // The rest of your code

            echo json_encode([$output]);
        } else if ($this->uri->segment(3) == 'edit') {
            $eventid = base64_decode($this->uri->segment(4));
            $data['blogs'] = $this->db->order_by('id', 'desc')->get_where('tbl_blog', ['id' => $eventid])->row();
             
            $this->load->view('admin/edit-blog', $data);
             
        } else if ($this->uri->segment(3) == 'update') {

            $gallery_title = $this->input->post('gallery_title');
            $galleryID = $this->input->post('galleryid');
            $uploaded_date = $this->input->post('uploaded_date');
            $url = $this->input->post('url');
            $gallery = $this->db->order_by('id', 'desc')->get_where('tbl_blog', ['id' => $galleryID])->row();
            if (!empty($_FILES["image"]["name"])) {
              
                $extension1 = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                $original_file_name1 = time() . "gallery_image." . $extension1;

                $config1['upload_path'] = './uploads/';
                $config1['allowed_types'] = 'jpeg|png|jpg';
                $config1['max_size'] = 1024 * 5; // file size in KB
                $config1['file_name'] = $original_file_name1;
                $this->load->library('upload');
                $this->upload->initialize($config1);
                $this->upload->do_upload("image");
            } else {
              
                $original_file_name1 = $gallery->gallery_images;
            }

            if (!empty($_FILES["gallery_thumbnail"]["name"])) {
                
                $document = pathinfo($_FILES['gallery_thumbnail']['name'], PATHINFO_EXTENSION);
                $document_upload = time() . "gallery_thumbnail." . $document;

                $config2['upload_path'] = './uploads/';
                $config2['allowed_types'] = 'jpeg|png|jpg';
                $config2['max_size'] = 1024 * 5; // file size in KB
                $config2['file_name'] = $document_upload;
                $this->load->library('upload');
                $this->upload->initialize($config2);
                $this->upload->do_upload("gallery_thumbnail");
            } else {
              
                $document_upload = $gallery->gallery_thumbnail;
            }
      
            if ((!$this->upload->do_upload("image")) || (!$this->upload->do_upload("gallery_thumbnail"))) {
               
            
                $msg =  $this->upload->display_errors();
                $output['msg'] = $msg;
            }
            else{
            if (
                $this->db->update('tbl_blog', [
                    'gallery_title' => $gallery_title,
                    'status' => 'Pending',
                    'gallery_images' => $original_file_name1,
                    'gallery_thumbnail' => $document_upload,
                    'uploaded_date' => $uploaded_date,
                    'url' => $url
                ], ['id' => $galleryID])
            ) {
                $output['res'] = 'success';
                $output['msg'] = 'Updated Successfully';
                $output['redirect'] = base_url('admin/blog');
            } else {
                $output['msg'] = 'Failed To Update ';
            }
        }
            echo json_encode([$output]);
        } else {
            if ($this->uri->segment(3) == 'add') {
                 
                $this->load->view('admin/add-blog', $data);
                 
            } else {
                 
                $this->load->view('admin/blog', $data);
                 
            }
        }
    }
    public function news()
    {
        $data['title'] = 'News';
        $output['res'] = 'error';
        $data['allusers'] = '';
        $data['news'] = $this->db->order_by('id', 'desc')->get_where('tbl_news')->result();
        if (!empty($this->uri->segment(3)) && $this->uri->segment(3) == 'view') {
             
            $this->load->view('admin/news', $data);
             
        } else if ($this->uri->segment(4) && ($this->uri->segment(3) == 'edit')) {

            $eventid = base64_decode($this->uri->segment(4));
            $data['news'] = $this->db->order_by('id', 'desc')->get_where('tbl_news', ['id' => $eventid])->row();
             
            $this->load->view('admin/news-edit', $data);
             
        } else if ($this->uri->segment(3) && ($this->uri->segment(3) == 'update')) {
            $eventid = $this->input->post('news_id');
            $output['res'] = 'error';

            $news_description = $this->input->post('news_description');
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            $updateExpertise = array(
                'news_description' => $news_description,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'status' => 'Pending',
            );
            if ($this->db->update('tbl_news', $updateExpertise, ['id' => $eventid])) {
                $output['res'] = 'success';
                $output['msg'] = 'Updated Successfully';
                $output['redirect'] = base_url('admin/news');
            } else {
                $output['msg'] = 'Failed to update !';
            }
            echo json_encode([$output]);
        } else if ($this->uri->segment(3) == 'add') {
            $output['res'] = 'error';

            $this->form_validation->set_rules('news_description', 'News Description', 'trim|required');
            $this->form_validation->set_rules('start_date', 'Start Time', 'trim|required');
            $this->form_validation->set_rules('end_date', 'End Time', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $output['res'] = 'error';
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                // echo json_encode([$output]);
            } else {
                $news_description = $this->input->post('news_description');
                $start_date = $this->input->post('start_date');
                $end_date = $this->input->post('end_date');
                $updateExpertise = array(
                    'news_description' => $news_description,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'status' => 'Pending',
                );
                if ($this->db->insert('tbl_news', $updateExpertise)) {
                    // $this->db->insert('tbl_events', $updateExpertise)
                    $output['res'] = 'success';
                    $output['msg'] = 'Saved Successfully';
                    $output['redirect'] = base_url('admin/news');
                } else {
                    $output['msg'] = 'Failed to save';
                }
            }
            echo json_encode([$output]);
        } else {
             
            $this->load->view('admin/news-list', $data);
             
        }
    }
    public function deleteData()
    {

        $videoid = $this->uri->segment(3);
        $table_name = $this->input->post('table');
        // unlink($filename,$path)
        if ($this->db->delete($table_name, ['id' => $videoid])) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
    // function to publish Events
    public function statusUpdateEvent()
    {

        $userid = $this->uri->segment(3);
        $action = $this->uri->segment(4);
        if ($action == 'pending') {
            $userdata = $this->db->get_where('tbl_events', ['id' => $userid])->row();
            if ($this->db->update('tbl_events', ['status' => 'Pending'], ['id' => $userid])) {
                echo 'published';
            } else {
                echo 'error';
            }
        } else {
            $userdata = $this->db->get_where('tbl_events', ['id' => $userid])->row();
            if ($this->db->update('tbl_events', ['status' => 'Published'], ['id' => $userid])) {
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }



    function events()
    {
        $data['title'] = 'Events';
        $data['allusers'] = '';
        $data['categories'] = '';

        if (!empty($this->input->post()) && ($this->uri->segment(3) != 'update')) {
            $output['res'] = 'error';
            $this->form_validation->set_rules('event_title', 'Title', 'trim|required');
            $this->form_validation->set_rules('event_url', 'Event URL', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $output['res'] = 'error';
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
                // echo json_encode([$output]);
            } else {
                $extension1 = pathinfo($_FILES["event_thumbnail"]["name"], PATHINFO_EXTENSION);
                $original_file_name1 = time() . "event_thumbnail." . $extension1;

                $document = pathinfo($_FILES['event_image']['name'], PATHINFO_EXTENSION);
                $document_upload = time() . "event_image." . $document;

                $max_size = 3000152;
                $allowed_extension = ['jpg', 'jpeg', 'png'];
                if (!in_array($extension1, $allowed_extension)) {
                    $output['res'] = 'error';
                    $output['msg'] = 'Please choose images only : ' . implode(",", $allowed_extension);
                    // echo json_encode([$output]);
                } else {
                    if ($_FILES['event_thumbnail']['size'] > $max_size) {
                        $output['res'] = 'error';
                        $output['msg'] = "File size is too large, Max size is " . number_format(($max_size * 0.000001), 2, '.', '') . 'MB';
                        // echo json_encode([$output]);
                    } else {
                        $config1['upload_path'] = './uploads/';
                        $config1['allowed_types'] = 'jpeg|png|jpg';
                        $config1['max_size'] = 1024 * 5; // file size in KB
                        $config1['file_name'] = $original_file_name1;
                        $this->load->library('upload');
                        $this->upload->initialize($config1);
                        $this->upload->do_upload("event_thumbnail");

                        $config2['upload_path'] = './uploads/';
                        $config2['allowed_types'] = 'jpeg|png|jpg';
                        $config2['max_size'] = 1024 * 5; // file size in KB
                        $config2['file_name'] = $document_upload;
                        $this->load->library('upload');
                        $this->upload->initialize($config2);
                        $this->upload->do_upload("event_image");

                        $event_title = $this->input->post('event_title');
                        $event_type = $this->input->post('event_type');
                        $event_stime = $this->input->post('event_stime');
                        $event_etime = $this->input->post('event_etime');
                        $event_url = $this->input->post('event_url');
                        $event_location = $this->input->post('event_location');
                        $event_description = $this->input->post('event_description');
                        $updateExpertise = array(
                            'event_thumbnail' => $original_file_name1,
                            'event_image' => $document_upload,
                            'event_title' => $event_title,
                            'event_url' => $event_url,
                            'event_startdate' => $event_stime,
                            'event_enddate' => $event_etime,
                            'event_description' => $event_description,
                            'event_type' => $event_type,
                            'event_location' => $event_location,
                            'status' => 'Pending',
                        );
                        if ($this->db->insert('tbl_events', $updateExpertise)) {
                            // $this->db->insert('tbl_events', $updateExpertise)
                            $output['res'] = 'success';
                            $output['msg'] = 'Saved Successfully';
                            $output['redirect'] = base_url('admin/events');
                        } else {
                            $output['msg'] = 'Failed to save !';
                        }
                    }
                }
            }

            echo json_encode([$output]);
        } else {
            if ($this->uri->segment(3) && ($this->uri->segment(3) == 'add')) {
                $data['events'] = $this->db->order_by('id', 'desc')->get('tbl_events')->result();
                 
                $this->load->view('admin/event', $data);
                 
            } else if ($this->uri->segment(4) && ($this->uri->segment(3) == 'edit')) {

                $eventid = base64_decode($this->uri->segment(4));
                $data['events'] = $this->db->order_by('id', 'desc')->get_where('tbl_events', ['id' => $eventid])->row();
                 
                $this->load->view('event/events-edit', $data);
                 
            } else if ($this->uri->segment(3) && ($this->uri->segment(3) == 'update')) {
                $eventid = $this->input->post('event_id');
                $eventData = $this->db->order_by('id', 'desc')->get_where('tbl_events', ['id' => $eventid])->row();
                $output['res'] = 'error';


                if (!empty($_FILES["event_thumbnail"]["name"])) {
                    $extension1 = pathinfo($_FILES["event_thumbnail"]["name"], PATHINFO_EXTENSION);
                    $original_file_name1 = time() . "event_thumbnail." . $extension1;

                    $config1['upload_path'] = './uploads/';
                    $config1['allowed_types'] = 'jpeg|png|jpg';
                    $config1['max_size'] = 1024 * 5; // file size in KB
                    $config1['file_name'] = $original_file_name1;
                    $this->load->library('upload');
                    $this->upload->initialize($config1);
                    $this->upload->do_upload("event_thumbnail");
                } else {
                    $original_file_name1 = $eventData->event_thumbnail;
                }

                if (!empty($_FILES["event_image"]["name"])) {
                    $document = pathinfo($_FILES['event_image']['name'], PATHINFO_EXTENSION);
                    $document_upload = time() . "event_image." . $document;

                    $config2['upload_path'] = './uploads/';
                    $config2['allowed_types'] = 'jpeg|png|jpg';
                    $config2['max_size'] = 1024 * 5; // file size in KB
                    $config2['file_name'] = $document_upload;
                    $this->load->library('upload');
                    $this->upload->initialize($config2);
                    $this->upload->do_upload("event_image");
                } else {
                    $document_upload = $eventData->event_image;
                }

                $event_title = $this->input->post('event_title');
                $event_type = $this->input->post('event_type');
                $event_stime = $this->input->post('event_stime');
                $event_etime = $this->input->post('event_etime');
                $event_url = $this->input->post('event_url');
                $event_location = $this->input->post('event_location');
                $event_description = $this->input->post('event_description');
                $updateExpertise = array(
                    'event_thumbnail' => $original_file_name1,
                    'event_image' => $document_upload,
                    'event_title' => $event_title,
                    'event_url' => $event_url,
                    'event_startdate' => $event_stime,
                    'event_enddate' => $event_etime,
                    'event_description' => $event_description,
                    'event_type' => $event_type,
                    'event_location' => $event_location,
                    'status' => 'Pending',
                );
                if ($this->db->update('tbl_events', $updateExpertise, ['id' => $eventid])) {
                    // $this->db->insert('tbl_events', $updateExpertise)
                    $output['res'] = 'success';
                    $output['msg'] = 'Updated Successfully';
                    $output['redirect'] = base_url('admin/events');
                } else {
                    $output['msg'] = 'Failed to update !';
                }
                echo json_encode([$output]);
            } else {
                $data['events'] = $this->db->order_by('id', 'desc')->get('tbl_events')->result();
                 
                $this->load->view('event/events-list', $data);
                 
            }
        }
    }

    function changepassword()
    {
        $data['title'] = 'BBC | Change Password';
        $output['res'] = 'error';
        if (!empty($this->input->post())) {
            $this->form_validation->set_rules('current_password', 'Current Password', 'required');
            $this->form_validation->set_rules('new_password', 'New Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $output['res'] = 'error';
                $msg = explode('</p>', validation_errors());
                $output['msg'] = str_ireplace('<p>', '', $msg[0]);
            } else {

                $currentPassword = $this->input->post('current_password');
                $newPassword = $this->input->post('new_password');
                $confirmPassword = $this->input->post('confirm_password');
                $adminData = $this->session->userdata('Admin');
                $userId = $adminData->id;
                if ($currentPassword !== $adminData->password) {
                    $output['res'] = 'error';
                    $output['msg'] = 'Invalid current password!';
                } elseif ($newPassword === $currentPassword) {
                    // Check if the new password is the same as the current password
                    $output['res'] = 'error';
                    $output['msg'] = 'New password cannot be the same as the current password!';
                } elseif ($newPassword !== $confirmPassword) {
                    // Check if the new password matches the confirm password
                    $output['res'] = 'error';
                    $output['msg'] = 'New password and confirm password do not match!';
                } else {
                    if ($this->db->where('id', $userId)->update('tbl_admin', array('password' => $newPassword))) {
                        $output['res'] = 'success';
                        $output['msg'] = 'Saved Successfully';
                        $output['redirect'] = base_url('admin/changepassword');
                    } else {
                        $output['msg'] = 'Failed to save !';
                    }
                }
            }
            echo json_encode([$output]);
        } else {

             
            $this->load->view('admin/changepassword', $data);
             
        }
    }
    function profile()
    {
        $admindata = $this->session->userdata('Admin');
       $userdata = $this->db->where('id',$admindata->id)->get('tbl_admin')->row();
        $data['title'] = 'Profile | BBC';
        $output['res'] = 'error';
        $data['admin'] = $userdata;
        if(($this->uri->segment(3) == 'update') && (empty($this->input->post()))) {
            // echo 2; die();
            // Check if a file is being uploaded
            if (!empty($_FILES["icon"]["name"])) {
               
                $document = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
                $document_upload = time() . "icon." . $document;
    
                $config2['upload_path'] = './uploads/';
                $config2['allowed_types'] = 'jpeg|png|jpg';
                $config2['max_size'] = 1024 * 5; // file size in KB
                $config2['file_name'] = $document_upload;
                $this->load->library('upload');
                $this->upload->initialize($config2);
    
                // If the upload fails, set error message in $output
               
    
                // If a file was uploaded and the user already has an icon, delete the old one
                if (!empty($userdata->icon)) {
                    $icon_path = './uploads/' . $userdata->icon;
                    if (file_exists($icon_path)) {
                        unlink($icon_path);
                    }
                }
            } else {
                
                // If no new file is being uploaded, retain the existing icon
                $document_upload = $userdata->icon;
            }
            if (!$this->upload->do_upload("icon")) {
                
                $output['res'] = 'error';
                $msg =  $this->upload->display_errors();
                $output['msg'] = $msg;
            }
            else{
            // Update the database with the new icon (or the existing one)
            if ($this->db->update('tbl_admin', [
                'icon' => $document_upload,
                'updated_at' => $this->dateTime,
            ], ['id' => $userdata->id])) {
                
                $output['res'] = 'success';
                $output['msg'] = 'Updated Successfully';
                $output['redirect'] = base_url('admin/profile');
            } else {
                
                $output['msg'] = 'Failed To Update';
            }
        }
    
            echo json_encode([$output]);
           
        }
        elseif(($this->uri->segment(3) == 'update') && (!empty($this->input->post()))) {
          
    // Set validation rules
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[10]|numeric');

    // Set custom validation error message
    $this->form_validation->set_message('exact_length', 'The {field} must be exactly 10 digits.');

    // Run validation
    if ($this->form_validation->run() == FALSE) {
        $output['res'] = 'error';
        $msg = explode('</p>', validation_errors());
        $output['msg'] = str_ireplace('<p>', '', $msg[0]);
    } else {
        // Validation passed, update profile
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $mobile = $this->input->post('mobile');

        // Get user ID from session
        $adminData = $this->session->userdata('Admin');
        $userId = $adminData->id;

        // Update profile in the database
        $data = array(
            'name' => $name,
            'username' => $email,
            'address' => $address,
            'mobile' => $mobile
        );
        $this->db->where('id', $userId);
        if ($this->db->update('tbl_admin', $data)) {
            $output['res'] = 'success';
            $output['msg'] = 'Profile Updated Successfully';
            $output['redirect'] = base_url('admin/profile');
        } else {
            // Failed to update profile
            $output['res'] = 'error';
            $output['msg'] = 'Failed to update profile. Please try again.';
            $output['redirect'] = base_url('admin/profile');
        }
       
        }
        echo json_encode([$output]);
       
    }

    else{
         
        $this->load->view('admin/profile', $data);
         
    }
    }
    
   
    // function to logout 
    public function logout()
    {
        $this->session->unset_userdata('Admin');
        redirect(base_url('admin'));
    }
}
