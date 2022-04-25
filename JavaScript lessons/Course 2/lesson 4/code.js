function check() {
  let passInput = document.getElementById("passInput").value;
  let passCheck = document.getElementById("passCheck").value;
  let errMsg = document.getElementById("errMsg");
  let errToThrow = ""

  try {
    if (
      /[A-Z]/g.test(passInput) == false || /\d/g.test(passInput) == false || passInput.length < 6
    ) {
      errToThrow += "<strong>The password needs 6 letter length, a capital letter and a number.<strong/>";
      throw errToThrow;
    }
    if (passCheck === '') {
      errToThrow += "<strong>You have to re-enter the password<strong/>";
      throw errToThrow;
    }
    if (passInput !== passCheck) {
      errToThrow += "<strong>The passwords does not match.<strong/>";
      throw errToThrow;
    }
    errMsg.style.display = 'none'

  } catch (error) {
    errMsg.style.display = 'block'
    errMsg.innerHTML = error
  }
}