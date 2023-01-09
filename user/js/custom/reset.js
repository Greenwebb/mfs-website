//forget page

const isValidEmail = /^\S+@\S+$/g;
var response = document.getElementById('pass_notification')

function reset_check() {
    //credentials
    var email = document.getElementById('email').value;

    var btn = document.getElementById('reset');


    if (email.length < 3 || !isValidEmail.test(email)) {
        response.style.color = 'red';
        response.innerHTML = 'Input full correct email address';
        btn.disabled = true;



    } else {
        response.style.color = 'green';
        response.innerHTML = 'everything is fine please submit!';
        btn.disabled = false;
        window.location.hash = "pass_notification";
    }
}

const my_formr = document.getElementById('reset_form');
my_formr.addEventListener('submit', forget);


function forget() {
    event.preventDefault();

    //get elements
    var preloader = document.getElementById('loadery');

    var email = document.getElementById('email').value;

    //start preloader
    preloader.style.display = "block";
    //concat
    var params = "email=" + email + "&reset";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/reset.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);

            if (this.responseText == 'This email address does not exist!') {
                response.style.color = 'black';
                preloader.style.display = "none";
                response.innerHTML = 'This email is not registered with your account!'



            } else if (this.responseText == 'sent') {

                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'success please wait...';
                window.location = "reset_pass.php";

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