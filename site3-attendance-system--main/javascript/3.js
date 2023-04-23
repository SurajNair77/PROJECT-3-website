function validateForm() {
  var x = document.forms["myForm"]["fname"].value;var y=document.forms["myForm"]["pass"].value;var z=document.forms["myForm"]["branch"];var e=document.forms["myForm"]["reenter"];
  if (x == ""||y == ""||z == ""||e == "") {
    alert("all fields must be filled out");
    return false;
  }
  
}