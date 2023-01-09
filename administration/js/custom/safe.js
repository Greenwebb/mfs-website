var inactivityTime = function() {
    var time;
    window.onload = resetTimer;
    // DOM Events
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;
    document.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onmousedown = resetTimer; // touchscreen presses
    document.ontouchstart = resetTimer;
    document.onclick = resetTimer; // touchpad clicks
    document.onkeydown = resetTimer; // onkeypress is deprectaed
    document.addEventListener('scroll', resetTimer, true); // improved; see comments


    function logout() {
        alert("Admin, are you there? we are loging you out because of inactivity,we do this to protect your accounts!")
        location.href = 'includes/logic/logout.php'
    }

    function resetTimer() {
        clearTimeout(time);
        time = setTimeout(logout, 100000000000000000)
            // 1000 milliseconds = 1 second
    }



};
window.onload = function() {
    inactivityTime();
}