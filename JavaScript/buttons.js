function phoneClick() {
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

function resumeClick() {
    if (document.getElementById('resume').style.visibility == "visible") {
      document.getElementById('resume').style.visibility = "hidden";
      document.getElementById('resume').style.display = "none";
      document.getElementById('resume').style.opacity = "0";
      document.getElementById('resume').style.transition = "visibility 0s linear 300s, opacity 300ms";
      document.getElementById('resumeButton').innerText = "View Resume"
    }
    else {
      document.getElementById('resume').style.visibility = "visible";
      document.getElementById('resume').style.display = "block";
      document.getElementById('resume').style.opacity = "1";
      document.getElementById('resume').style.transition = "visibility 0s linear 0s, opacity 300ms";
      document.getElementById('resumeButton').innerText = "Hide Resume"
    }
}
