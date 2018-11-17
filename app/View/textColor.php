<script src="../../public/assets/js/textColor.js"></script>

<section class="text-color d-flex w-100 h-100 justify-content-center mt-5">
    <form class="text-color__form" id="TextColor" method="post">
        <div class="text-color__form__items">
            <div class="text-color__form__items__item">
                <label for="red">Red</label>
                <input type="number" name="red" id="red" min="0" max="255" value="255">
            </div>
            <div class="text-color__form__items__item">
                <label for="green">Green</label>
                <input type="number" name="green" id="green" min="0" max="255" value="255">
            </div>
            <div class="text-color__form__items__item">
                <label for="blue">Blue</label>
                <input type="number" name="blue" id="blue" min="0" max="255" value="255">
            </div>
        </div>
        <button type="submit">Изменить</button>
        <span class="text-color__result" id="text-color__result">Text for testing</span>
    </form>
</section>