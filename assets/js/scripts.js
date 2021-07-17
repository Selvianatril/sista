var time = new Date();
console.log(time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds()
);

function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "admin" && password == "admin") {
        alert("selamat Datang Admin");
        window.location = "admin.html";
        return false;
    }
    else {
        alert('Anda harus mengisi data dengan benar!');
        return false;
    }
}
