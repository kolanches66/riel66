<?php
/*
 *  Author: Maksim Ponomarev | @mponomarev
 *  URL: riel66.ru
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
}

function load_scripts(){
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function admin_remove_menus(){
    remove_menu_page('index.php' );                  //Консоль
    remove_menu_page('edit.php' );                   //Записи
    remove_menu_page('upload.php' );                 //Медиафайлы
    // remove_menu_page('edit.php?post_type=page' );    //Страницы
    remove_menu_page('edit-comments.php' );          //Комментарии
    remove_menu_page('themes.php' );                 //Внешний вид
    remove_menu_page('plugins.php' );                //Плагины
    remove_menu_page('users.php' );                  //Пользователи
    remove_menu_page('tools.php' );                  //Инструменты
    // remove_menu_page('options-general.php' );        //Настройки
}
  
function admin_hide_order_infoblock() {
    echo '<style>
        #cpt_info_box {
        display: none;
        }
    </style>';
}


$siteparams_url = 'siteparams.php';

function siteparams() { /* siteparams_addpage */
    global $siteparams_url;
    add_menu_page( 'Параметры', 'Параметры', 'manage_options', $siteparams_url, 'siteparams_renderpage');
}
add_action('admin_menu', 'siteparams');

/**
 * Возвратная функция (Callback)
 */
function siteparams_renderpage(){ /* siteparams_render */
    global $siteparams_url;
    ?><div class="wrap">
    <h2>Параметры сайта</h2>
    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php
        settings_fields('siteparams'); // меняем под себя только здесь (название настроек)
        do_settings_sections($siteparams_url);
        ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
    </div><?php
}

/*
 * Регистрируем настройки
 * Мои настройки будут храниться в базе под названием siteparams (это также видно в предыдущей функции)
 */
function siteparams_addfields() {
    global $siteparams_url;
    // Присваиваем функцию валидации ( siteparams_validate() ). Вы найдете её ниже
    register_setting( 'siteparams', 'siteparams', 'siteparams_validate' ); // siteparams

    add_settings_section( 'section_general', 'Основные', '', $siteparams_url );

    $fields = array(
      array('id'=>'phone', 'title'=>'Телефон на сайте', 'desc'=>'Без пробелов, начиная с +7'),
      array('id'=>'email', 'title'=>'E-mail на сайте'),
      array('id'=>'telegram', 'title'=>'Телеграм на сайте'),
      array('id'=>'whatsapp', 'title'=>'Whatsapp на сайте')
    );
    foreach ($fields as $field) {
        $fieldparams = array('type'=>'text', 'id'=>$field['id'], 'label_for'=>$field['id'], 'desc'=>(isset($field['desc']) ? $field['desc'] : ''));
        add_settings_field( $field['id'] . '_field', $field['title'], 'siteparams_renderfield', $siteparams_url, 'section_general', $fieldparams );
    }

    $fieldparams = array('type'=>'textarea', 'id'=>'aboutme');
    add_settings_field( 'aboutme_field', 'Текст блока &laquo;Обо мне&raquo;', 'siteparams_renderfield', $siteparams_url, 'section_general', $fieldparams );

    // Добавляем вторую секцию настроек
//    add_settings_section( 'true_section_2', 'Другие поля ввода', '', $siteparams_url );

    // Создадим чекбокс
//    $true_field_params = array(
//        'type'      => 'checkbox',
//        'id'        => 'my_checkbox',
//        'desc'      => 'Пример чекбокса.'
//    );
//    add_settings_field( 'my_checkbox_field', 'Чекбокс', 'siteparams_renderfield', $siteparams_url, 'true_section_2', $true_field_params );

    // Создадим выпадающий список
//    $true_field_params = array(
//        'type'      => 'select',
//        'id'        => 'my_select',
//        'desc'      => 'Пример выпадающего списка.',
//        'vals'		=> array( 'val1' => 'Значение 1', 'val2' => 'Значение 2', 'val3' => 'Значение 3')
//    );
//    add_settings_field( 'my_select_field', 'Выпадающий список', 'siteparams_renderfield', $siteparams_url, 'true_section_2', $true_field_params );

    // Создадим радио-кнопку
//    $true_field_params = array(
//        'type'      => 'radio',
//        'id'      => 'my_radio',
//        'vals'		=> array( 'val1' => 'Значение 1', 'val2' => 'Значение 2', 'val3' => 'Значение 3')
//    );
//    add_settings_field( 'my_radio', 'Радио кнопки', 'siteparams_renderfield', $siteparams_url, 'true_section_2', $true_field_params );

}
add_action( 'admin_init', 'siteparams_addfields' );


