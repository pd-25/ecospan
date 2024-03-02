<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Exception;

class ContactusController extends Controller
{
    public function send(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:191',
                'email' => 'required|email|max:191',
                'phone' => 'required|numeric|digits:10',
                'message' => 'required|string',
            ]);

            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            );

            try {
                Mail::to(['info@ecospan.in', 'admin@ecospan.com'])->send(new SendMail($data));

                session()->flash('alert-success', 'Thanks for Contacting Us!');

            } catch (Exception $e) {
                session()->flash('alert-danger', $e->getMessage());
            }

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());

        }
        return back();
    }
}
