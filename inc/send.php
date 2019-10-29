<?php
add_action( 'wp_ajax_applicant', 'applicant');
add_action( 'wp_ajax_nopriv_applicant', 'applicant');

function applicant(){
    $message = '';
    $form_subject = $_POST['form_subject'] ? $_POST['form_subject'] : 'Повідомлення з квіз Безпеки';
    $c = true;

    if( !empty( $_POST ) ) {
        foreach ( $_POST as $key => $value ) {
            if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" && $key != "action") {
                $message .= "
                " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
                <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
                <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
              </tr>
              ";
            }
        }
    }

    // Mail
    $to = 'madara.prog@gmail.com';//bohdan.webdeluxe@gmail.com,
    $subject = $form_subject;
    $headers  = "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: info@{$_SERVER['HTTP_HOST']}\n";
    wp_mail( $to, $subject, $message, $headers );

    // Telegram
    $token = "746278511:AAGf5SAqJG7mEGzoDJLXA3Z8ERW_LCttqVY";
    $chat_ids = ["667322034", "567420635"];

    function clean($data){
        return htmlspecialchars( esc_attr( str_replace( array('<br>', '<span>', '</span>'), ' ', $_POST[$data] ) ) );
    }

    $data_form = array(
        "Встановлення системи в " => clean('rooms-one'),
        "Варіант "                => clean('version-two'),
        "Тип системи "            => clean('type-three'),
        "Ім`я "                   => clean('name'),
        "Телефон "                => clean('phone'),
        "E-mail "                 => clean('email'),
        "Тарифний план "          => clean('taryf'),
        "Місто "                  => clean('city-five'),
        "Додаткова опція "        => clean('option-six'),
        "Вибраний подарунок "     => clean('prize-seven')
    );
    
    if( !empty($data_form) ) {
        foreach( $data_form as $key => $value ) {
           if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "action") {
                $txt .= "<b>". $key . "</b> - " . $value ."%0A";
            }
        }
    }
    
    foreach ($chat_ids as $chat_id) {
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    }

    wp_die();
}