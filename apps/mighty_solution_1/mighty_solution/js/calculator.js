const my_form = document.getElementById('calculater_form');
my_form.addEventListener('submit', calculator);

/**/
summary = document.getElementById('popFundo_asdf');



function calculator() {
    event.preventDefault();
    amount = document.getElementById('total_amount').value;
    var first_name = document.getElementById('fname').value;
    var last_name = document.getElementById('lname').value;
    var email = document.getElementById('emailyy').value;
    var phone = document.getElementById('phonne').value;
    var duration = document.getElementById('durationn').value;
    var type = document.getElementById('typel').value;
    var gender = document.getElementById('genderry').value;
    // var returns = "not yet"; //document.getElementById('returns').value;
    summary.style.display = "block";
    //alert(amount + first_name + last_name + email + phone + duration + type + gender);

    document.getElementById("result_amount").innerHTML = amount;
    document.getElementById("res_namee").innerHTML = first_name + ' ' + last_name;
    document.getElementById("loant").innerHTML = type;
    document.getElementById("durationn").innerHTML = duration;
    document.getElementById("mobily").innerHTML = phone;
    document.getElementById("emaill").innerHTML = email;
    document.getElementById("genderr").innerHTML = gender;
    document.getElementById("returns").innerHTML = "rates not fed yet";
}

function closee() {
    event.preventDefault();
    summary.style.display = "none";
}

function send() {
    event.preventDefault();
    alert('rates not fed yet');
    //alert(gender + type + purpose + phone + emaily + last_name + first_name + amount);
    /* var params = "first_name=" + first_name + "&last_name=" + last_name + "&emaily=" + emaily + "&phone=" + phone + "&purpose=" + purpose + "&message=" + message + "&submit";

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/contact.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        console.log(this.response);

    }

    xhr.send(params)
        //my_form.reset();

    if (this.readyState == 4 && this.status == 200) {
        let requestObject = null;


        try {
            requestObject = JSON.parse(xhr.responseText)
                //loadingText.style.display = "none"


            console.log(requestObject)
            console.log(requestObject['name'])


        } catch (e) {
            console.error("could not parse JSON")
            console.warn(this.response)
            form.formContainer.style.overflow = "block"

            console.log("Internal server error Please try again or check your connection");

        }

        if (requestObject == null || requestObject['ok'] == false) {
            console.log("Internal server error Please try again or check your connection");
            loader.style.display = "none"
        } else {
            handleResponse(requestObject)
        }

    }
}
} */

}