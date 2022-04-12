<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <form class=" form_div d-flex align-items-center flex-column" id="form_div">
        <!-- name -->
        <div class="col-8 col-lg-6 my-3">
            <label for="name">Name <sub>*</sub></label>
            <input type="text" class="form-control " placeholder="Enter Your Name Here" id="name" type="text" name="name">
        </div>
        <!-- last-name -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="last_name">Last-Name <sub>*</sub></label>
            <input class="form-control" id="last_name" type="text" placeholder="Enter Last-name Here" name="last_name">
        </div>
        <!-- email -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="email">Email <sub>*</sub></label>
            <input class="form-control" id="email" type="email" name="email" placeholder="Enter Your Email Here">
        </div>
        <!-- password -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="password">Password <sub>*</sub></label>
            <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your Password" autocomplete="off">
        </div>
        <!-- phone-number -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="phone_number">Phone Number <sub>*</sub></label>
            <input class="form-control" id="phone_number" type="number" name="phone_number" placeholder="Enter Phone-number Here">
        </div>
        <!-- dob -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="birth_date">Date of Birth <sub>*</sub></label>
            <input class="form-control" id="birth_date" type="date" name="birth_date">
        </div>
        <!-- gender -->
        <div class="col-8 col-lg-6 d-lg-flex  mb-3">
            <label for="gender_div "> Gender <sub>*</sub></label>
            <div class="gender_div d-flex col-lg-6 justify-content-around">
                <div class="form-check ">
                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Male">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Female">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Other">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Other
                    </label>
                </div>
            </div>
        </div>
        <!-- profile-pic -->
        <div class="col-8 col-lg-6 mb-3">
            <label for="avatar">Choose a profile picture:</label>

            <input type="file" name="profile_pic" accept="image/png, image/jpeg" class=" mt-2 mt-md-0 ms-md-3" id="profile_img">
        </div>

        <!-- country -->
        <div class="col-8 col-lg-6 d-sm-flex mb-3">
            <div class="">
                <label for="exampleDataList" class="form-label"> Country<sub>*</sub></label>
                <input class="form-control" list="datalistOptions" id="exampleDataList_Country" placeholder="Type to search..." name="country">
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
                <input class="form-control" list="datalistOptions" id="exampleDataList_State" placeholder="Type to search..." name="state">
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
                <input class="form-control" list="datalistOptions" id="exampleDataList_City" placeholder="Type to search..." name="city">
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
            <textarea class="form-control" placeholder="Your Address" id="floatingTextarea_address" name="address"></textarea>
        </div>

        <!-- hobbies -->
        <div class="col-8 col-lg-6 mb-3 d-flex justify-content-around">
            <div class="col-6 col-sm-3 text-start">Hobbies</div>
            <div class="hobbies_div d-sm-flex col-6 col-sm-9 justify-content-evenly ">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Drumming" id="drumming" name="hobbies[]">
                    <label class="form-check-label" for="drumming">
                        Drumming
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cricket" id="cricket" name="hobbies[]">
                    <label class="form-check-label" for="cricket">
                        Cricket
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="E-sport" id="e_sport" name="hobbies[]">
                    <label class="form-check-label" for="e_sport">
                        E-sport
                    </label>
                </div>
            </div>

        </div>



        <!-- submit btn -->
        <div class="col-8 col-lg-6 d-flex align-items-center justify-content-evenly flex-wrap ">

            <button class="btn btn-primary px-4" id="submit_btn" name="submit_btn" style="cursor: pointer;"> Submit</button>


            <button  class="text-decoration-none text-white btn btn-primary" id="viewUser" style="cursor: pointer;">
                View Profiles
            </button>

        </div>

    </form>
</body> 

</html>


