function dodawanie() {
  var a = parseInt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  wynik.innerHTML = "wynik:" + (a + b);
}
function odejmowanie() {
  var a = parseInt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  wynik.innerHTML = "wynik:" + (a - b);
}
function mnozenie() {
  var a = parseInt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  wynik.innerHTML = "wynik:" + a * b;
}
function dzielenie() {
  var a = parseInt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  wynik.innerHTML = "wynik:" + a / b;
}
function potegowanie() {
  var a = parseInt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  wynik.innerHTML = "wynik:" + a ** b;
}
function silnia() {
  var a = parseInt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  if (b) {
    wynik.innerHTML = "Wpisz tylko w A";
    return;
  }
  if (a === 0 || a === 1) return 1;
  for (var i = a - 1; i >= 1; i--) {
    a *= i;
  }
  wynik.innerHTML = a;
}

function pierwiastek() {
  var a = Math.sqrt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  if (b) {
    wynik.innerHTML = "Wpisz tylko w A";
    return;
  }
  wynik.innerHTML = a;
}

function NWD() {
  var a = parseInt(document.getElementById("a").value);
  var b = parseInt(document.getElementById("b").value);
  var wynik = document.getElementById("wynik");
  var pom = 0;

  while (a != b) {
    if (a < b) {
      pom = a;
      a = b;
      b = pom;
    }
    a = a - b;
  }
  wynik.innerHTML = "najwiekszywspolnydzielnik: " + a;
}
