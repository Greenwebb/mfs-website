//registration page


var response = document.getElementById('pass_notification')

function registration_check() {
    //credentials
    var email = document.getElementById('email').value;
    var number = document.getElementById('phone_no').value;
    var password = document.getElementById('password').value;
    const isValidEmail = /^\S+@\S+$/g;
    var btn = document.getElementById('register');


    if (email.length < 3 || !isValidEmail.test(email)) {
        response.style.color = 'red';
        response.innerHTML = 'Input full correct email address';
        btn.disabled = true;


    } else if (number.length < 10 || number.length > 10) {
        response.style.color = 'red';
        response.innerHTML = 'please input full correct 10 digit number!';
        btn.disabled = true;


    } else if ((password.length <= 7)) {
        response.style.color = 'red';
        response.innerHTML = 'Input Password, should be more than 8 characters!';
        btn.disabled = true;

    } else {
        response.style.color = 'green';
        response.innerHTML = 'everything is fine please submit!';
        btn.disabled = false;
        window.location.hash = "pass_notification";
    }
}

const my_formr = document.getElementById('registration_form');
my_formr.addEventListener('submit', registration);


function registration() {
    event.preventDefault();

    //get elements
    var preloader = document.getElementById('loadery');
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone_no').value;
    var password = document.getElementById('password').value;


    //start preloader
    preloader.style.display = "block";
    //concat
    var params = "fname=" + fname + "&lname=" + lname + "&email=" + email + "&phone=" + phone + "&password=" + password + "&register";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/register_auth.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);

            if (this.responseText == 'user is already registered') {
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'Account is already registered, please go to login!'



            } else if (this.responseText == 'Successfully added client') {

                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'Account created, please login!';
                alert('successful, we are redirecting to you to the login page')
                window.location = "login.php";

            }
        } else if (this.responseText == 'system_error') {
            response.style.color = 'red';
            preloader.style.display = "none";
            response.innerHTML = this.responseText;


        } else {
            response.style.color = 'red';
            preloader.style.display = "none";
            response.innerHTML = "ERROR";

        }

    }
    xhr.send(params);
}