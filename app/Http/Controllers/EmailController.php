<?php

namespace App\Http\Controllers;

use App\Imports\EmailImport;
use App\Mail\CertificateToExpire;
use App\Mail\EmailMessage;
use App\Mail\ExpiredCertificate;
use App\Models\Email;
use Carbon\Carbon;
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
        $emails = Email::where('status', 'loaded')->get();



        foreach ($emails as $email){

                if ($email->expiring_date < Carbon::now()){
                    Mail::to($email->email)->send(new ExpiredCertificate($email));
                } else {
                    Mail::to($email->email)->send(new CertificateToExpire($email));
                }

                $email->update([
                    'status' => 'sent'
                ]);

        }


        return redirect()->route('send-emails.index')->with('success', 'Correos enviados!');
    }

    public function deleteEmail(){
        $emails = Email::all();
        foreach ($emails as $email){
            if ($email->status == 'sent'){
                $email->delete();
            }
        }

        return redirect()->route('send-emails.index')->with('success', 'Regidtros eliminados correctamente');
    }

}
