function loadXMLDoc() {


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

    var requestData = "todayexpense" + "&yestadayexpense" + "&weekexpense" + "&monthexpense" + "&yearexpense" + "&totalexpense"
    request.open('post', 'includes/logic/live_expense.php');
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);

    var todayexpense = document.getElementById('todayexpense');
    var yestadayexpense = document.getElementById('yestadayexpense');
    var weekexpense = document.getElementById('weekexpense');
    var monthexpense = document.getElementById('monthexpense');
    var yearexpense = document.getElementById('yearexpense');
    var totalexpense = document.getElementById('totalexpense');

    function handleResponse(responseObject) {



        //clientele
        if (responseObject.okay) {
            var bar = new ProgressBar.Circle(todayexpense, {
                color: '#000',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 4,
                trailWidth: 4,
                easing: 'bounce',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#aaa',
                    width: 4
                },
                to: {
                    color: '#46c35f',
                    width: 4
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);

                    if (responseObject.value === '') {
                        circle.setText('0');
                    } else {
                        circle.setText("ZMW " + responseObject.value);
                    }

                }

            });

            bar.text.style.fontSize = '1rem';

            bar.animate(1); // Number from 0.0 to 1.0


        } else {
            animate(0);
            console.log(responseObject.error)
        };
        if (responseObject.okay0) {
            var bar = new ProgressBar.Circle(yestadayexpense, {
                color: '#000',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 4,
                trailWidth: 4,
                easing: 'bounce',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#aaa',
                    width: 4
                },
                to: {
                    color: '#f96868',
                    width: 4
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);

                    if (responseObject.value === '') {
                        circle.setText('0');
                    } else {
                        circle.setText("ZMW " + responseObject.value0);
                    }

                }

            });

            bar.text.style.fontSize = '1rem';

            bar.animate(1); // Number from 0.0 to 1.0


        } else {
            animate(0);
            console.log(responseObject.error)
        };
        if (responseObject.okay1) {
            var bar = new ProgressBar.Circle(weekexpense, {
                color: '#000',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 4,
                trailWidth: 4,
                easing: 'bounce',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#aaa',
                    width: 4
                },
                to: {
                    color: '#662d91',
                    width: 4
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);

                    if (responseObject.value === '') {
                        circle.setText('0');
                    } else {
                        circle.setText("ZMW " + responseObject.value1);
                    }

                }

            });

            bar.text.style.fontSize = '1rem';

            bar.animate(1); // Number from 0.0 to 1.0

        } else {
            animate(0);

        };
        if (responseObject.okay2) {
            var bar = new ProgressBar.Circle(monthexpense, {
                color: '#000',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 4,
                trailWidth: 4,
                easing: 'bounce',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#aaa',
                    width: 4
                },
                to: {
                    color: '#f96868',
                    width: 4
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);

                    if (responseObject.value === '') {
                        circle.setText('0');
                    } else {
                        circle.setText("ZMW " + responseObject.value2);
                    }

                }

            });

            bar.text.style.fontSize = '1rem';

            bar.animate(1); // Number from 0.0 to 1.0
        } else {
            animate(0);
            console.log(responseObject.error)
        };
        if (responseObject.okay02) {
            var bar = new ProgressBar.Circle(yearexpense, {
                color: '#000',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 4,
                trailWidth: 4,
                easing: 'bounce',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#aaa',
                    width: 4
                },
                to: {
                    color: '#57c7d4',
                    width: 4
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);

                    if (responseObject.value === '') {
                        circle.setText('0');
                    } else {
                        circle.setText("ZMW " + responseObject.value02);
                    }

                }

            });

            bar.text.style.fontSize = '1rem';

            bar.animate(1); // Number from 0.0 to 1.0
        } else {
            animate(0);
            console.log(responseObject.error)
        };
        if (responseObject.okay03) {
            var bar = new ProgressBar.Circle(totalexpense, {
                color: '#000',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 4,
                trailWidth: 4,
                easing: 'bounce',
                duration: 1400,
                text: {
                    autoStyleContainer: false
                },
                from: {
                    color: '#aaa',
                    width: 4
                },
                to: {
                    color: '#f2a654',
                    width: 4
                },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);

                    if (responseObject.value === '') {
                        circle.setText('0');
                    } else {
                        circle.setText("" +
                            "ZMW " + responseObject.value03);
                    }

                }

            });

            bar.text.style.fontSize = '1rem';
            var v = parseFloat(responseObject.value03);
            bar.animate(v); // Number from 0.0 to 1.0
        } else {
            animate(0);
            console.log(responseObject.error)
        };
    }
}

window.onload = loadXMLDoc;