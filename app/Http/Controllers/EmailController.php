<?php

namespace App\Http\Controllers;

use App\Imports\EmailImport;
use App\Mail\EmailMessage;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;


class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::all();
        return view('send-emails', compact('emails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file_excel' => 'required|mimes:xlsx,xls'
        ]);

        $file = $request->file('file_excel');
        Excel::import(new EmailImport, $file);

        return redirect()->route('send-emails.index')->with('success', 'Archivo cargado exitosamente!');
    }

    public function sendEmail()
    {
        $emails = Email::all();
        foreach ($emails as $email){
        Mail::to($email->email)->send(new EmailMessage($email));
        }


        redirect()->back();
    }

}
