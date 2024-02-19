$(document).ready(function() {
    $("#inscriptionForm").on("submit", function(event) {
        //event.preventDefault();
        var form = $(this);
        $.ajax({
            url: "index.php",
            type: form.attr("method"),
            data: form.serialize(),
            success: function(data) {
                $("#result").html(data);
            }
        });
        })
    });

    $("#connexionForm").on("submit", function(event) {
        //event.preventDefault();
        var form = $(this);
        $.ajax({
            url: "index.php",
            type: form.attr("method"),
            data: form.serialize(),
            success: function(data) {
                $("#result").html(data);
            }
        });
    });