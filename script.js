function register() {
    let username = document.forms["myForm"]["username"].value;
    let password = document.forms["myForm"]["password"].value;
    if (username == "") {
      alert("Username must be filled out");
      return false;
      }else if(password == ""){
      alert("Password must be filled out");
      return false;
    }
  }


  
  function login() {
    let username = document.forms["myForm"]["username"].value;
    let password = document.forms["myForm"]["password"].value;
    if (username == "") {
      alert("Username must be filled out");
      return false;
    }else if(password == ""){
      alert("Password must be filled out");
      return false;
    }
  }
  
  function checkDelete(){
    return confirm('Are you sure delete this message');
}