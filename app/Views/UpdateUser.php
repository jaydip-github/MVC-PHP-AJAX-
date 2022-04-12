<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <title>Edit user Details</title>
</head>

<body id="body">
    <form class=" form_div d-flex align-items-center flex-column">
        <!-- name -->
        <div class="col-8 col-lg-6 my-3">
            <label for="name">Name <sub>*</sub></label>
            <input type="text" class="form-control " placeholder="Enter Your Name Here" id="name" type="text" name="name" value="">
        </div>

        <!-- last-name -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="last_name">Last-Name <sub>*</sub></label>
            <input class="form-control" id="last_name" type="text" placeholder="Enter Last-name Here" name="last_name" value=''>
        </div>
        <!-- email -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="email">Email <sub>*</sub></label>
            <input class="form-control" id="email" type="email" name="email" placeholder="Enter Your Email Here" value="">
        </div>


        <!-- phone-number -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="phone_number">Phone Number <sub>*</sub></label>
            <input class="form-control" id="phone_number" type="number" name="phone_number" placeholder="Enter Phone-number Here" value="">
        </div>
        <!-- dob -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="birth_date">Date of Birth <sub>*</sub></label>
            <input class="form-control" id="birth_date" type="date" name="birth_date" value="">
        </div>
        <!-- gender -->
        <div class="col-8 col-lg-6 d-lg-flex  mb-3">
            <label for="gender_div "> Gender <sub>*</sub></label>
            <div class="gender_div d-flex col-lg-6 justify-content-around">
                <div class="form-check ">
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="Male" value="Male">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Female" value="Female">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Other" value="Other">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Other
                    </label>
                </div>
            </div>
        </div>
        <!-- country -->
        <div class="col-8 col-lg-6 d-sm-flex mb-3">
            <div class="">
                <label for="exampleDataList" class="form-label"> Country<sub>*</sub></label>
                <input class="form-control" list="datalistOptions" id="exampleDataList_Country" placeholder="Type to search..." name="country" value="">
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
            <div class="">
                <label for="exampleDataList" class="form-label">State <sub>*</sub></label>
                <input class="form-control" list="datalistOptions" id="exampleDataList_State" placeholder="Type to search..." name="state" value="">
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
            <div class="">
                <label for="exampleDataList" class="form-label">City <sub>*</sub></label>
                <input class="form-control" list="datalistOptions" id="exampleDataList_City" placeholder="Type to search..." name="city" value="">
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
        </div>
        <!-- address -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="floatingTextarea">Address <sub>*</sub></label>
            <textarea class="form-control" placeholder="Your Address" id="floatingTextarea_address" name="address">""</textarea>
        </div>
        <!-- hobbies -->

        <div class="col-8 col-lg-6 mb-3 d-flex justify-content-around">
            <div class="col-6 col-sm-3 text-start">Hobbies</div>
            <div class="hobbies_div d-sm-flex col-6 col-sm-9 justify-content-evenly ">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Drumming" id="Drumming" name="hobbies[]">
                    <label class="form-check-label" for="drumming">
                        Drumming
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cricket" id="Cricket" name="hobbies[]">
                    <label class="form-check-label" for="cricket">
                        Cricket
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="E-sport" id="E-sport" name="hobbies[]">
                    <label class="form-check-label" for="e_sport">
                        E-sport
                    </label>
                </div>
            </div>

        </div>
        <!-- profile-pic -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="avatar">Choose a profile picture:</label>
            <input type="file" id="profile_pic" name="profile_pic" accept="image/png, image/jpeg" class=" mt-2 mt-md-0 ms-md-3">
            <p class=" mb-1 text-danger">please select a image oterwise data won't update.</p>
            <p> previous-stored-image:<span id="prev_image" class="text-primary"></span></p>
        </div>
        <!-- submit btn -->
        <div class="mt-3">
            <button class="btn btn-primary text-white " id="update_button" name="update_btn">
                update
            </button>
        </div>

    </form>;
