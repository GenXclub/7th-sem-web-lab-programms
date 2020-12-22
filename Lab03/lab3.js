let c = 0;
let t1;
let t = document.getElementById("t");

function start() {
    t1 = window.setInterval(incr, 100); // same as just setInterval
}

function incr() {
    c = c + 1;
    t.style.fontSize = `${c}px`;
    t.innerHTML = "TEXT-GROWING: " + c + " px";

    if (c >= 50) {
        clearInterval(t1); // clears the interval t1 so that it does not call twice and shrink 2X faster
        // works the same as clearTimeout window.clearInterval
        // alert("Font Size Reached 50pt. Text will Now Shrink");
        t1 = setInterval(decr, 100);
    }
    t.style.color = "green";
}

function decr() {
    c = c - 1;
    t.style.fontSize = `${c}px`;
    t.innerHTML = "TEXT-SHRINKING: " + c + " px";

    if (c <= 1) {
        clearInterval(t1);
        t1 = setInterval(incr, 100);
    }
    t.style.color = "blue";
}
