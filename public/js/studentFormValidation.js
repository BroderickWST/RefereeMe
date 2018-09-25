function validateForm() {
// check if either the dropdown has been used or an other selection has been made
  var studentForm = document.forms.studentForm.elements;
  var dropDown = studentForm.selectPosition;
  var otherSelection = studentForm.otherSelection;
  var formValid = true;

    if (dropDown.value === "Select Position" && otherSelection.value === "") {
        document.getElementById('select-position').focus();
        document.getElementById("errorMsg").innerHTML = "Please select a position or other position must be filled out.";
        formValid = false;
    }

    else if (dropDown !== "Select Position") {
      otherSelection.addAttribute("disabled", "")
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

// toggle other-selection to be disabled based on selection
document.addEventListener('DOMContentLoaded',function() {
    document.querySelector('select[name="selectPosition"]').onchange=changeEventHandler;
},false);

function changeEventHandler(event) {
    // You can use “this” to refer to the selected element.
    if(event.target.value !== "Select Position") {
      console.log("you selected " +  event.target.value);
      document.getElementById('other-selection').disabled = true;
      document.getElementById('other-selection').style.backgroundColor = "#dddddd";
    }
    else if (event.target.value === "Select Position") {
      console.log("You didnt select anything");
      document.getElementById('other-selection').disabled = false;
      document.getElementById('other-selection').style.backgroundColor = "#fff";
    }
}
