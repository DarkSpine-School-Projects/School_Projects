function licz() {
  var x = document.getElementById("liczba").value;
  var sum;

  if (x < 500) {
    document.getElementById("sc").innerHTML = "jedz autobusem";
    return;
  }
  if (x >= 500) {
    sum = x * 25;
  }
  if (x >= 1000) {
    sum = x * 30;
  }
  if (x >= 2000) {
    sum = x * 45;
  }
  document.getElementById("sc").innerHTML = "koszt blietu" + sum + "zł";
}