</body>

</html>


<script>
    $(document).ready(() => {
        console.log('document ready')
        getUserData();
    })


    function getUserData() {
        //! get userid from local storage
        let userid = parseInt(localStorage.getItem('user_update_id'));

        //! get userid from local stroage
        // let userid = parseInt(sessionStorage.getItem('user_update_id'));

        //! get userid from cookie 
        // let userid = parseInt(document.cookie.split('=')[1]);
        // api call
        $.ajax({
            url: '../../app/Controller/Controller.php',
            method: 'post',
            dataType: 'json',
            data: {
                userdata: userid
            },
            success: function(data) {
                console.log('userdata', data)

                valueSetter('name', data.firstname)
                valueSetter('last_name', data.lastname)
                valueSetter('email', data.useremail)
                valueSetter('birth_date', data.dob)
                valueSetter('phone_number', data.phonenumber)
                valueSetter('exampleDataList_Country', data.usercountry)
                valueSetter('exampleDataList_State', data.userstate)
                valueSetter('exampleDataList_City', data.usercity)

                document.getElementById('floatingTextarea_address').innerText = data.useraddress;
                document.getElementById('prev_image').innerText = data.image;


                //we can use template literal here also like `${data.gender}`   
                document.getElementById(data.gender).checked = true;

                let hobbies = data.hobbies.split(',');
                if (hobbies.length !== 0) {
                    hobbies.forEach((val) => {
                        //    we can use template literal here also like `${val}`
                        document.getElementById(val).checked = true;
                    })
                }





            }
        })
    }

    // evnent listener for update btn
    document.getElementById('update_button').addEventListener('click', (e) => {
        e.preventDefault();
        let firstName = document.getElementById('name').value;
        let lastName = document.getElementById('last_name').value;
        let email = document.getElementById('email').value;
        let phone_number = document.getElementById('phone_number').value;
        let birth_date = document.getElementById('birth_date').value;
        let usercountry = document.getElementById('exampleDataList_Country').value;
        let userstate = document.getElementById('exampleDataList_State').value;
        let usercity = document.getElementById('exampleDataList_City').value;
        let userimage;
        // here if image is not update then we need to give a previous value to userimage which is given in p tag which is below input:file tag
        if (document.getElementById('profile_pic').files.length == 0) {

            userimage = document.getElementById('prev_image').value;
        } else {
            userimage = $('#profile_pic')[0].files[0];
        }

        let useraddress = document.getElementById('floatingTextarea_address').value;
        let gender;
        let hobbies = '';
        // fetching gender value
        document.getElementsByName('flexRadioDefault').forEach((element) => {
            if (element.checked) {
                gender = element.value;
            }
        })
        // fetching hobbies value and append it into hobbies
        document.getElementsByName('hobbies[]').forEach((element) => {
            if (element.checked) {
                hobbies += element.value + ','
            }
        })
        hobbies = hobbies.slice(0, hobbies.length - 1);

        // form data
        let formdata = new FormData();
        formdata.append('update_id', parseInt(localStorage.getItem('user_update_id')));
        formdata.append('firstName', firstName)
        formdata.append('lastName', lastName)
        formdata.append('email', email)
        formdata.append('phone_number', phone_number)
        formdata.append('birth_date', birth_date)
        formdata.append('userimage', userimage)
        formdata.append('usercountry', usercountry)
        formdata.append('userstate', userstate)
        formdata.append('usercity', usercity)
        formdata.append('useraddress', useraddress)
        formdata.append('hobbies', hobbies)
        formdata.append('gender', gender)

        // api call
        $.ajax({
            url: '../../app/Controller/Controller.php',
            type: 'post',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log('data', data)



                window.location = '../../../../../php/mvcs/mvc-crud/app/Views/UserList.php';


            }
        })
    })


    function valueSetter(id, fieldvalue) {
        document.getElementById(`${id}`).value = fieldvalue;
    }
</script>