function a() {
    var password = document.getElementById("inputpassword").value
    if (password != "") {
        document.getElementById("passwordspan").style.display = "none";
    }
    else {
        document.getElementById("passwordspan").style.display = "";
    }

    var user = document.getElementById("inputuser").value
    if (user != "") {
        document.getElementById("userspan").style.display = "none";
    }
    else {
        document.getElementById("userspan").style.display = "";
    }
}
setInterval(a, 100);