function siteparams_renderfield($args) {
    extract( $args );
    $option_name = 'siteparams';
    $o = get_option( $option_name );

    switch ( $type ) {
        case 'text':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'textarea':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
//            echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";
            wp_editor($o[$id], $id, array(
                'wpautop'       => true,
                'textarea_name' => $option_name . "[$id]", //нужно указывать!
            ));
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'checkbox':
            $checked = ($o[$id] == 'on') ? " checked='checked'" :  '';
            echo "<label><input type='checkbox' id='$id' name='" . $option_name . "[$id]' $checked /> ";
            echo ($desc != '') ? $desc : "";
            echo "</label>";
            break;
        case 'select':
            echo "<select id='$id' name='" . $option_name . "[$id]'>";
            foreach($vals as $v=>$l){
                $selected = ($o[$id] == $v) ? "selected='selected'" : '';
                echo "<option value='$v' $selected>$l</option>";
            }
            echo ($desc != '') ? $desc : "";
            echo "</select>";
            break;
        case 'radio':
            echo "<fieldset>";
            foreach($vals as $v=>$l){
                $checked = ($o[$id] == $v) ? "checked='checked'" : '';
                echo "<label><input type='radio' name='" . $option_name . "[$id]' value='$v' $checked />$l</label><br />";
            }
            echo "</fieldset>";
            break;
    }
}

/*
 * Функция проверки правильности вводимых полей
 */
function siteparams_validate($input) {
    foreach($input as $k => $v) {
        $valid_input[$k] = trim($v);

        /* Вы можете включить в эту функцию различные проверки значений, например
        if(! задаем условие ) { // если не выполняется
            $valid_input[$k] = ''; // тогда присваиваем значению пустую строку
        }
        */
    }
    return $valid_input;
}

function labels_for_post_type($name) {
    return array(
        'name' => $name,
        'add_new' => 'Добавить запись',
        'all_items' => 'Все записи',
        'menu_name' => $name
    );
}

function args_for_post_type($labels, $menu_position, $supports) {
return array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_template_directory_uri() . '/img/icons/favicon16.png', // иконка в меню
        'menu_position' => $menu_position,
    'supports' => $supports
    );
}

function questions__register_post_type() {
    $labels = labels_for_post_type('Помогу по вопросам');
    $args = args_for_post_type($labels, 1, array('title'));
    register_post_type('questions', $args);
}

function banks__register_post_type() { 
    $labels = labels_for_post_type('Сотрудничество с банками');
    $args = args_for_post_type($labels, 1, array('title'));
    register_post_type('banks', $args);
}

function reviews__register_post_type() { 
    $labels = labels_for_post_type('Отзывы');
    $args = args_for_post_type($labels, 1, array('title'));
    register_post_type('reviews', $args);
}

function articles__register_post_type() { 
    $labels = labels_for_post_type('Статьи');
    $args = args_for_post_type($labels, 1, array('title'));
    register_post_type('articles', $args);
}

function certs__register_post_type() { 
    $labels = labels_for_post_type('Сертификаты');
    $args = args_for_post_type($labels, 1, array('title'));
    register_post_type('certs', $args);
}

function register_styles() {
    wp_register_style('riel66', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('riel66');
}

function register_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js');
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script ( 'bundle.js', get_template_directory_uri() . '/assets/js/bundle.js', array(), '', true);
    wp_enqueue_script( 'fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array( 'jquery' ));
    wp_enqueue_script( 'jquery.mask.js', '//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js', array( 'jquery' ));
}    

function filter_paragraphs($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="sect__content__paragraph">', $content);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

add_action('admin_menu', 'admin_remove_menus');
add_action('admin_head', 'admin_hide_order_infoblock');

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts' );

add_action('init', 'questions__register_post_type' );
add_action('init', 'banks__register_post_type' );
add_action('init', 'reviews__register_post_type' );
add_action('init', 'articles__register_post_type' );
add_action('init', 'certs__register_post_type' );

add_filter('the_content', 'filter_paragraphs');

?>
