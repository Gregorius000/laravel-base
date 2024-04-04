<?php

namespace App\Http\Controllers;

use App\Service\MailService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(
        protected MailService $mail
    ) {  
    }

    public function coba()
    {
        $this->mail->send();
    }

    public function testing() 
    {
        echo "Ini function testing";
    }

    public function beranda()
    {
        echo "Ini adalah beranda admin";
    }
}
