<?php

required_once'mvc_project_spp/models/user';


class AdminController
   

{ 
    private $userModel;

   
   public fuction_construct()


                   {

$this->userModel=new user();
}

      public function dashboard()


{


$user=$this->userModel->getAll();
$this->loadView('admin/dashboard',['users=>users']);

}


public function create(){

$this->loadView('mvc_project_spp/user/create');


}


public function store(){

        if($_SERVER['REQUEST_METHOD']!=='post'){
          header('mvc_project_spp/users/create')
                exit;
                   }

$data=[
  'name'=>trim($_post[name]??''),
  'email'=>trim($post['email'])??''),
   'phone'=> trim($post['phone']??''),
];

$errors=$this->userModel->validate($data);

if(empty($errors['email'])&& $this->userModel->emailExists($data['email'])){

$errors['email']='Email adress already exists';


}

if(!empty($errors)){

$this->loadView('users/create'[

'errors'=$errors,
'old'=>$data


]);
return;
}

//new user

if($userId){

session_start();
$SESSION['success']='User Created sucessfully!';
header('')


}




}











}