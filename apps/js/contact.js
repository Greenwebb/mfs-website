const my_form = document.getElementById("contact_form");
my_form.addEventListener("submit", contact_form);
var first_name = document.getElementById("first_name").value;
var last_name = document.getElementById("last_name").value;
var email = document.getElementById("email").value;
var phone = document.getElementById("phone").value;
var purpose = document.getElementById("purpose").value;
var message = document.getElementById("message").value;
var loader = document.getElementById("loadery");

function contact_form(e) {
    e.preventDefault();
    loader.style.display = "block";

    var params =
        "first_name=" +
        first_name +
        "&last_name=" +
        last_name +
        "&email=" +
        email +
        "&phone=" +
        phone +
        "&purpose=" +
        purpose +
        "&message=" +
        message +
        "&submit";

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/logic/contact.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.send(params);
    //my_form.reset();
    xhr.onload = function() {
        //console.log(this.response);


        if (this.readyState == 4 && this.status == 200) {
            let requestObject = null;

            console.warn(this.response);
            loader.style.display = "none";
            alert("success");
            my_form.reset();

        } else {
            //loader.style.display = "none";
            alert("error");
        }
    };
}