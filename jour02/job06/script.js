const body = document.body;
const konamiSequence = ["ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown", "ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight", "b", "a"];
let konamiIndex = 0;

document.addEventListener("keydown", function (event) {
        const key = event.key;

        if (key === konamiSequence[konamiIndex]) {
                konamiIndex++;

                if (konamiIndex === konamiSequence.length) {
                        body.classList.add("plateforme");
                }
        } else {
                konamiIndex = 0;
        }
});
