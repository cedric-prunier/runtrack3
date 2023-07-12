function jsonValueKey(jsonString, key) {
        try {
                const parsedJson = JSON.parse(jsonString);
                return parsedJson[key];
        } catch (error) {
                console.log("Erreur lors de l'analyse du JSON :", error);
                return null;
        }
}
const jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
}`;

const key = "city";
const cityValue = jsonValueKey(jsonString, key);
console.log(cityValue); // Affiche "Marseille"
