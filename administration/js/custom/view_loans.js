/*//edit_btn = document.getElementById('edit_loan');
//delete_btn = document.getElementById('delete_loan');

function confirm(){
    alert('confirm action')
}

function loan_delete(){
    alert('delete');
    var params = "delete_loan";
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/logic/loan_delete.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            if (this.responseText == 'deleted') {
                note.style.display = "block"
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = 'delete successfull'
            } else if (this.responseText == 'fail') {
                note.style.display = "block"
                response.style.color = 'green';
                preloader.style.display = "none";
                response.innerHTML = fname + 'delete failed';

            } else if (this.responseText == 'system_error') {
                note.style.display = "block"
                response.style.color = 'red';
                preloader.style.display = "none";

                response.innerHTML = this.responseText + "please try again";
            }
        } else {
            note.style.display = "block"
            response.style.color = 'red';
            preloader.style.display = "none";
            response.innerHTML = "ERROR";

        }

    }
    xhr.send(params);
}


  


function loan_edit(){
    alert('editing');
    
}*/