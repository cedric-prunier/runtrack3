// Fonction pour mélanger les images de l'arc-en-ciel
function shuffleImages() {
        let container = document.getElementById("container");
        for (let i = container.children.length; i >= 0; i--) {
                container.appendChild(container.children[(Math.random() * i) | 0]);
        }
        updateMessage();
}

// Fonction pour vérifier si l'arc-en-ciel est bien reconstitué
function checkRainbow() {
        let container = document.getElementById("container");
        let images = container.getElementsByClassName("image");
        for (let i = 0; i < images.length; i++) {
                if (images[i].alt !== "Red" + (i + 1)) {
                        return false;
                }
        }
        return true;
}

// Fonction pour mettre à jour le message en fonction de l'état de l'arc-en-ciel
function updateMessage() {
        let message = document.getElementById("message");
        if (checkRainbow()) {
                message.textContent = "Vous avez gagné";
                message.className = "green";
        } else {
                message.textContent = "Vous avez perdu";
                message.className = "red";
        }
}

// Écouteur d'événement pour le bouton "Mélanger"
let shuffleButton = document.getElementById("shuffleButton");
shuffleButton.addEventListener("click", shuffleImages);

// Écouteur d'événement pour les images afin de les réorganiser
let images = document.getElementsByClassName("image");
for (let i = 0; i < images.length; i++) {
        images[i].addEventListener("dragstart", function (event) {
                event.dataTransfer.setData("text/plain", event.target.id);
        });
        images[i].addEventListener("dragover", function (event) {
                event.preventDefault();
        });
        images[i].addEventListener("drop", function (event) {
                event.preventDefault();
                let data = event.dataTransfer.getData("text/plain");
                let target = event.target;
                while (target && !target.classList.contains("image")) {
                        target = target.parentNode;
                }
                if (target) {
                        target.parentNode.insertBefore(document.getElementById(data), target);
                }
                updateMessage();
        });
}
