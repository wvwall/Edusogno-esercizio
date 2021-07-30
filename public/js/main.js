
$("#user").click(function () {
        $.ajax({
        url: 'db/db_users.php',
        type: 'POST',
        data: {
            'name': $('input[name="name"]').val(),
            'lastname': $('input[name="lastaname"]').val(),
            'email': $('input[name="email"]').val(),

        },
        success: function(data) {
            console.log(data)
        },
        error: function(data) {
            console.log(data)
        },    
    });
});


$("#event").click(function () {
        $.ajax({
        url: 'db/db_events.php',
        type: 'POST',
        data: {
            event_name: $('input[name="name"]').val(),
            description: $('input[name="description"]').val(),
            date: $('input[name="date"]').val(),
            hour: $('input[name="houe"]').val(),
        },
        success: function(data) {
            console.log(data)
            alert(data);
        },
        error: function(data) {
            console.log(data)
            alert(data);
        },    
    });
});
   