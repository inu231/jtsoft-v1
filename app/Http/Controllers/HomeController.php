<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'JT Soft | Home';
        return view('pages.new-home', ['title' => $title]);
    }

    /**
     * Mostra a página Sobre
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $title = 'JT Soft | Sobre';
        return view('pages.sobre', ['title' => $title]);
    }

    /**
     * Mostra a página de serviços
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function services()
    {
        $title = 'JT Soft | Serviços';
        return view('pages.services', ['title' => $title]);
    }

    /**
     * Mostra o portfolio
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function portfolio()
    {
        $title = 'JT Soft | Portfolio';
        return view('pages.portfolio', ['title' => $title]);
    }

    /**
     *  Mostra a página de contatos
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View     *
     */
    public function contact()
    {
        $title = 'JT Soft | Contato';
        return view('pages.contact', ['title' => $title]);
    }

    public function sendMail(Request $request)
    {
        $order = 1;
        $email = $request->get('email');
        $name = $request->get('name');
        $subject = $request->get('subject');
        $message = $request->get('message');

        $data = [
            'order' => $order,
            'email' => $email,
            'name' => $name,
            'subject' => $subject,
            'message' => $message,
        ];

        $appEmail = 'jtsoft.inc@gmail.com';

        $mailed = Mail::send('pages.emails.sendmail', ['data' => $data], function ($message) use ($appEmail, $subject, $name, $order,  $email) {
            if($message->to($appEmail, $name)->subject($subject));
        });

        return $mailed ? 'Email enviado com sucesso!' : 'Erro. Email não pode ser enviado.';

    }
}
