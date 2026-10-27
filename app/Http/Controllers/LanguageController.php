<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $lang = $request->input('lang');

        if (in_array($lang, ['pt-br', 'en', 'es'])) {
            session(['locale' => $lang]);
        }

        return response()->json(['success' => true]);
    }
}
