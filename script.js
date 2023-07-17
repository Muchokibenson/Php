function validateForm() {
   let userName = document.getElementById("typenameX").value;
   let password = document.getElementById("typePasswordX").value;
   if(userName== "" || password== ""){
    alert("please enter both username and password")
    return false;
   }else {
    return true;
   }
  }