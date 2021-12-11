var a = 0;
console.log("这是周泓恺的网站哦~");
function Clicklogin() {
    a += 1;
    if (a % 2 == 0) {
        document.getElementById("ir").src = "file:///H:/scratch教学/login.html";
        document.getElementById("ir").style.display = "none";
    }
    else {
        document.getElementById("ir").style.display = "";
    }
}