<script>

    //form validation portion
    let form_div = document.getElementById('form_div')
    let date = document.getElementById('birth_date');
    let submit_btn = document.getElementById('submit_btn')
    let idarray = ['name', 'last_name', 'email', 'password', 'phone_number', 'exampleDataList_Country', 'exampleDataList_State', 'exampleDataList_City', 'floatingTextarea_address']
    let gender_male = document.getElementById('flexRadioDefault1')
    let gender_female = document.getElementById('flexRadioDefault2')
    let gender_other = document.getElementById('flexRadioDefault3')
    let drumming = document.getElementById('drumming')
    let cricket = document.getElementById('cricket')
    let esport = document.getElementById('e_sport')
    let profile_img = document.getElementById('profile_img')

    // submit btn is disabled
    document.getElementById('submit_btn').setAttribute("disabled", "true");




    // flags    

    var genderFlag = false
    var hobbiesFlag = false

    let formValdiationFlag = false;
    // function for disable btn
    function buttonDisableOrNot() {
        if (drumming.checked || cricket.checked || esport.checked) {
            hobbiesFlag = true;
        } else {
            hobbiesFlag = false;
        }

        if (gender_male.checked === true || gender_female.checked === true || gender_other.checked === true) {
            genderFlag = true;
        } else {
            genderFlag = false;

        }






        if (document.getElementById('name').classList.contains('is-valid') &&
            document.getElementById('last_name').classList.contains('is-valid') &&
            document.getElementById('email').classList.contains('is-valid') &&
            document.getElementById('password').classList.contains('is-valid') &&
            document.getElementById('phone_number').classList.contains('is-valid') &&
            date.value !== '' &&
            document.getElementById('exampleDataList_Country').classList.contains('is-valid') &&
            document.getElementById('exampleDataList_State').classList.contains('is-valid') &&
            document.getElementById('exampleDataList_City').classList.contains('is-valid') &&
            document.getElementById('floatingTextarea_address').classList.contains('is-valid') &&
            profile_img.files.length > 0 && genderFlag && hobbiesFlag
        ) {

            document.getElementById('submit_btn').removeAttribute("disabled");


        } else {

            document.getElementById('submit_btn').setAttribute("disabled", "true");

        }
    }

    // validation function
    function validationFunction(regex, element, fieldElement) {

        // debouncing logic

        let timer;
        clearTimeout(timer);

        timer = setTimeout(() => {
            
            if (regex.test(element)) {
                fieldElement.classList.remove('is-invalid')
                fieldElement.classList.add('is-valid')
            } else {
                fieldElement.classList.remove('is-valid')
                fieldElement.classList.add('is-invalid')
            }
        }, 500)
    }

    // event throttling for call validation function
    form_div.addEventListener('keyup', (e) => {

        let element = e.target.value.trim();
        let fieldElement = document.getElementById(`${e.target.id}`);

        switch (e.target.id) {
            case 'name':
                validationFunction(/^[a-zA-z]([a-zA-Z]){1,15}$/, element, fieldElement)
                break;
            case 'last_name':
                validationFunction(/^[a-zA-z]([a-zA-Z]){2,15}$/, element, fieldElement)

                break;
            case 'email':
                validationFunction(
                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                    element, fieldElement
                )
                break;
            case 'password':
                validationFunction(
                    /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,20}$/,
                    element, fieldElement
                )
                break;

            case 'phone_number':
                validationFunction(
                    /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,6}$/im,
                    element, fieldElement
                )
                break;
            case 'exampleDataList_Country':
                validationFunction(/[a-zA-Z]{2,}/, element, fieldElement)
                break;
            case 'exampleDataList_State':
                validationFunction(/[a-zA-Z]{2,}/, element, fieldElement)
                break;
            case 'exampleDataList_City':
                validationFunction(/[a-zA-Z]{2,}/, element, fieldElement)
                break;
            case 'floatingTextarea_address':
                validationFunction(
                    /^([a-zA-z0-9/\\''(),-\s]{2,255})$/, element, fieldElement)
                break;
            default:
                break;
        }

        buttonDisableOrNot();




    })


    form_div.addEventListener('click', (e) => {

        buttonDisableOrNot();
    })

    // event listner for submit btn
    submit_btn.addEventListener('click', (e) => {
        e.preventDefault();

        let firstName = document.getElementById('name').value;
        let lastName = document.getElementById('last_name').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let phone_number = document.getElementById('phone_number').value;
        let birth_date = document.getElementById('birth_date').value;
        let country = document.getElementById('exampleDataList_Country').value;
        let userstate = document.getElementById('exampleDataList_State').value;
        let usercity = document.getElementById('exampleDataList_City').value;
        let userimage = $('#profile_img')[0].files[0];

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
        formdata.append('insert', 'insert')
        formdata.append('firstName', firstName)
        formdata.append('lastName', lastName)
        formdata.append('email', email)
        formdata.append('password', password)
        formdata.append('phone_number', phone_number)
        formdata.append('birth_date', birth_date)
        formdata.append('userimage', userimage)
        formdata.append('usercountry', country)
        formdata.append('userstate', userstate)
        formdata.append('usercity', usercity)
        formdata.append('useraddress', useraddress)
        formdata.append('hobbies', hobbies)
        formdata.append('gender', gender)

        // api call
        $.ajax({
            url: '../Controller/Controller.php',
            type: 'post',
            processData: false,
            contentType: false,
            data: formdata,
            success: function(data, status) {
                console.log('sucess')

            }
        })

        // clearing a value from form 
        document.getElementById('flexRadioDefault1').checked = false;
        document.getElementById('flexRadioDefault2').checked = false;
        document.getElementById('flexRadioDefault3').checked = false;
        document.getElementById('drumming').checked = false;
        document.getElementById('cricket').checked = false;
        document.getElementById('e_sport').checked = false;

        document.getElementById('birth_date').value = '';
        profile_img.value = '';

        // clearing a value and remove is-valid class from form field
        for (let id of idarray) {
            document.getElementById(`${id}`).value = '';
            document.getElementById(`${id}`).classList.remove('is-valid')

        }

    })

    // viewUser function
    document.getElementById('viewUser').addEventListener('click',(e)=>{
        e.preventDefault();
        window.location='../../../../../php/mvcs/mvc-crud/app/Views/UserList.php';
    })
 

    
</script>
