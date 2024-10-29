function sendName() {
    const username = document.getElementById("usernameInput");
    fetch("api/saveName?username=" + username);
}


document.getElementById("q1").style.display = "block"