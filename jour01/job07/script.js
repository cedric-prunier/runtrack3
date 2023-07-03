function jourtravaille(date) {
        const jour = date.getDate();
        const mois = date.getMonth() + 1; // Les mois commencent à partir de 0
        const annee = date.getFullYear();
        const jourSemaine = date.getDay();

        // Tableau des jours fériés de l'année 2020
        const joursFeries2020 = [
                new Date(2020, 0, 1), // Jour de l'an
                new Date(2020, 3, 13), // Vendredi saint
                new Date(2020, 4, 1), // Fête du Travail
                new Date(2020, 4, 8), // Victoire 1945
                new Date(2020, 4, 21), // Ascension
                new Date(2020, 5, 1), // Pentecôte
                new Date(2020, 6, 14), // Fête nationale
                new Date(2020, 7, 15), // Assomption
                new Date(2020, 10, 1), // Toussaint
                new Date(2020, 10, 11), // Armistice
                new Date(2020, 11, 25), // Noël
        ];

        // Vérifier si la date est un jour férié
        for (let i = 0; i < joursFeries2020.length; i++) {
                if (date.getTime() === joursFeries2020[i].getTime()) {
                        return `Le ${jour} ${mois} ${annee} est un jour férié.`;
                }
        }

        // Vérifier si la date est un week-end (samedi ou dimanche)
        if (jourSemaine === 0 || jourSemaine === 6) {
                return `Non, ${jour} ${mois} ${annee} est un week-end.`;
        }

        // Si la date n'est ni un jour férié ni un week-end, c'est un jour travaillé
        return `Oui, ${jour} ${mois} ${annee} est un jour travaillé.`;
}
const date1 = new Date(2020, 0, 1);
console.log(jourtravaille(date1));
// Résultat attendu : "Le 1 1 2023 est un jour férié."
const date2 = new Date(2020, 0, 2);
console.log(jourtravaille(date2));
const date3 = new Date(2020, 3, 12);
console.log(jourtravaille(date3));
