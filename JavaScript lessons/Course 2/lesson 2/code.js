function swap(id01, id02) {
  let y = document.getElementById(id01).innerHTML
  let z = document.getElementById(id02).innerHTML
  document.getElementById(id02).innerHTML = y;
  document.getElementById(id01).innerHTML = z;
}