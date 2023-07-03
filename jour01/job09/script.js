function tri(numbers, order) {
        // Fonction de comparaison pour le tri ascendant
        function compareAsc(a, b) {
                return a - b;
        }

        // Fonction de comparaison pour le tri décroissant
        function compareDesc(a, b) {
                return b - a;
        }

        // Tri du tableau en fonction de l'ordre spécifié
        if (order === "asc") {
                numbers.sort(compareAsc);
        } else if (order === "desc") {
                numbers.sort(compareDesc);
        }

        return numbers;
}
const numbers = [5, 2, 8, 1, 9, 3];
const order = "asc";

const sortedNumbers = tri(numbers, order);
console.log(sortedNumbers);
// Résultat attendu : [1, 2, 3, 5, 8, 9]
