function validateForm() {
  // check if either the dropdown has been used or an other selection has been made
  var studentForm = document.forms.studentForm.elements;
  var dropDown = studentForm.selectPosition;
  var otherSelection = studentForm.otherSelection;
  var companyInput = studentForm.company;
  var formValid = true;
  var ul = document.getElementById("business-list");
  var businessList = ul.getElementsByTagName("li");

  if (businessList.length === 0) {
    document.getElementById('company').focus();
    document.getElementById("errorMsg").innerHTML = "Please add a business.";
    formValid = false;
  }

  if (dropDown.value === "Select Position" && otherSelection.value === "") {
    document.getElementById('select-position').focus();
    document.getElementById("errorMsg").innerHTML = "Please select a position or other position must be filled out.";
    formValid = false;
  }

  let elements = document.querySelectorAll('ul > li');
  var companies = ""
  for (let elem of elements) {
    // alert(elem.innerHTML); // "test", "passed"
    var replace = elem.innerHTML.replace(" \u00D7", ",")
      companies += replace
      companyInput.value = companies.slice(0, -1);
  }
  console.log(companies);

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


// Create a new business list item when clicking on the "Add" button
function newElement() {
  document.getElementById("errorMsg").innerHTML = " ";
  var inputValue = document.getElementById("company").value;
  if (inputValue === '') {
    document.getElementById('company').focus();
    document.getElementById("errorMsg").innerHTML = "Please add a business.";
  } else {
    var li = document.createElement("li");
    li.onclick = function() {remove(this)}
    inputValue += " \u00D7"
    var text = document.createTextNode(inputValue);
    li.appendChild(text);
    document.getElementById("business-list").appendChild(li);
  }
  document.getElementById("company").value = "";
}


function remove(company) {
  company.parentNode.removeChild(company);
}
