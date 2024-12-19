function validateLoginForm(){
    var username = document.getElementById("txt_username").value;
    var password = document.getElementById("txt_password").value;

    if(username == "" || username.length > 50){
        alert("Please enter a proper username.");
        //form does not submit because the username was wrong
        return false;
    }

    //also validate the password
    if(password == "" || password.length > 50){
        alert("Please enter a proper password.");
        //form does not submit because the password was wrong
        return false;
    }
}