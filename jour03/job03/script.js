$(document).ready(function() {
    var tiles = [
        { src: 'logo1.png' ,id: 'tile1', correctPosition: 1 },
        { src: 'logo2.png' ,id: 'tile2', correctPosition: 2 },
        { src: 'logo3.png' ,id: 'tile3', correctPosition: 3 },
        { src: 'logo4.png' ,id: 'tile4', correctPosition: 4 },
        { src: 'logo5.png' ,id: 'tile5', correctPosition: 5 },
        { src: 'logo6.png' ,id: 'tile6', correctPosition: 6 },
        { src: 'logo7.png' ,id: 'tile7', correctPosition: 7 },
        { src: 'logo8.png' ,id: 'tile8', correctPosition: 8 },
        { src: 'logo9.png' ,id: 'empty', correctPosition: 9 }
    ];

    parent = $('#game');

    // Mélange les tuiles
    tiles.sort(function() { 
        return 0.5 - Math.random(); 
    });

    // Génère les tuiles
    tiles.forEach(function(tile) {
        $('<div>').attr('id', tile.id).addClass('tile').append($('<img>').attr('src', tile.src)).appendTo('#game');
    });

    // Ajoute un événement de clic à chaque tuile
    $(document).on('click', '.tile', function() {
        var emptyTile = $('#empty');
        var clickedTile = $(this);
    
        // Calcule les positions de ligne et de colonne de la tuile cliquée et de la tuile vide
        var clickedTileRow = Math.floor(clickedTile.index() / 3);
        var emptyTileRow = Math.floor(emptyTile.index() / 3);
        var clickedTileCol = clickedTile.index() % 3;
        var emptyTileCol = emptyTile.index() % 3;
    
        // Si les tuiles sont adjacentes horizontalement (et sur la même ligne) ou verticalement (et sur la même colonne), échange leurs positions
        if ((Math.abs(clickedTileCol - emptyTileCol) === 1 && clickedTileRow === emptyTileRow) || 
            (Math.abs(clickedTileRow - emptyTileRow) === 1 && clickedTileCol === emptyTileCol)) {
            var temp = clickedTile.clone();
            clickedTile.replaceWith(emptyTile.clone());
            emptyTile.replaceWith(temp);
        }
    
        // Vérifie si les tuiles sont dans le bon ordre
        var isWin = tiles.every(function(tile, index) {
            return $('#' + tile.id).index() === tile.correctPosition - 1;
        });
    
        if (isWin) {
            $('<p>').text('Vous avez gagné').css('color', 'green').appendTo('#game');
            $(document).off('click', '.tile'); // Désactive les événements de clic
        }
    });

    // Ajoute un bouton "Recommencer"
    $('<button>').text('Recommencer').click(function() {
        location.reload();
    }).appendTo('#game');
});