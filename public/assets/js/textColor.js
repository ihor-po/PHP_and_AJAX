$( document ).ready(function() {

    $('#TextColor').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "/app/common.php",
            data: {
              action: 'changeText',
              red: $('#red').val(),
              green: $('#green').val(),
              blue: $('#blue').val()
            },
            beforeSend: function () {
                $('#text-color__resut').css('display', 'none');
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data['success'])
                {
                    $('#text-color__result').css('background-color', data['background-color']);
                    $('#text-color__result').css('color', data['color']);
                }
            },
            error: function (errors) {
            }
        });

    });
});