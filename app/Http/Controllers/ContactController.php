<?php

namespace App\Http\Controllers;


use App\Forms\ContactForm;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $form = $this->form(new ContactForm());
        return view('pages.contact', [
            'form' => $form
        ]);
    }

    public function sendMail(Request $request) {
        $form = $this->form(new ContactForm());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $identite = $form->repository()->getFieldByName('identite')->getValue();
            $email = $form->repository()->getFieldByName('email')->getValue();
            $content = $form->repository()->getFieldByName('message')->getValue();
            Mail::to('abrador.daryl@gmail.com')->send(new ContactMail($identite, $email, $content));
            return redirect()->back();
        }

        return view('pages.contact', [
            'form' => $form
        ]);
    }
}
