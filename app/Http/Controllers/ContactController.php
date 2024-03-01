<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\EmailGabo;
use Illuminate\Http\Request;

class ContactController extends Controller{

    public function index(){
        return view("groceries.contact");
    }

    public function store(Request $request){
        if ($request->isMethod('post')){
            $request->validate([
                'fullname' => 'required',
                'email' => 'required|email|max:50',
                'message' => 'required',
            ],[
                'fullname.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'message.required' => 'Favor de escribir el mensaje.',
            ]);
            $contact = new Contact();
            $contact->fullname = $request->input('fullname');
            $contact->email = $request->input('email');
            $contact->message = $request->input('message');
            $contact->save();

            $mailContent = [
                'name' => $contact->fullname,
                'email' => $contact->email,
                'message' => $contact->message
            ];
            
            Mail::to('19031333@itcelaya.edu.mx')->send(new EmailGabo($mailContent));
            
            return redirect()->route('contact.index')->with('success', 'You message has been sent.');
        }
    }

    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
