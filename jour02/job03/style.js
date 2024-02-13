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
*/

window.onload = function() {
    document.getElementById("button").addEventListener("click", addone);
}
function addone() {
    var compteur = document.getElementById("compteur");
    compteur.innerText = parseInt(compteur.innerText) + 1;
}