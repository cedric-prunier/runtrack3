const bouton = document.getElementById("button");
const compteur = document.getElementById("compteur");
let compteurValue = 0;
bouton.addEventListener("click", addOne);
function addOne() {
        compteurValue++;
        compteur.textContent = compteurValue.toString();
}
