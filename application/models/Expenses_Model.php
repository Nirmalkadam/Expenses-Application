<?php
class Expenses_Model extends CI_Model{



    /* this is will save a user data in db */
    public function create($formArray){
        $this->db->insert('expenses',$formArray);//insert into (date,catagroy,amount,photo)
    }
    public function all(){
     return $expenses = $this->db->get('expenses')->result_array();//select form expenses table and get it
    
    }

    public function delete ($expensesId){
        $this->db->where('id',$expensesId);//target the id in table
        $this->db->delete('expenses');//delete form expenses table 
    }
    public function edit($expensesId) {//edit 
        $this->db->where('id',$expensesId);
      return $user= $this->db->get('expenses')->row_array();// select form user where user id=?
    }
    public function updateUser($expensesId,$formArray){
        $this->db->where('id',$expensesId);
        $this->db->update('expenses',$formArray);// update user form tabel

    } 
    public function view($expensesId){
        $this->db->where('id',$expensesId);
        return $user= $this->db->get('expenses')->row_array();// select form user where user id=?
      $data['expenses'] = $this->Expenses_Model->get($expensesId);
   $this->load->view('view', $data);
   
       }
   
       public function store($expensesId) {//edit 
        $this->db->where('id',$expensesId);
      return $user= $this->db->get('expenses')->row_array();// select form user where user id=?
    }
}



?>