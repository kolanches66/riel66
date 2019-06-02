<?php

/*
  Plugin Name: MP Feedback Form
  Version: 1.0
  Author: Maksim Ponomarev
  Author URI: http://kolanches.ru
 */

function form_handler() {
    if (isset($_POST['submit'])) {
        form_validation($_POST['name'], $_POST['phone']);
    }
    form_create();
}

function form_create() {
    echo '
    <h2 class="sect__header">Заинтересованы?</h2>
    <p class="callback__description">Дам бесплатную консультацию по телефону</p>
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post" autocomplete="off">
        <div class="callback__fields">
            <p class="callback__paragraph_for_textbox">
                <input class="callback__textbox" type="text" name="name" placeholder="Имя">
            </p>
            <p class="callback__paragraph_for_textbox">
                <input class="callback__textbox" type="text name="phone" placeholder="Телефон">
            </p>
        </div>
        <div class="callback__buttons">
            <button class="callback__buttons__button_submit" name="submit" type="submit">Отправить</button>
        </div>
    </form>
    ';
}

function form_validation($name, $phone)  {
    global $reg_errors;
    $reg_errors = new WP_Error;

    if ( empty( $name ) || empty( $phone ) ) {
        $reg_errors->add('field', 'Заполнены не все поля');
    }

    if ( is_wp_error( $reg_errors ) ) {
        foreach ( $reg_errors->get_error_messages() as $error ) {
            echo '
            <div>
                <strong>Ошибка</strong>:' . $error . '<br/>
            </div>
            ';
        }
    }
}

function complete_registration() {
//    global $reg_errors, $name, $phone;
//    if (count($reg_errors->get_error_messages()) <= 0) {
//        echo 'Спасибо, ожидайте звонка';
//    }
}

function form_shortcode() {
    ob_start();
    form_handler();
    return ob_get_clean();
}

add_shortcode('mp_feedback_form', 'form_shortcode');