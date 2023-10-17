const obliczanie = () => {
  var x = document.getElementById("num").value;
  var y = document.getElementById("num_1").value;
  var z = document.getElementById("num_2").value;
  var pies = document.getElementById("pies").checked;
  var kon = document.getElementById("kon").checked;
  var kot = document.getElementById("kot").checked;
  var cena_1 = pies * 10 * x;
  var cena_2 = kon * 15 * y;
  var cena_3 = kot * 5 * z;

  if (!pies && !kon && !kot) {
    wynik.innerHTML = "wybierz zwierze";
  }
  if (pies || kon || kot) {
    wynik.innerHTML = cena_1 + cena_2 + cena_3;
  }
};
//pies kon kot karma
