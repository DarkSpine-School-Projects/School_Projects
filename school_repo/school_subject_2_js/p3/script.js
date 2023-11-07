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
