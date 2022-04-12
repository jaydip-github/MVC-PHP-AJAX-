<?php

error_reporting(E_ALL);
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 10);
extract($_POST);

include('../Controller/SubController.php');

//**--------------------------------------------


// create a controller
$controller = new Controller();

//*TODO:- insert logic
if (isset($_POST['insert'])) {
    $controller->insert();
}

//*TODO:- dfetch data from db function
if (isset($_POST['page_number'])) {
    $result = $controller->fetchdata();
    print_r($result);
}
//*TODO:-  delete data function
if (isset($_POST['delete_id'])) {
    $controller->deleteUser();
}

//*TODO:- update user function
if (isset($_POST['update_id'])){
    $controller->update();
}

// todo:- fetch user data for update operation
if (isset($_POST['userdata'])&&empty($_FILES['userimage']['name'])){
   $oneuserdata=$controller->userdata();
   print_r($oneuserdata);
}
