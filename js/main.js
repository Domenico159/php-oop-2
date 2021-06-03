
const textWelcome = document.getElementById('userWelcome');
const main = document.getElementById('main');






let userName = prompt('Inserisci il tuo nome').trim();

while ((!isNaN(userName) || userName == '')) {
    userName = prompt('Nome non valido , prego riprovare').trim();
}

let userLastName = prompt('Inserisci il tuo cognome').trim();

while ((!isNaN(userLastName) || userLastName == '')) {
    userLastName = prompt('Cognome non valido , prego riprovare').trim();
}


main.className = 'active';

textWelcome.innerHTML = 'Benvenuto ' + userName + '  ' + userLastName;