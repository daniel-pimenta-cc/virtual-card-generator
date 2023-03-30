<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VirtualCard;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;


class VirtualCardController extends Controller
{
    //
    public function create()
    {
        return view('virtual_card.create');
    }

    public function store(Request $request)
    {
        // Defnine validation rules
        $rules = [
            'name' => 'required',
            'title' => 'required',
            'link_git' => 'required|url|regex:/^https:\/\/github.com\/[a-zA-Z0-9]/',
            'link_linkedin' => 'required|url|regex:/https:\/\/www\.linkedin\.com\/in\/[a-zA-Z0-9_-]+\/?/',
            'description' => 'max:255',
        ];

        // Define error messages
        $messages = [
            'name.required' => 'O campo name é obrigatório',
            'title.required' => 'O campo título é obrigatório',
            'link_git.required' => 'O campo link do GitHub é obrigatório',
            'link_git.url' => 'O link do GitHub deve ser uma URL válida',
            'link_git.regex' => 'O link do GitHub deve ser do formato https://github.com/usuario',
            'link_linkedin.required' => 'O campo link do LinkedIn é obrigatório',
            'link_linkedin.url' => 'O link do LinkedIn deve ser uma URL válida',
            'link_linkedin.regex' => 'O link do LinkedIn deve ser do formato https://www.linkedin.com/in/usuario',
            'description.max' => 'A descrição deve ter no máximo 255 caracteres',
        ];

        // Create the Validator object with the rules and messages defined
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if there were any errors in the validation
        if ($validator->fails()) {
            // If there are errors, redirect back to the form with the errors and the input values
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = VirtualCard::create([
                'name' => $request->name,
                'title' => $request->title,
                'link_git' => $request->link_git,
                'link_linkedin' => $request->link_linkedin,
                'description' => $request->description,
            ]);
        } catch (QueryException $e) {
            // Captures the unique field exception and returns to the previous page with the error message
            $errorMessage = 'Este nome já está em uso';
            return redirect()->back()->withErrors(['name' => $errorMessage])->withInput();
        }

        return view('qr', ['user' => $user]);
    }

    public function show(VirtualCard $cartaoVirtual)
    {
        return view('virtual_card.show', compact('cartaoVirtual'));
    }
}
