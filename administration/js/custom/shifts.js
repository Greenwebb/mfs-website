$(document).ready(function() {




    $('.edit_attendance').click(function() {
        var $id = $(this).attr('data-id');
        uni_modal("Edit Employee", "manage_attendance.php?id=" + $id)

    });
    $('.view_attendance').click(function() {
        var $id = $(this).attr('data-id');
        uni_modal("Employee Details", "view_attendance.php?id=" + $id, "mid-large")

    });
    $('#new_attendance_btn').click(function() {

        uni_modal("New Time Record/s", "manage_attendance.php", 'mid-large')
    })
    $('.remove_attendance').click(function() {
        var d = '"' + ($(this).attr('data-id')).toString() + '"';
        _conf("Are you sure to delete this employee's time log record?", "remove_attendance", [d])
    })
    $('.rem_att').click(function() {
        var $id = $(this).attr('data-id');
        _conf("Are you sure to delete this time log?", "rem_att", [$id])
    })
});

function remove_attendance(id) {
    // console.log(id)
    // return false;
    start_load()
    $.ajax({
        url: 'ajax.php?action=delete_employee_attendance',
        method: "POST",
        data: { id: id },
        error: err => console.log(err),
        success: function(resp) {
            if (resp == 1) {
                alert("Selected employee's time log data successfully deleted", "success");
                setTimeout(function() {
                    location.reload();

                }, 1000)
            }
        }
    })

}

function rem_att(id) {

    start_load()
    $.ajax({
        url: 'ajax.php?action=delete_employee_attendance_single',
        method: "POST",
        data: { id: id },
        error: err => console.log(err),
        success: function(resp) {
            if (resp == 1) {
                alert("Selected employee's time log data successfully deleted", "success");
                setTimeout(function() {
                    location.reload();

                }, 1000)
            }
        }
    })
}