<?php
error_reporting(E_ALL);
error_reporting(E_ERROR | E_PARSE);

ini_set('display_errors', 10);

class Model
{
          public  $dbcon;
          // *TODO constructor
          function __construct()
          {
            // store a conncetion value in public variable through constructor
            $this->dbcon = mysqli_connect('localhost','root','', 'crud_mvc');
          }
          //*TODO function for add data into db
          public function addDataToDb($data)
          {
            // fetching values of object which is passed from  function parameter;
            $name = $data['name'];
            $last_name = $data['last_name'];
            $email = $data['email'];
            $userpassword = $data['userpassword'];
            $phonenumber = $data['phonenumber'];
            $dob = $data['dob'];
            $usercountry = $data['usercountry'];
            $userstate = $data['userstate'];
            $usercity = $data['usercity'];
            $useraddress = $data['useraddress'];
            $profile_pic_name = $data['profile_pic_name'];
            $gender = $data['gender'];
            $hobbies = $data['hobbies'];
            // mysqli query
            $insert_query = "INSERT INTO `data`(`firstname`, `lastname`, `useremail`, `userpw`, `phonenumber`, `dob`, `usercountry`, `userstate`, `usercity`, `useraddress`, `image`, `gender`, `hobbies`) VALUES ('$name','$last_name','$email','$userpassword','$phonenumber','$dob','$usercountry','$userstate','$usercity','$useraddress','$profile_pic_name','$gender','$hobbies')";
            // run a query
            mysqli_query($this->dbcon, $insert_query);
          }

          //*TODO function for get data from db;
          public function fetchDataFromDb($page_no)
          {

            // select whole data from db
            $select = 'SELECT * FROM data';
            // value for how much data will be showed in single page
            $data_per_page = 2;
            // variable for specific page 
            $page = $page_no;

            // starting point of data selection from which column number.
            $from = ($page - 1) * $data_per_page;

            // run a query
            $records = mysqli_query($this->dbcon, $select) or die('query unsucessful');

            // get howmuch row or data in db
            $total_record = mysqli_num_rows($records);

            // total number of pages by ceiling the division of total data and data which showed per page
            $total_pages = ceil($total_record / $data_per_page);

            $limited_select = "SELECT * FROM data LIMIT {$from},{$data_per_page}";

            // run a limited select query
            $run2 = mysqli_query($this->dbcon, $limited_select);

            // empty instance array
            $data = array();

            // add a row (single data ) to empty array
            while ($row_user = mysqli_fetch_array($run2)) {
              $data[] = $row_user;
            }


            // return a array with userdata and total number of pages
            return json_encode(array($data, $total_pages));

          }

          //*TODO function for delete user from db;
          public function deleteUserFromDb($del_id)
          {
            // delete query
            $delete = "DELETE FROM data WHERE id=$del_id";
            // run a query
            $run = mysqli_query($this->dbcon, $delete);
          }

          //*TODO  function for update user;
          public function updateUser($userdata){
              -
            // fetching values from array which is passed from function parameter
          
            $update_id = $userdata['update_id'];
            $name = $userdata['name'];
            $last_name = $userdata['last_name'];
            $email = $userdata['email'];
            $phonenumber = $userdata['phonenumber'];
            $dob = $userdata['dob'];
            $usercountry = $userdata['usercountry'];
            $userstate = $userdata['userstate'];
            $usercity = $userdata['usercity'];
            $useraddress = $userdata['useraddress'];
            $profile_pic_name = $userdata['profile_pic_name'];
            $gender = $userdata['gender'];
            $hobbies = $userdata['hobbies'];
            // mysqli query
          
            $update_query = "UPDATE `data` SET `id`='$update_id',`firstname`='$name',`lastname`='$last_name',`useremail`='$email',`phonenumber`='$phonenumber',`dob`='$dob',`usercountry`='$usercountry',`userstate`='$userstate',`usercity`='$usercity',`useraddress`='$useraddress',`image`='$profile_pic_name',`gender`='$gender',`hobbies`='$hobbies' WHERE id=$update_id";
            
            // run a query
            $run =mysqli_query($this->dbcon,$update_query);
          
          }

          // todo  function for fetch specific user data for update operation
          public function fetchOneUserData($userdataid){
            // fetch a particular user data by id from db
            $edit = "SELECT * FROM data WHERE id=$userdataid";
            // run a query
                $run = mysqli_query($this->dbcon,$edit);
                // fetch a user data as array
            $row_user = mysqli_fetch_array($run);
            // echo $edit;
            // return user data
            return json_encode($row_user);
          }
}
