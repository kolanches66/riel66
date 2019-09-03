<div class="callback">
    <form class="callback__form" action="<?= get_template_directory_uri(); ?>/handlers/callback.php" method="post" autocomplete="off">
        <div class="callback__fields">
            <div class="callback__fields__line">
                <input class="callback__textbox" type="text" name="callback_name" placeholder="Имя">
            </div>
            <div class="callback__fields__line">
                <input class="callback__textbox" type="text" name="callback_phone" placeholder="Телефон">
            </div>
            <div class="callback__fields__line">
                <div class="callback__policy">
                    <a target="_blank" href="http://localhost:8080/?page_id=3">Нажимая «Отправить», вы соглашаетесь предоставить Ваши персональные данные на обработку.</a>
                </div>
            </div>
        </div>
        <div class="callback__buttons">
            <button class="callback__buttonsubmit js-callback-submit" name="submit" type="submit">Отправить</button>
        </div>
        
        </div>
    </form>
</div>