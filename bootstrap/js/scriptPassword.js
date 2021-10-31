var check = function() {
    if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value){
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Las contraseñas Coinciden';
        document.getElementById('crear').disabled = false;
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Error las contraseñas No Coinciden....!!!';
        document.getElementById('crear').disabled = true;
    }
}

function validatePassword() {
    var newPassword = document.getElementById('password').newPassword.value;
    var minNumberofChars = 6;
    var maxNumberofChars = 16;
    var regularExpression  = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    alert(newPassword); 
    if(newPassword.length < minNumberofChars || newPassword.length > maxNumberofChars){
        return false;
    }
    if(!regularExpression.test(newPassword)) {
        alert("password should contain atleast one number and one special character");
        return false;
    }
}