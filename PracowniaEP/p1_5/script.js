const obliczanie = () => {
  var x = document.getElementById("num").value;
  var sum = x * 2 - 0.1 * 2 * x;
  var sum2 = x * 1 - 0.2 * 1 * x;
  var check = document.getElementById("check").checked;
  var wynik = document.getElementById("wynik");
  if (x >= 1 && x <= 50 && !check) {
    wynik.innerHTML = "koszt ogłoszenia " + x * 2 + " PLN";
  } else if (x >= 1 && x <= 50 && check) {
    wynik.innerHTML = "koszt ogłoszenia " + sum + " PLN";
  } else if (x >= 51 && !check) {
    wynik.innerHTML = "koszt ogłoszenia " + sum2 + " PLN";
  } else if (x >= 51 && check) {
    wynik.innerHTML = "koszt ogłoszenia " + sum + " PLN";
  }
};
