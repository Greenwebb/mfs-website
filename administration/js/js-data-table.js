//[Data Table Javascript]

//Project:	Qixa Admin - Responsive Admin Template
//Primary use:   Used only for the Data Table

$(function() {
    "use strict";


    $('#order-listing').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });


}); // End of use strict