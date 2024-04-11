<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;

class FormController extends Controller
{
    public function showForm()
    {
        return view('welcome');
    }


    public function submitForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'mobile' => 'required|numeric|digits:10',
            'file' => 'required|image|mimes:jpeg|max:500'
        ]);

        // Save form data to the database
        $formData = new Users();
        $formData->name = $request->name;
        $formData->email = $request->email;
        $formData->mobile = $request->mobile;
        $formData->password = $request->password;
        $formData->message = $request->message;
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $formData->file = $fileName;
        $formData->save();

        // Send email
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => $request->password,
            'message' => $request->message,
            'attachment' => 'uploads/' . $fileName,
        ];
        Mail::to($request->email)->send(new FormSubmitted($mailData));
        return redirect()->back()->with('success', 'We have received a form from your end.');
    }
}
