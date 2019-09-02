<? 

    namespace validate {

        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');

        const REQUIRED = 'required', MIN_LENGTH = 'minLength',
              MAX_LENGTH = 'maxLength', MASK = 'mask';

        function handler($fields) {

            $form = file_get_contents('./callback-form.json');
            $form = json_decode($form, true);

            foreach($fields as $field_name => $field_params) {

                $field_value = $fields[$field_name];
                $field_check = $form[$field_name];  // needed format of field

                if (empty($field_value)) {
                    return json_encode([ "error" => "Пустые поля" ]);
                }

                if (isset($field_check[MIN_LENGTH])
                && mb_strlen($field_value) < $field_check[MIN_LENGTH]) {

                    return json_encode([
                        "error" => "Меньше " . $field_check[MIN_LENGTH] . " смв."
                    ]);

                }

                if (isset($field_check[MAX_LENGTH])
                && mb_strlen($field_value) > $field_check[MAX_LENGTH]) {

                    return json_encode([
                        "error" => "Больше " . $field_check[MAX_LENGTH] . " смв."
                    ]);

                }

                if (isset($field_check[MASK])
                && !preg_match($field_check[MASK], $field_value)) {
                    return json_encode(["error" => "Неверный формат поля", "field" => $field_name]);
                }

            }

            return json_encode([
                "msg" => "Спасибо, заявка получена. Ожидайте звонка"
            ]);

        }

        echo handler([
            "name" => $_POST['name'],
            "phone" => $_POST['phone']
        ]);

    }

