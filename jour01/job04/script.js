function bisextile(annee) {
        if (annee % 4 === 0) {
                if (annee % 100 === 0 && annee % 400 !== 0) {
                        return false;
                }
                return true;
        }
        return false;
}
let annee = 2020;
let estbisextile = bisextile(annee);
console.log(estbisextile);
