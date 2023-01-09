$("#add_expense").submit(function(e) {
    e.preventDefault();
    var form = document.getElementById('add_expense');
    var response = document.getElementById('message');
    var preloader = document.getElementById('loadery');
    var myModal = new bootstrap.Modal(document.getElementById("exampleModalCenter"), {});

    var data = $(this).serialize() + "&occurence=" + "disabled" + "&submit";

    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "includes/logic/add_expense.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    preloader.style.display = "block";
    xhttp.onload = function() {
        if (this.readyState == 4 && this.status == 200) {

            // Response
            if (this.responseText == 'Successfully added expense') {
                myModal.show();
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'Expense Successfully added '

            } else if (this.responseText == 'system_error') {
                myModal.show();
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'Error please try again?'; //window.location = "login.php";

            } else {
                response.innerHTML = "error";
            }

        }
    };
    xhttp.send(data);
    form.reset();


});