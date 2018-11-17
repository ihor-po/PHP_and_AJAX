<script src="../../public/assets/js/calendar.js"></script>

<section class="d-flex flex-column w-100 h-100 mt-5">
    <form class="calendar__form" id="calendarForm">
        <div class="text-color__form__items">
            <div class="text-color__form__items__item">
                <label for="month">Месяц</label>
                <input type="number" name="month" id="month" min="1" max="12" value="" placeholder="M">
            </div>
        </div>
        <button class="mt-3" type="submit">Изменить</button>
    </form>
    <div class="calendar" id="calendar">
        <div class="calendar__week">
            <div class="calendar__week__day">пн</div>
            <div class="calendar__week__day">вт</div>
            <div class="calendar__week__day">ср</div>
            <div class="calendar__week__day">чт</div>
            <div class="calendar__week__day">пт</div>
            <div class="calendar__week__day calendar__week__day--red">сб</div>
            <div class="calendar__week__day calendar__week__day--red">вс</div>
        </div>
    </div>
</section>