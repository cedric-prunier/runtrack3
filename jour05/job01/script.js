$(document).ready(function () {
        // Validation du formulaire d'inscription
        $("#inscriptionForm").submit(function (event) {
                event.preventDefault();

                // Réinitialisation des messages d'erreur
                $(".error").empty();

                // Récupération des valeurs des champs
                let nom = $("#nom").val();
                let prenom = $("#prenom").val();
                let email = $("#email").val();
                let password = $("#password").val();
                let confirmPassword = $("#confirmPassword").val();

                // Validation des champs
                let isValid = true;

                if (nom.trim() === "") {
                        $("#nomError").text("Veuillez entrer votre nom.");
                        isValid = false;
                }

                if (prenom.trim() === "") {
                        $("#prenomError").text("Veuillez entrer votre prénom.");
                        isValid = false;
                }

                if (email.trim() === "") {
                        $("#emailError").text("Veuillez entrer votre email.");
                        isValid = false;
                } else if (!isValidEmail(email)) {
                        $("#emailError").text("Veuillez entrer un email valide.");
                        isValid = false;
                }

                if (password.trim() === "") {
                        $("#passwordError").text("Veuillez entrer votre mot de passe.");
                        isValid = false;
                } else if (password !== confirmPassword) {
                        $("#confirmPasswordError").text("Les mots de passe ne correspondent pas.");
                        isValid = false;
                }

                // Soumission du formulaire si tout est valide
                if (isValid) {
                        $.ajax({
                                url: "inscription_process.php",
                                method: "POST",
                                data: {
                                        nom: nom,
                                        prenom: prenom,
                                        email: email,
                                        password: password,
                                },
                                success: function (response) {
                                        $("#message").text(response.message);
                                        if (response.success) {
                                                $("#inscriptionForm")[0].reset();

                                                // Redirection vers la page de connexion
                                                if (response.redirect) {
                                                        window.location.href = response.redirect;
                                                }
                                        }
                                },
                                error: function () {
                                        $("#message").text("Une erreur s'est produite lors de l'inscription.");
                                },
                        });
                }
        });

        // Validation du formulaire de connexion
        $("#connexionForm").submit(function (event) {
                event.preventDefault();

                // Réinitialisation des messages d'erreur
                $(".error").empty();

                // Récupération des valeurs des champs
                let email = $("#email").val();
                let password = $("#password").val();

                // Validation des champs
                let isValid = true;

                if (email.trim() === "") {
                        $("#emailError").text("Veuillez entrer votre email.");
                        isValid = false;
                }

                if (password.trim() === "") {
                        $("#passwordError").text("Veuillez entrer votre mot de passe.");
                        isValid = false;
                }

                // Soumission du formulaire si tout est valide
                if (isValid) {
                        $.ajax({
                                url: "connexion_process.php",
                                method: "POST",
                                data: {
                                        email: email,
                                        password: password,
                                },
                                success: function (response) {
                                        $("#message").text(response.message);
                                        if (response.success) {
                                                $("#connexionForm")[0].reset();

                                                // Redirection vers la page d'accueil
                                                if (response.redirect) {
                                                        window.location.href = response.redirect;
                                                }
                                        }
                                },
                                error: function () {
                                        $("#message").text("Une erreur s'est produite lors de la connexion.");
                                },
                        });
                }
        });

        // Fonction de validation d'email
        function isValidEmail(email) {
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
        }
});
