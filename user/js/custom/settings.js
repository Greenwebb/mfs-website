//update_settings page


const my_form = document.getElementById('settings_form');
my_form.addEventListener('submit', update_settings);


function update_settings() {
    event.preventDefault();

    //get elements
    var preloader = document.getElementById('loadery');
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var country = document.getElementById('country').value;
    var gender = document.getElementById('gender').value;
    var phone = document.getElementById('phone').value;

    var address = document.getElementById('address').value;

    //  var bdate = document.getElementById('bdate').value;

    var status = document.getElementById('status').value;
    //  var eligibility = document.getElementById('eligibility').value;
    var nrc = document.getElementById('nrc').value;
    var doc_type = document.getElementById('doc_type').value;

    var response = document.getElementById('message');


    //start preloader
    preloader.style.display = "block";
    //concat
    var params = "fname=" + fname + "&lname=" + lname + "&email=" + email + "&country=" + country + "&gender=" + gender + "&phone=" + phone + "&address= " + address + " & status= " + status + "&doc_type=" + doc_type + "&nrc=" + nrc + "&update_profile";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/update_profile.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    var myModal = new bootstrap.Modal(document.getElementById("exampleModalCenter"), {});

    myModal.show();




    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);

            if (this.responseText == 'update succesfull') {
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'Update sucessful'




            } else if (this.responseText == 'update error') {

                response.style.color = 'red';
                preloader.style.display = "none";
                response.innerHTML = fname + 'update erro'; //window.location = "login.php";

            } else if (this.responseText == 'failed  to send!') {

                response.style.color = 'red';
                preloader.style.display = "none";

                response.innerHTML = this.responseText + "please try again";


            }
        } else {

            response.style.color = 'red';
            preloader.style.display = "none";
            response.innerHTML = "ERROR";

        }

    }
    xhr.send(params);
}


function add_loan() {
    event.preventDefault();
    document.getElementById('popy').style.display = "none"
}

function close() {
    event.preventDefault();
    document.getElementById('popy').style.display = "none"
}