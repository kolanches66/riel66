<div class="callback">
    <form class="callback__form" action="<?= get_template_directory_uri(); ?>/handlers/callback.php" method="post" autocomplete="off">
        <div class="callback__fields">
            <div class="callback__fields__line">
                <input class="callback__textbox" type="text" name="callback_name" placeholder="Имя">
            </div>
            <div class="callback__fields__line">
                <input class="callback__textbox" type="text" name="callback_phone" placeholder="Телефон">
            </div>
        </div>
        <div class="callback__buttons">
            <button class="callback__buttonsubmit" name="submit" type="submit">Отправить</button>
        </div>
    </form>
</div>

<script>
    jQuery(document).ready(function() {

        $('input[name="callback_phone"]').mask("+7 000 000 00 00");

        $('input[name="callback_phone"]').focus(function() {
            $(this).attr('placeholder', '+7 XXX XXX XX XX');
        });

        $('input[name="callback_phone"]').blur(function() {
            $(this).attr('placeholder', 'Телефон');
        });

    });

    jQuery('.callback__buttonsubmit').click(function(e) {
        e.preventDefault();

        var formData = {
            'name': jQuery('input[name=callback_name]').val(),
            'phone': jQuery('input[name=callback_phone]').val(),
        };

        jQuery.ajax({
            type: 'POST', 
            url: jQuery('.callback__form').attr('action'),
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function(data) {
            console.log(data); 
        });
    });
</script>