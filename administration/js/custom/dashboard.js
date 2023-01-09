function loadXMLDoc() {
    var clientele = document.getElementById('clientele_total');

    //amount and total number
    var total_given_loans = document.getElementById('total_given');
    var active_given_loans = document.getElementById('active_given_loans');


    var loans_payedback = document.getElementById('loans_payedback');
    var fully_paidback = document.getElementById('fully_paidback');

    var total_earnings = document.getElementById('total_earnings');
    var net_earnings = document.getElementById('net_earnings');
    var officer_total = document.getElementById('officer_total');
    var total_expense = document.getElementById('total_expense');
    var one_month = document.getElementById('one_month');

    var loans_payed = document.getElementById('loans_payed');
    const request = new XMLHttpRequest();

    request.onload = () => {
        let responseObject = null;

        try {
            responseObject = JSON.parse(request.responseText);

        } catch (event) {

        }

        if (responseObject) {
            handleResponse(responseObject);
        }
    };

    var requestData = "clientele=" + "&total_given_loans=" + "&active_given=" + "&loans_payedback=" + "&fully_paidback=" + "&total_earnings=" + "&officer_total=" + "&net_earnings=" + "&total_income=" + "&total_expenses";

    request.open('post', 'includes/logic/dashboard.php');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);


    function handleResponse(responseObject) {

        //clientele
        if (responseObject.okay) {
            clientele.innerHTML = responseObject.value
        } else {
            console.log(responseObject.error)
        };

        //total_given_loans
        if (responseObject.okay0) {
            total_given_loans.innerHTML = "ZMW " + responseObject.value0
        } else {
            console.log(responseObject.error)
        };


        //active given
        if (responseObject.okay1) {
            active_given_loans.innerHTML = responseObject.value1
        } else {
            console.log(responseObject.error)
        };


        //loans paid back
        if (responseObject.okay2) {
            loans_payedback.innerHTML = "ZMW " + responseObject.value2
        } else {
            console.log(responseObject.error)
        };


        //number of people loans paid back
        if (responseObject.okay02) {
            fully_paidback.innerHTML = +responseObject.value02
        } else {
            console.log(responseObject.error)
        };

        //total repayments(total earnings)
        if (responseObject.okay03) {
            total_earnings.innerHTML = "ZMW " + responseObject.value03
        } else {
            console.log(responseObject.error)
        };
        //net earnings
        if (responseObject.okay03) {
            net_earnings.innerHTML = "K" + responseObject.value03
        } else {
            console.log(responseObject.error)
        };
        //total expenses
        if (responseObject.okay05) {
            total_expense.innerHTML = "ZMW " + responseObject.value05
        } else {
            console.log(responseObject.error)
        };
        //last month
        if (responseObject.okay5) {
            one_month.innerHTML = "ZMW " + responseObject.value5
        } else {
            console.log(responseObject.error)
        };
        //loan officers
        if (responseObject.okay6) {
            officer_total.innerHTML = responseObject.value6 + " officers"
        } else {
            console.log(responseObject.error)
        };

    }

}

setInterval(function() {

    loadXMLDoc();


    // 1sec
}, 100);

window.onload = loadXMLDoc;