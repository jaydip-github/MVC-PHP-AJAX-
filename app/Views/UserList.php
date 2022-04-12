<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="d-flex align-items-center justify-content-center mt-3 mb-0">
        <a href="../../../../../php/mvcs/mvc-crud/app/Views/View.php" class="btn btn-primary text-decoration-none text-white">
            Add user
        </a>
    </div>

    <table class="table mt-1" id=''>
        <thead class="">
            <tr class="">
                <th scope="col" class="col-1">User-Id</th>
                <th scope="col" class="col-1">Photo</th>
                <th scope="col" class="col-1">Name</th>
                <th scope="col" class="col-1">gender</th>
                <th scope="col" class="col-1">Email</th>
                <th scope="col" class="col-1">phone</th>
                <th scope="col" class="col-1">Birth Date</th>
                <th scope="col" class="col-1">Region</th>
                <th scope="col" class="col-1">Address</th>
                <th scope="col" class="col-1">Hobbies</th>
                <th scope="col" class="col-1 text-center">Edit</th>
                <th scope="col" class="col-1 text-center">Delete Profile</th>
            </tr>
        </thead>
        <tbody id='tbody'>

        </tbody>


    </table>
    <div aria-label="Page navigation example" class="d-flex align-item-center justify-content-center mt-2">
        <ul class="pagination" id="pagination">
        </ul>
    </div>
</body>

</html>
<script>
    $(document).ready(() => {
        // call a fetchdata function
        fechdatafromDb(1);

    })

    function fechdatafromDb(pagenumber) {
        console.log("fetchind data....")

        // api call for fetch perticular range data
        $.ajax({
            url: '../../app/Controller/Controller.php',
            method: 'post',
            dataType: 'json',
            data: {
                page_number: pagenumber
            },
            success: function(data) {

                console.log('fetchdata', data)
                console.log('pages', data)
                // user table
                let userdata;
                // string html
                let userhtml = "";

                if (data[0].length > 0) {

                    let userdata = data[0];
                    userdata.forEach((value) => {
                        console.log('inner loop',value)
                        userhtml += `<tr>
                    <th scope="row" class="col-1">${value.id} </th>
                    <th scope="row" class="col-1">    <img src="../../upload_image/${value.image}" alt="pic" class="img-fluid" >
</th>   
                    <th scope="row" class="col-1 ">${value.firstname} ${value.lastname}</th>
                    <th scope="row" class="col-1">${value.gender}</th>
                    <th scope="row" class="col-1">${value.useremail}</th>
                    <th scope="row" class="col-1">${value.phonenumber}</th>
                    <th scope="row" class="col-1">${value.dob} </th>
                    <th scope="row" class="col-1"> ${value.usercountry}</th>
                    <th scope="row" class="col-1"> ${value.userstate}, ${value.usercity}, ${value.useraddress}</th>
                    <th scope="row" class="col-1">${value.hobbies }</th>
                    <th scope="row" class="col-1  text-center" onclick="updatefunc(${value.id})">
                            <i class='bx bx-edit-alt text-success' style="cursor: pointer;"></i>
                    </th>
                    <th scope="row" class="col-1 text-center ">
                            <i class='bx bxs-trash-alt text-danger' style="cursor: pointer;" id="${pagenumber}" onclick="deleteuser(${value.id})"></i>
                    </th>
                </tr>  `
                    })


                }
                // assign userhtml to tbody's html
                $('#tbody').html(userhtml);

                // pagination 
                let pagebox = ``;
                if (data[1] >1) {

                    for (let pageIndex = 1; pageIndex <= data[1]; pageIndex++) {

                        pagebox += `
                <li class="page-item"><a class="page-link" href="#" id='${pageIndex}' onclick="onWhichPage(${pageIndex})" >${pageIndex}</a></li>

                        `
                    }
                }
                // assign pagination html to pagination tag
                $('#pagination').html(pagebox);
                console.log('dom updated')

            }
        })

    }

    // function for delete a user
    function deleteuser(del_id) {

        console.log('del', del_id)

        // api call
        $.ajax({
            url: '../../app/Controller/Controller.php',
            method: 'post',
            data: {
                delete_id: del_id
            },
            success: function() {
                // recalling a function fetchdata because we need to assing updated value to tbody and pagination
                fechdatafromDb(1);
            }
        })

    }

    function onWhichPage(id) {
        // recalling a function fetchdata because we need to assing updated value to tbody and pagination
        // giving page number as id to backend
        fechdatafromDb(id);

    }

    function updatefunc(id) {
        //! store id through local storage
        localStorage.setItem('user_update_id', `${id}`);

        //! store id through session storage
        // sessionStorage.setItem('user_update_id', `${id}`);

        //! store id through cookie 
        // document.cookie=`user_update_id=${id}`;

        window.location = './UpdateUser.php';
    }
</script>