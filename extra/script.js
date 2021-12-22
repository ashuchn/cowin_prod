function validate() {
  var x = document.forms["slot_finder_form"]["pincode"].value;
  var y = document.forms["slot_finder_form"]["date"].value;
  if (x == "") {
      alert("Enter Pincode");
      return false;
  }
  if (y == "") {
      alert("Select Date");
      return false;
  }

}