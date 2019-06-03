function enableFields(){
  document.getElementById("first-name").disabled=false;
  document.getElementById("last-name").disabled=false;
  document.getElementById("email").disabled=false;
  document.getElementById("pass").disabled=false;
  document.getElementById("unmask").disabled=false;
  document.getElementById("submit").disabled=false;
}

function passFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
      x.type = "text";
  } else {
      x.type = "password";
    }
}
