//registration page


const my_form = document.getElementById('add_borrower_form');
my_form.addEventListener('submit', registration);


function registration() {
    event.preventDefault();

    //get elements
    var preloader = document.getElementById('loadery');
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var country = document.getElementById('country').value;
    var bname = document.getElementById('bname').value;
    var gender = document.getElementById('gender').value;
    var phone = document.getElementById('phone').value;
    var password = document.getElementById('password').value;
    var city = document.getElementById('city').value;
    var address = document.getElementById('address').value;
    var working_status = document.getElementById('working_status').value;
    var bdate = document.getElementById('bdate').value;
    var status = document.getElementById('status').value;
    var eligibility = document.getElementById('eligibility').value;
    var nrc = document.getElementById('nrc').value;
    var description = document.getElementById('description').value;
    var note = document.getElementById('popy');
    var response = document.getElementById('message1');
    var myModal = new bootstrap.Modal(document.getElementById("exampleModalCenteradder"), {});

    //start preloader
    preloader.style.display = "block";
    //concat
    var params = "fname=" + fname + "&lname=" + lname + "&email=" + email + "&country=" + country + "&bname=" + bname + "&gender=" + gender + "&phone=" + phone + "&password=" + password + "&city=" + city + "&address=" + address + "&working_status=" + working_status + "&bdate=" + bdate + "&status=" + status + "&eligibility=" + eligibility + "&nrc=" + nrc + "&description=" + description + "&add_borrower";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/add_borrower.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');



    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);

            if (this.responseText == 'user is already registered') {
                myModal.show();
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = fname + ' is already a registered client!'




            } else if (this.responseText == 'Successfully added client') {
                myModal.show();
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = fname + ' has been registered successfully!'; //window.location = "login.php";

            }
        } else if (this.responseText == 'system_error') {
            myModal.show();
            response.style.color = 'red';
            preloader.style.display = "none";

            response.innerHTML = this.responseText + "please try again";


        } else {
            myModal.show();
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