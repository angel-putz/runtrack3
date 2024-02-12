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
    fizzbuzz() ;
