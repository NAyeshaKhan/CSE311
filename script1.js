
function ShowSth() {
  document.getElementById("secretstuff").innerHTML = "Ooooooh, look at meeee. I'm sOoOO FAAANCYYYY.";
}
function HideMe() {
  document.getElementById('hideandseek').style.display='none';
}
function ShowMe() {
  document.getElementById('hideandseek').style.display='block';
}


  function validateForm() {
  var x = document.forms["Form1"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  }
  
  function NumValid() {
  var x, txt;

  // Get the value of the input field with id="numb"
  x = document.getElementById("num").value;
  //Maybe you can use  x = document.forms["Form1"]["num"].value;
  // If x is Not a Number or less than one or greater than 10
  if (isNaN(x) || x < 1 || x > 10) {
    txt = "Input invalid";
  } else {
    txt = "Woohoo";
  }
  document.getElementById("numnum").innerHTML = txt;
}
