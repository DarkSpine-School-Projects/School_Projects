var a = prompt("podaj liczbę");
var b = prompt("Podaj Potęge");


function potęgi(liczba, potęga) {
    var liczba1 = 1;
    for (var liczba2 = 0; liczba2 < potęga; liczba2++){
      liczba1 *= liczba;
    }
    return liczba1;
  }
  
document.write("potęga "+b+ " z liczby "+a+ "to " +potęgi(a, b));
