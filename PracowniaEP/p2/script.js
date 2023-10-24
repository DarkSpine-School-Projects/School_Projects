function licz() {
  var x = document.getElementById("liczba").value;
  var sum;
  var check = document.getElementById("check").checked;
  sum = x * 100;
  if (check) {
    sum *= 1.3;
  }
  document.getElementById("sc").innerHTML = sum;
}
