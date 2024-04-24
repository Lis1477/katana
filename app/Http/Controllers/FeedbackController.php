<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function postIndex(Request $request) {
        $name = strip_tags(htmlspecialchars($request->name));
        $email = strip_tags(htmlspecialchars($request->email));
        $theme = strip_tags(htmlspecialchars($request->theme));
        $text = strip_tags(htmlspecialchars($request->text));

        $title = "сообщение из ФОРМЫ ОБРАТНОЙ СВЯЗИ сайта KATANA.BY!";
        $body = "
<div>
    <p>Имя: <strong>$name</strong></p>
    <p>E-mail: <strong>$email</strong></p>
    <p>Тема: <strong>$theme</strong></p>
    <p>Сообщение:<br><strong>$text</strong></p>
</div>            
        ";

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: 1252626@alfagrad.com\r\n";

        $mailing = mail('1252626@alfagrad.com', $title, $body, $headers);

   		if($mailing) {
            $note = "<strong>Уважаемый(ая) {$name}!</strong><br><br>Ваше сообщение отправлено!<br>Очень скоро мы свяжемся с Вами для уточнения деталей.";
        } else {
            $note = "Упс... Что-то пошло не так!<br><br>Попробуйте еще раз.";
        }

   		return redirect()->back()->with(['note' => $note]);
    }
}
