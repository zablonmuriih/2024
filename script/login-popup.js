// Open the login popup
function openLoginPopup() {
  document.getElementById("loginPopup").style.display = "block";
}

// Close the login popup
function closeLoginPopup() {
  document.getElementById("loginPopup").style.display = "none";
}

// Close the popup when clicking outside of it
window.onclick = function(event) {
  var popup = document.getElementById("loginPopup");
  if (event.target == popup) {
    popup.style.display = "none";
  }
}
