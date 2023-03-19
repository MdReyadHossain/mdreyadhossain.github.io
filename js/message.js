function validmessage(contact) {
    let nameErr = document.getElementById("nameErr");
    let emailErr = document.getElementById("emailErr");
    let messErr = document.getElementById("messErr");

    nameErr.innerHTML = "";
    emailErr.innerHTML = "";
    messErr.innerHTML = "";

    let name = contact.name.value;
    let email = contact.email.value;
    let mess = contact.message.value;
    let isvalid = true;

    if(name === "") {
        nameErr.innerHTML = "Type your name!";
        isvalid = false;
    }

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (email === "") {
        emailErr.innerHTML = "Email Should not be empty!";
        isvalid = false;
    } 

    else if (!validRegex.test(email)) {
        emailErr.innerHTML = "Invalid email format!";
        isvalid = false;
    }

    if(mess === "") {
        messErr.innerHTML = "Write a message to sent";
        isvalid = false;
    }

    if(isvalid) {
        const actionURL = contact.action;
        const actionMethod = contact.method;

        let xhttp = new XMLHttpRequest();
        document.getElementById('msg').innerHTML = "";

        xhttp.onload = function() {
            document.getElementById('msg').innerHTML = this.responseText;
        }
        xhttp.open(actionMethod, actionURL);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("message=" + mess + "&name=" + name + "&email=" + email);
    }
}