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

    function fizzbuzz (){
        for (var i = 0 ;i <= 151 ; i++) {
            if (i % 3 ==0 && i % 5 ==0 ) {
                console.log("FizzBuzz");
            }else if (i % 3 === 0) {
                console.log("Fizz");
            } else if (i % 5 === 0) {
                console.log("Buzz");
            } else {
                console.log(i);
            }
        }
    }
   
    function jourtravaille (date) {
        var joursFeries2020 = [
            new Date(2020, 0, 1),  
            new Date(2020, 3, 13), 
            new Date(2020, 4, 1),  
            new Date(2020, 4, 8),  
            new Date(2020, 5, 1),  
            new Date(2020, 6, 14), 
            new Date(2020, 7, 15), 
            new Date(2020, 10, 1), 
            new Date(2020, 10, 11),
            new Date(2020, 11, 25) 
        ];

        var jour = date.getDate();
        var mois = date.getMonth() ; 
        var annee = date.getFullYear();

        if (date.getDay() === 0 || date.getDay() === 6) {
            console.log(`Non, ${jour} ${mois} ${annee} est un week-end`);
        } else if (joursFeries2020.some(date.getTime())) { // si la date est un jour férié 
            console.log(`Le ${jour} ${mois} ${annee} est un jour férié`);
        } else {
            console.log(`Oui, ${jour} ${mois} ${annee} est un jour travaillé`);
        }
    }


    function nombrepremier (n , m) {
        if (n === 0 && m ===0|| n === 1 && m === 1) {
            return false;
        } else {
            for (var i = 2; i < n ; i++) {
                if (n % i === 0) {
                    return false;
                }
            }
            for (var i = 2; i < m ; i++) {
                if (m % i === 0) {
                    return false;
                }
            }
            somme = n + m ;
            return somme;
        }
    }

    console.log(nombrepremier(3, 5));