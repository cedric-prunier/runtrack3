document.getElementById("connexionForm").addEventListener("submit", function (event) {
        event.preventDefault();

        // Vérifier les validations habituelles du formulaire avec JavaScript
        // ...

        // Envoyer le formulaire de connexion en AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "connexion_process.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                        // Traiter la réponse du serveur (afficher un message de succès, erreur, etc.)
                }
        };
        var formData = new FormData(document.getElementById("connexionForm"));
        xhr.send(formData);
});
