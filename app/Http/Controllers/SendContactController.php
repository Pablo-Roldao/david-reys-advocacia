<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentContactRepository;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class SendContactController extends Controller
{

    public function sendContact(Request $request)
    {
        $mail = new PHPMailer(true);

        $name = $request['name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $message = $request['message'];

        try {
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->SMTPAuth = true;
            $mail->Username = 'contatosite@davidreysadvocacia.com.br';
            $mail->Password = 'D@vidreys1';

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'email-ssl.com.br';
            $mail->Port = 465;
            $mail->setFrom('contatosite@davidreysadvocacia.com.br', $name);
            $mail->addAddress(EloquentContactRepository::get()->getEmail(), 'David Reys Advocacia');
            $mail->isHTML(true);
            $mail->Subject = 'Contato de ' . $name;
            $mail->Body = '<p><strong>Nome: </strong>' . $name . '</p><br/><p><strong>Telefone: </strong>' . $phone . '<p><br/><strong>E-mail: </strong>' . $email . '</p><br/><p><strong>Mensagem: </strong>' . $message . '<p>';
            $mail->AltBody = 'Nome: ' . $name . '      Telefone: ' . $phone . '      E-mail: ' . $email . '      Mensagem: ' . $message . '<p>';
            $mail->send();
            echo "<script>
        alert('Mensagem enviada!');
        window.location.href='/';
        </script>";
        } catch (Exception $e) {
            echo "<script>
        alert('A mensagem não pôde ser enviada! Erro: {$mail->ErrorInfo}');
        window.location.href='/';
        </script>";
        }

    }

}
