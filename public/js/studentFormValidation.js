function validateForm() {
// check if either the dropdown has been used or an other selection has been made
  var studentForm = document.forms.studentForm.elements;
  var dropDown = studentForm.selectPosition.value;
  var otherSelection = studentForm.otherSelection.value;
  var formValid = true;

    if (dropDown === "Select Position" && otherSelection === "") {
        document.getElementById('select-position').focus();
        document.getElementById("errorMsg").innerHTML = "Please select a position or other position must be filled out.";
        formValid = false;
    }

    // check if form inputs are long enough to be realistically valid
    // for (var i = 0; i < studentForm.length; i++) {
    //   let inputSize = studentForm[i].value.length
    //   if (studentForm[i].required && inputSize < 2) {
    //     studentForm[i].style.backgroundColor = "#FF6666";
    //     document.getElementById("errorMsg").innerHTML = "Form fields are too small to be valid.";
    //     formValid = false;
    //   }
    // }
    //
    return formValid;
}
