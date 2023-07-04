function showhide() {
        const articleElement = document.getElementById("article");

        if (articleElement) {
                articleElement.remove(); // Supprimer l'article s'il existe
        } else {
                const newArticle = document.createElement("article");
                newArticle.id = "article";
                newArticle.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
                document.body.appendChild(newArticle); // Ajouter l'article au corps de la page
        }
}
