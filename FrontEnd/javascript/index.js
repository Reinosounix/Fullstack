function updatemenu() {
  if (document.getElementById("responsive-menu").checked == true) {
    document.getElementById("menu").style.borderBottomRightRadius = "0";
    document.getElementById("menu").style.borderBottomLeftRadius = "0";
  } else {
    document.getElementById("menu").style.borderRadius = "10px";
  }
}

$('.openmodale').click(function (e) {
    e.preventDefault();
    $('.modale').addClass('opened');
});
$('.closemodale').click(function (e) {
    e.preventDefault();
    $('.modale').removeClass('opened');
});