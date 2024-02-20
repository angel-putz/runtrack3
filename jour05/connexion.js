
    $(document).ready(function() {
        $('#connexionForm').submit(function(e) {
            e.preventDefault();
    
            // Clear errors
            $('#emailError').text('');
            $('#passwordError').text('');
    
            // Get form data
            var email = $('#email').val();
            var password = $('#password').val();
    
            var isValid = true;
    
            if(email === '') {
                isValid = false;
                $('#emailError').text('Email is required');
            }
    
            if(password === '') {
                isValid = false;
                $('#passwordError').text('Password is required');
            }
    
            // If form data is valid, send to server
            if(isValid) {
                $.ajax({
                    url: 'index.php',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(data) {
                      //  var response = JSON.parse(data);
                
                        //if(response.status === 'success') {
                            // If login is successful, redirect to the home page
                            window.location.href = 'index.php';
                       // } else {
                          //  $('#loginError').text(response.message);
                          //  console.log(response.message);
                            // Handle login failure
                            // Display error message from response.message
                       // }
                    }
                });
            }
        });
    });
