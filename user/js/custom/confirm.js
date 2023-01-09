//forget page


/*const my_formr = document.getElementById('otp_form');
my_formr.addEventListener('submit', forget);


function forget() {
    event.preventDefault();

    //get elements
    var preloader = document.getElementById('loadery');

    var otp = document.getElementById('otp').value;

    //start preloader
    preloader.style.display = "block";
    //concat
    var params = "otp=" + otp + "&confirm";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/reset.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);

            if (this.responseText == 'incorrect code!') {
                preloader.style.display = "none";
                window.location = "reset_pass.php";
                
            }

        
        } else {
           
            preloader.style.display = "none";
            alert("ERROR");

        }

    }
    xhr.send(params);
}*/