document.getElementById("inscriptionForm").addEventListener("submit", function (event) {
        event.preventDefault();

        // Vérifier les validations habituelles du formulaire avec JavaScript
        // ...

        // Envoyer le formulaire d'inscription en AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "inscription_process.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                        // Traiter la réponse du serveur (afficher un message de succès, erreur, etc.)
                }
        };
        var formData = new FormData(document.getElementById("inscriptionForm"));
        xhr.send(formData);
});
