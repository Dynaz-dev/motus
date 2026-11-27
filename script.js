const cases = document.querySelectorAll(".case");
const touches = document.querySelectorAll(".clavier button");

let position = 0;

touches.forEach(touche => {
    touche.addEventListener("click", () => {
        if (position < 6) {
            cases[position].textContent = touche.textContent;
            position++;
        }
    });
});
document.addEventListener("keydown", event => {
    if (/^[a-zA-Z]$/.test(event.key) && position < 6) {
        cases[position].textContent = event.key.toUpperCase();
        position++;
    }
});