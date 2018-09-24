<?php

namespace App\Controllers;

use App\Models\Article;
use App\Libraries\View;
use App\Libraries\Mail;

class PageController
{
    public function index()
    {
        $articles = Article::all();
        View::render('pages/index', compact('articles'));
    }

    public function about()
    {
        View::render('pages/about');
    }

    public function contact()
    {
        if($_SERVER['REQUEST_METHOD']== 'POST')
        {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = htmlentities(trim($_POST['message']));
            $inputs = compact('name','email','message');

            if ($name == '')
            {
                 $this->contactWitchError('El campo nombre es obligatorio',$inputs);
            }
            elseif ($email == '')
            {
                $this->contactWitchError('El campo email es obligatorio',$inputs);
            }
            elseif ($message == '')
            {
                $this->contactWitchError('El campo mensaje es obligatorio',$inputs);
            }
            $mail = new Mail();

            if(!$mail->validateAddress($email))
            {
                $this->contactWitchError('El  email ingresado no es valido', $inputs);
            }
            $mail->sendFrom(ED_MAIL['AddressFrom'], ED_MAIL['NameFrom']);
            $mail->addAddress(ED_MAIL['AddressIndox'], ED_MAIL['NameInbox']);
            $mail->isHTML(true);

            $mail->Subject = "mensaje: {$name} <{$email}>";
            $mail->Body = \nl2br($message);

            if($mail->send())
            {
                View::render('pages/success');
            }
           else
           {
            $this->contactWitchError('El mensaje no pudo se enviado'. $mail->ErrorInfo, $inputs);
           }
        }
        else
        {
            View::render('pages/contact');
        }
       
    }

    private function contactWitchError($errorMessage, array $variables =[])
    {
        $variables['errorMessage'] = $errorMessage;
        View::render('pages/contact', $variables);
    }
}
