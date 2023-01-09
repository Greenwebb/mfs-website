//registration page


const my_form = document.getElementById('add_borrower_form');
my_form.addEventListener('submit', registration);


function registration() {
    event.preventDefault();

    //get elements
    var preloader = document.getElementById('loadery');
    var loan_type = document.getElementById('loan_type').value;
    var name = document.getElementById('name').value;
    var amount = document.getElementById('amount').value;
    var date_release = document.getElementById('release_date').value;
    var distribute = document.getElementById('distribution').value;
    var status = document.getElementById('gender').value;
    var duration = document.getElementById('phone').value;
    var repayment = document.getElementById('password').value;

    var note = document.getElementById('popy');
    var response = document.getElementById('message');


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
                note.style.display = "block"
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = fname + ' is already a registered client! Would you like give user a loan?'




            } else if (this.responseText == 'Successfully added client') {
                note.style.display = "block"
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = fname + ' has been registered successfully! Would you like give user a loan?'; //window.location = "login.php";

            }
        } else if (this.responseText == 'system_error') {
            note.style.display = "block"
            response.style.color = 'red';
            preloader.style.display = "none";

            response.innerHTML = this.responseText + "please try again";


        } else {
            note.style.display = "block"
            response.style.color = 'red';
            preloader.style.display = "none";
            response.innerHTML = "ERROR";

        }

    }
    xhr.send(params);
    my_form.reset();
}


function add_loan() {
    event.preventDefault();
    document.getElementById('popy').style.display = "none"
}

function close() {
    event.preventDefault();
    document.getElementById('popy').style.display = "none"
}