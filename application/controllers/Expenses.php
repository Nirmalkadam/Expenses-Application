<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Class Expenses extends CI_Controller {

    public function index()
    {
        //expenses table 
        $this->load->model('Expenses_Model');
        $expenses = $this->Expenses_Model->all();
        $data=array();
    $data['expenses']=$expenses;
        $this->load->view('expenses',$data);
       $this->load->library('session');
        $this->load->library('upload');
       

        
    }

    /* this function will show resgister page */
    public function resgister(){
        $this->load->library('upload');
      $this->load->model('Expenses_Model');


//////////////////////image uplode ///////////////////////////////////////////////////
      if(is_uploaded_file($_FILES['photo']['tmp_name'])) {
        //checking image type
        $allowed =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['photo']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if(in_array($ext,$allowed)){
            $tmp_name = $_FILES["photo"]["tmp_name"];
            $bill_copy = "uploads/";
            // basename() may prevent filesystem traversal attacks;
            // further validation/sanitation of the filename may be appropriate
            $lname = basename($_FILES["photo"]["name"]);
            $newfilename = 'logo_'.round(microtime(true)).'.'.$ext;
            move_uploaded_file($tmp_name, $bill_copy.$newfilename);
            $fname = $newfilename;
        } else {
        }
    //////////////////image uploade end/////////////////////////////////////////////////////


    }
   // var_dump($fname);exit;
////////////////////// save record to database////////////////////////////////////////////

        $formArray=array();

        $formArray['date']=date('Y-m-d',strtotime($this->input->post('date')));
        $formArray['category']=$this->input->post('category');
        $formArray['amount']=$this->input->post('amount');
        $formArray['personn']=$this->input->post('personn');
        $formArray['photo']= $fname;
       

        $this->Expenses_Model->create( $formArray);

        $this->session->set_flashdata('success','Record added successfully !');
        redirect(base_url().'index.php/Expenses/index');
        
  ////////////////////////Save Database End/////////////////////////////////

    }
  /////////////////////////---------------------///////////////////////////////////////////////////
  
    
    public function store() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('Expenses/resgister', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('Expenses/resgister', $data);
        }
  ///////////////////////////----------------------////////////////////////////////////////////////
        
    }
    public function delete_Record ($expensesId)
    {
 ////////////delete table/////////////////////////////////////////

        $this->load->model('Expenses_Model');
       $expenses=$this->Expenses_Model->delete($expensesId);
       $this->Expenses_Model->delete($expensesId);
       if(empty($expenses)){
        $this->session->set_flashdata('delete','Record Delete successfull ');
        redirect(base_url().'index.php/Expenses/index');
       }else {
        $this->session->set_flashdata('deerror', 'Delete Record Not Deleted.');
        redirect(base_url().'index.php/Expenses/index');
      
     
       }
 ///////////////////deletd table end/////////////////////////////////
    }


    //////////Edit start form/////////////////////////////////////////////
    public function edit($expensesId){
       
        $this->load->model('Expenses_Model');
        $expenses=$this->Expenses_Model->edit($expensesId);
        $data=array();
        $data['expenses']=$expenses;
        $this->load->view('edit_record',$data);
            

                }
///////////////// Edit End //////////////////////////////////////////////////


////////////////Update Start ///////////////////////////////////////////////
        public function updaterecord(){
           
            $this->load->model('Expenses_Model');
           
            if($_FILES['photo']['name']) {
                //checking image type
                $allowed =  array('png','jpg','jpeg','gif');
                $filename = $_FILES['photo']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $fname=$filename;
               
                if(in_array($ext,$allowed)){
                    $tmp_name = $_FILES["photo"]["tmp_name"];
                    $fname=$this->input->post('old');
                    $bill_copy = "uploads/";
                    // basename() may prevent filesystem traversal attacks;
                    // further validation/sanitation of the filename may be appropriate
                    $lname = basename($_FILES["photo"]["name"]);
                    $newfilename = 'logo_'.round(microtime(true)).'.'.$ext;
                    move_uploaded_file($tmp_name, $bill_copy.$newfilename);
                    $fname = $newfilename;
                    
                    //var_dump($fname);exit;
                }
            
                
            }
            else {
                   
                $fname=$this->input->post('old');
                
               // var_dump($fname);exit;     
            }
           
            $formArray= array();
            if($expensesId=$this->input->post('id')){
                $this->load->library('session');
                $formArray['date']=$this->input->post('date');
                $formArray['category']=$this->input->post('category');
                $formArray['amount']=$this->input->post('amount');
                $formArray['personn']=$this->input->post('personn');
                $formArray['photo']=$fname;
                $this->Expenses_Model->updateUser($expensesId,$formArray);
                //var_dump($formArray['photo']);exit;
                $this->session->set_flashdata('update','Expenses updated successfull.');
                redirect(base_url().'index.php/Expenses/edit/'.$expensesId);
                
                } else {
                    $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
                redirect('index.php/edit_record/index');
                }
                
            
   //////////////////////Update End //////////////////////////////////////////////////////////////             
                
            }
  ///////////////////View Start //////////////////////////////////////////////////    

            public function view($expensesId){
                  //expenses  view table 
        $this->load->model('Expenses_Model');
        $expenses = $this->Expenses_Model->view($expensesId);
        $data=array();
    $data['expenses']=$expenses;
        $this->load->view('view',$data);
       $this->load->library('session');
       $this->load->model('Expenses_Model');

  //////////////// view End //////////////////////////////////////////////////   
           
 
            }
        
            }
        
?>
