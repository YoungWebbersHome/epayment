function saveEmail() {
  const email = document.getElementById("email").value.trim();
  if (!email) {
    alert("Please enter your email.");
    return;
  }
  localStorage.setItem("email", email);
  window.location.href = "password.html";
}
