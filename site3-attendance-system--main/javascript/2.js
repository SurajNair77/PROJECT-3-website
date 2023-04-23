function validateForm() {
  var x = document.forms["myForm"]["fname"].value;var y=document.forms["myForm"]["pass"].value;var z=document.forms["myForm"]["branch"];var w=document.forms["myForm"]["sem"];var e=document.forms["myForm"]["reenter"];
  if (x == ""||y == ""||z == ""||w == ""||e == "") {
    alert("all fields must be filled out");
    return false;
  }
  
}

