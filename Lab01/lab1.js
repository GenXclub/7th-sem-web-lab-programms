function calculate(op) {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let result = 0;

    if (op === "+") {
        result = num1 + num2;
    } else if (op === "-") {
        result = num1 - num2;
    } else if (op === "*") {
        result = num1 * num2;
    } else if (op === "/") {
        if (num2 != 0) {
            result = num1 / num2;
        } else {
            result = "Cannot divide by Zero";
        }
    }
    document.getElementById("result").value = result;
}
