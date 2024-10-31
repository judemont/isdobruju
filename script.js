function q1() {
    const name = document.getElementById("usernameInput").value;
    window.localStorage.setItem("name", name )
    document.getElementById("q1").style.display = "none"
    document.getElementById("q2").style.display = "block"
}

function q2() {
    const answer = document.getElementById("q2").querySelector('input:checked').value;
    if(answer == "lausanne") {
        alert("BRAVO !");
    } else {
        alert("FAKE")
    }
}

document.getElementById("q1").style.display = "block"
