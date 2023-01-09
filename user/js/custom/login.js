var response = document.getElementById('pass_notification');
//login page
let login_check = function() {
    var phone_no = document.getElementById('phone_no');
    //const isValidEmail = /^[0]?[789]\d{9}$/; // || !isValidEmail.test(phone_no)) 
    var pass = document.getElementById('password').value;
    var btn = document.getElementById('login');



    if (phone_no.value.length < 10 || phone_no.value.length > 10) {
        response.style.color = 'red';
        response.innerHTML = 'please input full correct 10 digit number!';
        btn.disabled = true;

    } else if ((pass.length <= 7)) {
        response.style.color = 'red';
        response.innerHTML = 'Input Password, should be more than 8 characters!';
        btn.disabled = true;

    } else {
        response.style.color = 'green';
        response.innerHTML = 'everything is fine please submit!';
        btn.disabled = false;
    }
}




const my_form = document.getElementById('login_form');
my_form.addEventListener('submit', login);

function login() {
    event.preventDefault();
    //get elements
    var preloader = document.getElementById('loadery');
    var phone = document.getElementById('phone_no').value;
    var password = document.getElementById('password').value;

    //start preloader
    preloader.style.display = "block";
    //concat
    var params = "phone=" + phone + "&password=" + password + "&login";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/login_auth.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {


            if (this.responseText == 'login_succces') {
                console.log(this.responseText);
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'success, please wait..!';
                window.location.hash = "pass_notification";
                window.location = 'index.php';

            } else if (this.responseText == 'account does not exist') {
                console.log(this.responseText);
                preloader.style.display = "none";
                response.style.color = 'black';

                response.innerHTML = 'Account does not exist, please create  an account!'



            } else if (this.responseText == 'wrong number or password') {
                console.log(this.responseText);
                response.style.color = 'red';
                preloader.style.display = "none";
                response.innerHTML = 'You have Input a ' + this.responseText + ', please try again!';

            } else
            if (this.responseText == 'system_error') {
                console.log(this.responseText);
                response.style.color = 'red';
                preloader.style.display = "none";
                response.innerHTML = this.responseText;


            } else {


                response.style.color = 'red';
                preloader.style.display = "none";
                response.innerHTML = "ERROR";

            }

        } else if (this.readyState == 4 && this.status == 404) {

            console.log('error')
        }

    }
    xhr.send(params);
}
//my_form.reset();
//location.reload();