<?php

error_reporting(E_ALL);
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 10);
extract($_POST);
include('../Model/Model.php');
// -------------------------------------

// class
class Controller
{
    public  $model;
    public $fielddata;
    public $profile_pic_name;
    public $profile_pic_tmpname;

    // *TODO constructor
    function __construct()
    {
        $this->model = new Model();
        $this->fielddata = array(
            "name"=>$_POST['firstName'],
            "last_name"=>$_POST['lastName'],
            "email"=>$_POST['email'],
            "phonenumber"=>$_POST['phone_number'],
            "dob"=>$_POST['birth_date'],
            "usercountry"=>$_POST['usercountry'],
            "userstate"=>$_POST['userstate'],
            "usercity"=>$_POST['usercity'],
            "useraddress"=>$_POST['useraddress'],
            "gender"=>$_POST['gender'],
            "hobbies"=>$_POST['hobbies'],
            "profile_pic_name"=>$_FILES['userimage']['name'],
        );
 
        // -----
        $this->profile_pic_name = $_FILES['userimage']['name'];
        $this->profile_pic_tmpname = $_FILES['userimage']['tmp_name'];
        // ------
    }




    //*TODO:- create
    public function insert()
    {

        // store field data to data 
        $data=$this->fielddata;
// append userpassword field to data
        $data+=['userpassword' => $_POST['password']];
        // function for move img to upload folder
        move_uploaded_file($this->profile_pic_tmpname, "../../upload_image/$this->profile_pic_name");
        // calling model's addDatatoDb function and pass data as an argument
        $this->model->addDataToDb($data);
    }



    //*TODO:- read
    public function fetchdata()
    {

        // fetching page number
        $page_no= $_POST['page_number'];

        // calling model function and pass the page no and stored return value which is coming from model
        $userData = $this->model->fetchDataFromDb($page_no);
        // return fetched value to view
        return $userData;
    }

    //*TODO:- update
    public function update()
    {
       

   
    //  store field data in data variable
        $data=$this->fielddata;
        // append update id to data varible
        $data+=['update_id' => $_POST['update_id']];
        // function for move img to upload folder
        move_uploaded_file($this->profile_pic_tmpname, "../../upload_image/$this->profile_pic_name");
        // calling model's updateUser function and pass data variable as an argument
        $this->model->updateUser($data);
    }

    //*TODO:- delete
    public function deleteUser()
    {
        // fetching delete id
        $del_id = $_POST['delete_id'];
        // calling model's deleteUserFromDb functionn and pass delete id as an argument
        $this->model->deleteUserFromDb($del_id);
    }

    // todo:-specific userdata for update operation
    public function userdata()
    {
        // fetching user id
        $userdataid = $_POST['userdata'];
        // calling model's fetchOneUserData function and pass update id as an argument
       $oneUserData=$this->model->fetchOneUserData($userdataid);
    //    return user data to view
       return $oneUserData;
    }
}





?>