// Fonction pour mettre à jour le tableau avec les utilisateurs
function updateTable() {
        $.getJSON("users.php", function (data) {
                var tbody = $("#userTable tbody");
                tbody.empty();

                $.each(data, function (index, user) {
                        var row =
                                "<tr>" +
                                "<td>" +
                                user.id +
                                "</td>" +
                                "<td>" +
                                user.nom +
                                "</td>" +
                                "<td>" +
                                user.email +
                                "</td>" +
                                // Ajoutez d'autres cellules de données ici
                                "</tr>";
                        tbody.append(row);
                });
        });
}

// Mettre à jour le tableau lors du chargement initial de la page
$(document).ready(function () {
        updateTable();
});

// Mettre à jour le tableau lorsqu'on clique sur le bouton "Mettre à jour"
$("#updateButton").click(function () {
        updateTable();
});
