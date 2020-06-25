function phoneClick() {
  console.log("Click")
  if (document.getElementById('phoneNum').style.visibility == "hidden") {
    document.getElementById('contactPhone').style.backgroundImage = "none";
    document.getElementById('contactPhone').style.backgroundColor = "#15aed1";
    document.getElementById('phoneNum').style.visibility = "visible";
  }
  else {
    document.getElementById('phoneNum').style.visibility = "hidden";
    document.getElementById('contactPhone').style.backgroundImage = "url('images/icons/phonebw.png')";
  }
}
