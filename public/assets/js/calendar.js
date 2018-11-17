$( document ).ready(function() {

    $('#calendarForm').submit(function (e) {
        e.preventDefault();

        if ($('#month').val() == '')
        {
            return alert('Вы не ввели месяц!');
        }

        $.ajax({
            type: 'POST',
            url: "/app/common.php",
            data: {
              action: 'calendar',
              month: $('#month').val()
            },
            beforeSend: function () {
                let html = '<div class="calendar__week">\n' +
                    '            <div class="calendar__week__day">пн</div>\n' +
                    '            <div class="calendar__week__day">вт</div>\n' +
                    '            <div class="calendar__week__day">ср</div>\n' +
                    '            <div class="calendar__week__day">чт</div>\n' +
                    '            <div class="calendar__week__day">пт</div>\n' +
                    '            <div class="calendar__week__day calendar__week__day--red">сб</div>\n' +
                    '            <div class="calendar__week__day calendar__week__day--red">вс</div>\n' +
                    '        </div>';
                $('#calendar').html(html);
            },
            success: function (data) {
                data = JSON.parse(data);

                let tmp = $('#calendar').html();
                tmp += data;

                $('#calendar').html(tmp);
            },
            error: function (errors) {
                alert(errors);
            }
        });

    });
});