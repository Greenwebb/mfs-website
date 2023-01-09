var apply_btn = document.getElementById('apply');
var duration = document.getElementById('duration');
var time_frame = document.getElementById('time_frame');
apply_btn.disabled = true;
apply_btn.innerHTML = "INPUT DETAILS ABOVE";
//amount part
var slider_amount = document.getElementById('slidatious');
var update_side_amount = document.getElementById('update_side');
//durarion part
var slider_duration = document.getElementById('slidate');
var time_duration = document.getElementById('time_duration');
//results part
var result_amount = document.getElementById('amountatious');
var result_payment = document.getElementById('result_payment');
var result_duration = document.getElementById('result_duration');
//var resul_duration = document.getElementById('rl_duration');
//input parts
//about customer
var _new_person = document.getElementById('new_customer');
var _old_person = document.getElementById('returning_customer');
//var amount = document.getElementById('amount');

//initial directives
slider_amount.value = "0"
    //apply_btn.disabled = true;
slider_amount.step = 500;

duration.style.display = "none";
//next page
//slider
var slider_age = document.getElementById('slider_age');
//get values


function checker() {
    var resul_duration = document.getElementById('rl_duration');
    var resul_kwacha = document.getElementById('rl_zmw');
    var resul_kwachaa = document.getElementById('rl_zmww');

    var checked_person = document.querySelector('input[name = "package_personal"]:checked');
    var check_package = document.querySelector('input[name = "package"]:checked');
    slider_amount.step = 500;
    console.log(check_package);

    if (check_package.value == "personal") {
        apply_btn.disabled = true;
        dvPassport.style.display = "block";
        duration.style.display = "block";
        time_frame.innerHTML = "Duration in Days";
        //duration
        time_duration.value = slider_duration.value;

        //amount
        slider_amount.max = "10000";
        update_side_amount.max = "10000";
        update_side_amount.value = slider_amount.value;


        if (checked_person.value == "salary_advance") {
            var my_returns = slider_amount.value * 0.30 * parseInt((time_duration.value)) + parseInt((slider_amount.value));
        result_payment.innerHTML = my_returns;


            time_frame.innerHTML = "Duration in Days";
            //duration
            time_duration.max = "30"
            slider_duration.max = "30";
            time_duration.value = slider_duration.value;
            //amount
            slider_amount.max = "20000";
            update_side_amount.max = "20000";
            update_side_amount.value = slider_amount.value;
            if (slider_amount.value >= 500) {
                if (time_duration.value > 0) {
                    apply_btn.disabled = false;
                    //apply_btn.style.backgroundColor = "#cda349"
                    apply_btn.innerHTML = "APPLY NOW";
                } else {
                    apply_btn.disabled = true;
                    apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
                }
            } else {
                apply_btn.disabled = true;
                //
                apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
            }
        } else if (checked_person.value == "collateral") {
            if (slider_amount.value >= 500) {
                if (time_duration.value > 0) {
                    apply_btn.disabled = false;
                    //apply_btn.style.backgroundColor = "#cda349"
                    apply_btn.innerHTML = "APPLY NOW";
                } else {
                    apply_btn.disabled = true;
                    apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
                }
            } else {
                apply_btn.disabled = true;
                //
                apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
            }
            time_frame.innerHTML = "Duration in Days";
            //duration
            time_duration.max = "30"
            slider_duration.max = "30";
            time_duration.value = slider_duration.value;
            resul_duration.innerHTML = "days"
            var my_returns = slider_amount.value * 0.020 * parseInt((time_duration.value)) + parseInt((slider_amount.value));
            result_payment.innerHTML = my_returns;



            //amount
            slider_amount.max = "60000";
            update_side_amount.max = "60000";
            update_side_amount.value = slider_amount.value;


        } else {
            console.log('error');
            //slider_amount.max = "100000";
            update_side_amount.max = "100000";
            result_amount.innerHTML = "slide to pick amount"
            result_payment.innerHTML = "pick amount"
            time_duration.value = slider_duration.value;
            update_side_amount.value = slider_amount.value;
            apply_btn.disabled = true;
            apply_btn.innerHTML = "FINISH ENTERING DETAILS!";


        }


    } else if (check_package.value == "sme") {
        dvPassport.style.display = "none";
        duration.style.display = "block";
        time_frame.innerHTML = "Duration in months";
        resul_duration.innerHTML = "months"

        //duration
        time_duration.max = "12"
        slider_duration.max = "12";
        time_duration.value = slider_duration.value;

        //amount
        slider_amount.max = "100000";
        update_side_amount.max = "100000";
        update_side_amount.value = slider_amount.value;

        if (slider_amount.value >= 500) {
            if (time_duration.value > 0) {
                apply_btn.disabled = false;
                apply_btn.innerHTML = "APPLY NOW";
            } else {
                apply_btn.disabled = true;
                apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
            }
        } else {
            apply_btn.disabled = true;
            //
            apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
        }
        var my_returns = slider_amount.value * 0.30 * parseInt((time_duration.value)) + parseInt((slider_amount.value));
        result_payment.innerHTML = my_returns;
    } else if (check_package.value == "sml") {
        if (slider_amount.value >= 500) {
            if (time_duration.value > 0) {
                apply_btn.disabled = false;
                apply_btn.innerHTML = "APPLY NOW";
            } else {
                apply_btn.disabled = true;
                apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
            }
        } else {
            apply_btn.disabled = true;
            //
            apply_btn.innerHTML = "FINISH UP YOUR OPTIONS";
        }
        dvPassport.style.display = "none";
        time_frame.innerHTML = "Duration in weeks";
        resul_duration.innerHTML = "weeks"
            //duration
        time_duration.max = "4"
        slider_duration.max = "4";
        time_duration.value = slider_duration.value;

        //amount
        slider_amount.max = "10000";
        update_side_amount.max = "10000";
        update_side_amount.value = slider_amount.value;

        duration.style.display = "block";
        if (slider_duration.value == 1) {
            var my_returns = slider_amount.value * 0.15 + parseInt((slider_amount.value));
            console.log(my_returns)
            result_payment.innerHTML = my_returns;

        } else if (slider_duration.value == 2) {
            var my_returns = slider_amount.value * 0.20 + parseInt((slider_amount.value));
            console.log(my_returns);
            result_payment.innerHTML = my_returns;

        } else if (slider_duration.value == 3) {
            var my_returns = slider_amount.value * 0.25 + parseInt((slider_amount.value));
            console.log(my_returns)
            result_payment.innerHTML = my_returns;

        } else if (slider_duration.value == 4) {
            var my_returns = (slider_amount.value * 0.3) + parseInt((slider_amount.value));
            console.log('4week')
            result_payment.innerHTML = my_returns;


        } else {
            console.log('no_week')
        }

    } else {
        console.log('error!');
        dvPassport.style.display = "none";
        apply_btn.disabled = true;
        apply_btn.innerHTML = "FINISH ENTERING DETAILS!";

    }
    //console.log(slider_amount);


    //value updates
    time_duration.value = slider_duration.value;
    time_duration.value = slider_duration.value;
    //show results
    result_amount.innerHTML = update_side_amount.value;
    result_amount.innerHTML = slider_amount.value;
    result_duration.innerHTML = time_duration.value;
    resul_kwacha.innerHTML = "ZMW";
    resul_kwachaa.innerHTML = "ZMW";
    document.getElementById('returns').innerHTML = result_payment.innerHTML

}

function next() {
    event.preventDefault();
    var slider_age = document.getElementById('slider_age');
    const first_form = document.getElementById('form_one');
    const second_form = document.getElementById('form_two');
    first_form.style.display = "none";
    second_form.style.display = "block";

    //update new page
    slider_age.min = "18";
    slider_age.max = "90";
    //window.scroll({ top: 200, left: 0, behavior: 'smooth' });
}

function back() {
    event.preventDefault();
    const first_form = document.getElementById('form_one');
    const second_form = document.getElementById('form_two');
    second_form.style.display = "none";
    first_form.style.display = "block";

}