function sommenombrespremiers(nombre1, nombre2) {
        // Fonction pour vérifier si un nombre est premier
        function estPremier(nombre) {
                if (nombre < 2) {
                        return false;
                }

                for (let i = 2; i <= Math.sqrt(nombre); i++) {
                        if (nombre % i === 0) {
                                return false;
                        }
                }

                return true;
        }

        // Vérifier si les deux nombres sont premiers
        if (estPremier(nombre1) && estPremier(nombre2)) {
                return nombre1 + nombre2;
        } else {
                return false;
        }
}
console.log(sommenombrespremiers(7, 13));
// Résultat attendu : 20 (7 + 13)

console.log(sommenombrespremiers(6, 11));
// Résultat attendu : false (6 n'est pas premier)

console.log(sommenombrespremiers(17, 19));
// Résultat attendu : 36 (17 + 19)
