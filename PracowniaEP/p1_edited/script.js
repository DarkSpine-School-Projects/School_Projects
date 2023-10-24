const obliczanie = () => {
  var x = document.getElementById("num").value;
  var y = document.getElementById("num_1").value;
  var z = document.getElementById("num_2").value;

  var cena_1 = 10 * x;
  var cena_2 = 15 * y;
  var cena_3 = 5 * z;

  if (x == 0 && y == 0 && z == 0) {
    wynik.innerHTML = "wybierz zwierze";
  }
  if (x > 0 || y > 0 || z > 0) {
    wynik.innerHTML = cena_1 + cena_2 + cena_3;
  }
};
//pies kon kot karma
