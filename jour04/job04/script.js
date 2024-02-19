$(document).ready(function() {
    $('#updateButton').click(function() {
        $.getJSON('user.php', function(data) {
            $('#usersTable tr:not(:first)').remove(); // Remove all rows except the first (header)
            $.each(data, function(key, user) {
                $('#usersTable').append('<tr><td>' + user.id + '</td><td>' + user.nom + '</td><td>' + user.prenom + '</td><td>' + user.email + '</td></tr>');
            });
        });
    });
});