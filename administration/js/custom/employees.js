$(document).ready(function() {




    $('.edit_employee').click(function() {
        var $id = $(this).attr('data-id');
        uni_modal("Edit Employee", "manage_employee.php?id=" + $id)

    });
    $('.view_employee').click(function() {
        var $id = $(this).attr('data-id');
        uni_modal("Employee Details", "view_employee.php?id=" + $id, "mid-large")

    });
    $('#new_emp_btn').click(function() {
        uni_modal("New Employee", "manage_employee.php")
    })
    $('.remove_employee').click(function() {
        _conf("Are you sure to delete this employee?", "remove_employee", [$(this).attr('data-id')])
    })
});

function remove_employee(id) {
    start_load()
    $.ajax({
        url: 'ajax.php?action=delete_employee',
        method: "POST",
        data: { id: id },
        error: err => console.log(err),
        success: function(resp) {
            if (resp == 1) {
                alert_toast("Employee's data successfully deleted", "success");
                setTimeout(function() {
                    location.reload();

                }, 1000)
            }
        }
    })
}