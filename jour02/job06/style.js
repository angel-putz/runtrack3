/*
window.onload = function() {
    document.getElementById("button").addEventListener("click", citation);
}

function citation() {
    var text = document.getElementById("citation").innerText;
    console.log(text);
}

function showhide() {
    var article = document.getElementById("article");
    if (article) {
        // Si l'article existe déjà, le supprimer
        article.remove();
    } else {
        // Sinon, créer un nouvel article et l'ajouter à la page
        article = document.createElement("article");
        article.id = "article";
        article.innerText = "L'important n'est pas la chute, mais l'atterrissage.";
        return document.body.appendChild(article);
    }
}


window.onload = function() {
    document.getElementById("button").addEventListener("click", addone);
}
function addone() {
    var compteur = document.getElementById("compteur");
    compteur.innerText = parseInt(compteur.innerText) + 1;
}



var textarea = document.getElementById('keylogger');

// Ajouter un écouteur d'événements pour les frappes de clavier sur la page
document.addEventListener('keypress', function(event) {
    // Vérifier si la touche pressée est une lettre (a-z)
    if (event.key.match(/[a-z]/i)) {
        // Ajouter la lettre au textarea
        textarea.value += event.key;

        // Si le focus est sur le textarea, ajouter la lettre une deuxième fois
        if (document.activeElement === textarea) {
            textarea.value += event.key;
        }
    }
});



var footer = document.getElementById('footer');

// Ajouter un écouteur d'événements pour le défilement de la page
window.addEventListener('scroll', function() {
    // Calculer le pourcentage de défilement
    var scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;

    // Changer la couleur du footer en fonction du pourcentage de défilement
    footer.style.backgroundColor = 'hsl(' + scrollPercent + ', 100%, 50%)';
});
*/

// Le code Konami
var konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
var konamiIndex = 0;

// Ajouter un écouteur d'événements pour les frappes de clavier sur la page
document.addEventListener('keydown', function(event) {
    // Vérifier si la touche pressée est la suivante dans le code Konami
    if (event.key === konamiCode[konamiIndex]) {
        // Si c'est le cas, passer à la prochaine touche
        konamiIndex++;

        // Si toutes les touches ont été pressées dans le bon ordre, appliquer le style Konami
        if (konamiIndex === konamiCode.length) {
            document.body.classList.add('konami');
        }
    } else {
        // Si la touche pressée n'est pas la suivante dans le code Konami, réinitialiser l'index
        konamiIndex = 0;
    }
});