<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Disability;
use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale() === 'pt-br' ? 'pt' : app()->getLocale();
        $disabilities = Disability::where('status', 'AT')->orderBy('id')->get();

        return view('pages.contact', compact('disabilities', 'lang'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'txtNome' => 'required|string|max:200',
            'txtMail' => 'required|email|max:150',
            'full_number' => 'nullable|string|max:50',
            'rdoPcd' => 'required|in:S,N',
            'cmbPcd' => 'nullable|required_if:rdoPcd,S|exists:disabilities,id',
            'txtApoio' => 'nullable|string|max:200',
            'txtAssunto' => 'nullable|string|max:50',
            'txtMensagem' => 'nullable|string',
        ]);

        $isPcd = $validated['rdoPcd'] === 'S';
        $disabilityId = $isPcd ? ($validated['cmbPcd'] ?? 99) : 99;

        $contact = Contact::create([
            'name' => $validated['txtNome'],
            'email' => $validated['txtMail'],
            'phone' => $validated['full_number'] ?? null,
            'is_pcd' => $isPcd,
            'disability_id' => $disabilityId,
            'accessibility_support' => $validated['txtApoio'] ?? null,
            'subject' => $validated['txtAssunto'] ?? null,
            'message' => $validated['txtMensagem'] ?? null,
        ]);

        try {
            Mail::to('paradesporto.acessivel@gmail.com')->send(new ContactMessageMail($contact));
            return redirect()->route('home')->with('success', __('messages.msgOk'));
        } catch (\Exception $e) {
            return back()->with('error', __('messages.msgErro'))->withInput();
        }
    }
}
