$(document).ready(function() {
    $('#inscriptionForm').submit(function(e) {
        e.preventDefault();

        // Clear errors
        $('#nomError').text('');

        // Get form data
        var nom = $('#nom').val();
        var prenom =$('#prenom').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var passwordConfirmation = $('#passwordConfirmation').val();

        var isValid = true;

        if(nom === '') {
            isValid = false;
            $('#nomError').text('Nom is required');
        }

        if(prenom === '') {
            isValid = false;
            $('#prenomError').text('Prenom is required');
        }

        if(email === '') {
            isValid = false;
            $('#emailError').text('Email is required');
        }

        if(password === '') {
            isValid = false;
            $('#passwordError').text('Password is required');
        }

        if(passwordConfirmation === '') {
            isValid = false;
            $('#passwordConfirmationError').text('Password confirmation is required');
        }

        if(password !== passwordConfirmation) {
            isValid = false;
            $('#passwordConfirmationError').text('Passwords do not match');
        }



        // If form data is valid, send to server
        if(isValid) {
            $.ajax({
                url: 'inscription_handler.php',
                type: 'POST',
                data: {
                    nom: nom,
                    prenom: prenom,
                    email: email,
                    password: password,
                    passwordConfirmation: passwordConfirmation
                },
                success: function(data) {
                    var response = JSON.parse(data);

                    if(response.status === 'success') {
                        window.location.href = 'connexion.php';
                    } else {

                        

                        

                        // Handle errors
                    }
                }
            });
        }
    });
});