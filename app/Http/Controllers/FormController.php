<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Form;

class FormController extends Controller
{
    private const FORM_DATA_KEY = 'inquiry.form';

    public function show()
    {
        return view('index');
    }

    public function confirm(ClientRequest $request)
    {
        $form_data = $request->validated();
        $request->session()->put(self::FORM_DATA_KEY, $form_data);

        return view('thanks', $form_data);
    }
}