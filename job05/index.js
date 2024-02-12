    function pop_up() {
        console.log("Hello Javascript !");
    }

    function bisextile (année){
        if ((année % 4 ==0 && année % 100!=0) || année % 400 == 0 ) {
            return true
        }
        else {
            return false
        }
    }

    function afficherjourssemaines () {
            var joursemaine = ["Lundi" , "Mardi" , "Mercredi" , "Jeudi" , "Vendredi" , "Samedi" , "Dimanche" ]

            for (var i = 0; i < joursemaine.length; i++) {
                console.log(joursemaine[i]);
            }

    }

afficherjourssemaines();
