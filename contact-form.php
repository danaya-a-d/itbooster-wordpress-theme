<div class="discuss__wrapper wrapper" id="page-form">
    <h2 class="discuss__title title wow fadeInUp"><?php echo $GLOBALS['form']['title']; ?></h2>

    <form class="discuss__form main-form" method="post" action="<?php echo admin_url('admin-ajax.php?action=callback_mail') ?>">
        <fieldset class="main-form__field">
            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="name" type="text" placeholder="<?php echo $GLOBALS['form']['placeholder_name']; ?>" required>
            </label>

            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="lastname" type="text" placeholder="<?php echo $GLOBALS['form']['placeholder_lastname']; ?>" required>
            </label>

            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="email" type="email" placeholder="E-mail" required>
            </label>

            <label class="main-form__label">
                <input class="main-form__input wow fadeInUp" name="tel" type="tel" placeholder="<?php echo $GLOBALS['form']['placeholder_tel']; ?>" required>
            </label>

            <label style="display: none">
                <input name="theme" type="hidden" value="Заявка с сайта Itbooster">
            </label>
        </fieldset>

        <label class="main-form__label">
                    <textarea class="main-form__textarea wow fadeInUp" name="message"
                              placeholder="<?php echo $GLOBALS['form']['placeholder_message']; ?>"></textarea>
        </label>

        <button class="main-form__button button button--blue wow fadeInUp" type="submit"><?php echo $GLOBALS['form']['button']; ?></button>

        <div class="modal modal--success hide">

            <div class="modal__wrapper wrapper">
                <button class="modal__close-btn modal-close" type="button"></button>

                <h2 class="modal__title title"><?php echo $GLOBALS['form']['success_title']; ?></h2>

                <p class="modal__text"><?php echo $GLOBALS['form']['success_text']; ?></p>
            </div>
        </div>
    </form>
</div>

