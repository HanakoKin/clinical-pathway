<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        if($validator->fails()){
            $errors = implode(', ', $validator->errors()->all());

            return back()->with('error', $errors)->withInput();
        }

        $request->user()->update([
            'password' => Hash::make($validator['password']),
        ]);

        return back()->with('success', 'Password updated successfully');
    }
}
