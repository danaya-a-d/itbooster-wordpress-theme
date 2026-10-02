<div class="discuss__wrapper wrapper">
    <h2 class="discuss__title title wow fadeInUp"><strong>Давайте обсудим</strong> Ваш проект</h2>

    <form class="contact__form main-form" method="post" action="<?php echo admin_url('admin-ajax.php?action=callback_mail') ?>">
        <fieldset class="main-form__field">
            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="name" type="text" placeholder="Имя" required>
            </label>

            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="lastname" type="text" placeholder="Фамилия" required>
            </label>

            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="email" type="email" placeholder=" E-mail" required>
            </label>

            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="tel" type="tel" placeholder="Номер телефона" required>
            </label>
        </fieldset>

        <label class="main-form__label">
                    <textarea class="main-form__textarea wow fadeInUp" name="message"
                              placeholder="Опишите Ваши идеи"></textarea>
        </label>

        <button class="main-form__button button button--blue wow fadeInUp" type="submit">Отправить</button>
    </form>
</div>