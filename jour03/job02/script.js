$(document).ready(function() {
    var images = [
        { src: 'arc1.png', alt: 'arc1', id: 'arc1' },
        { src: 'arc2.png', alt: 'arc2', id: 'arc2' },
        { src: 'arc3.png', alt: 'arc3', id: 'arc3' },
        { src: 'arc4.png', alt: 'arc4', id: 'arc4' },
        { src: 'arc5.png', alt: 'arc5', id: 'arc5' },
        { src: 'arc6.png', alt: 'arc6', id: 'arc6' }
    ];

    var parent = $('body');

    // Génère les éléments d'image
    images.forEach(function(image) {
        $('<img>').attr('src', image.src).attr('alt', image.alt).attr('id', image.id).appendTo(parent);
    });

    // Rend les images triables par glisser-déposer
    $('body').sortable({
        update: function(event, ui) {
            checkWin();
        }
    });

    $('#melanger').click(function() {
        var images = $('img');
        images.sort(function() { 
            return 0.5 - Math.random(); 
        });
        images.detach().appendTo(parent);
        checkWin();
    });

    // Fonction pour vérifier si l'arc-en-ciel est reconstitué
    function checkWin() {
        var orderedIds = ['arc1', 'arc2', 'arc3', 'arc4', 'arc5', 'arc6'];
        var currentIds = $('img').map(function() {
            return this.id;
        }).toArray();

        var win = arraysMatch(orderedIds, currentIds);
        if (win) {
            $('#bravo').text('Vous avez gagné').css('color', 'green').show();
        } else {
            $('#bravo').text('Vous avez perdu').css('color', 'red').show();
        }
    }

    // Fonction pour comparer deux tableaux
    function arraysMatch(arr1, arr2) {
        if (arr1.length !== arr2.length) return false;
        for (var i = 0; i < arr1.length; i++) {
            if (arr1[i] !== arr2[i]) return false;
        }
        return true;
    }
});
