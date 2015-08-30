<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('contact.index');
	}

	/**
	 * Send an email and redirect to the contact page
	 * @param $request
	 */
	public function store(ContactRequest $request)
	{
        \Mail::send('emails.contact', $request->all(), function($message) use ($request)
        {
            $message
                ->to(env('MAIL_TO_ADDRESS'), env('MAIL_TO_NAME'))
                ->replyTo($request->email, $request->name)
                ->subject('Contacto web');
        });

        return redirect()
            ->route('contact.index')
            ->withSuccess('Su consulta ha sido enviada con éxito.');
	}

}
