let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("newpasswod");

eyeicon.onclick = function(){
     if (password.type == "password"){
        password.type= "text";
     }   
     else{
        password.type="password";
     }
}