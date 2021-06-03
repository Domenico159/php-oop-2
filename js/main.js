


let userName = prompt('Inserisci il tuo nome').trim();

while ((!isNaN(userName) || userName == '')) {
    userName = prompt('Nome non valido , prego riprovare').trim();
}

let userLastName = prompt('Inserisci il tuo cognome').trim();

while ((!isNaN(userLastName) || userLastName == '')) {
    userLastName = prompt('Cognome non valido , prego riprovare').trim();
}



document.getElementById('userWelcome').innerHTML = 'Benvenuto ' + userName + '  ' + userLastName;