function evalInput(str) {
    // check if the input is number
    if (Number.isInteger(parseInt(str))) {
        let num = parseInt(str);
        let rev = 0,
            rem = 0;
        while (num > 0) {
            rem = num % 10;
            rev = rev * 10 + rem;
            num = parseInt(num / 10);
        }
        document.getElementById("result").innerHTML =
            "<h4>Reverse of " + str + " is " + rev + "</h4>";
    } else {
        let result = document.getElementById("result");
        let text = "<h4>The entered string is: " + str + "<br/>";
        for (let i = 0; i < str.length; i++) {
            let word = str.charAt(i);
            if (
                word == "a" ||
                word == "e" ||
                word == "i" ||
                word == "o" ||
                word == "u" ||
                word == "A" ||
                word == "E" ||
                word == "I" ||
                word == "O" ||
                word == "U"
            ) {
                text += "the position of the leftmost vowel is: " + (i + 1);
                result.innerHTML = text;
                break;
            } else {
                result.innerHTML = "No vowels found";
            }
        }
    }
}
