let tab = document.getElementById("tab");

function squareCube() {
    let result =
        '<table border="1"><tr><th>SNO</th><th>SQUARE</th><th>CUBE</th></tr>';
    let sqr = 0;
    let qube = 0;

    for (let i = 0; i < 10; i++) {
        sqr = i * i;
        qube = i * i * i;
        result += `<tr><td>${i}</td><td>${sqr}</td><td>${qube}</td></tr>`; // using ES6 systax
    }

    result + "</table>";
    tab.innerHTML = result;
}
