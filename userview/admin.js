function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if ( username == "admin" && password == "admin"){
    alert ("Login successfully");
    window.location = "http://127.0.0.1:5500/adminview/admin_dashboard.html"; // Redirecting to other page.
    return false;
    }
    else{
    alert("wrong username/password;");
    // Disabling fields after 3 attempts.
    
    }
    }
    Copy
     