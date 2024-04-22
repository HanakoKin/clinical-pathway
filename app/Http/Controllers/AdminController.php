<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function index()
    {

        $title = 'User Control Page';

        $users = User::orderBy('created_at', 'desc')->get();

        $totals = $users->count();

        return view('pages.admin.user', compact('title', 'users', 'totals'));
    }

    public function add()
    {

        $title = 'Add new User';

        return view('pages.admin.addUser', compact('title'));
    }

    public function store(Request $request): RedirectResponse
    {

        // dd($request);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            $errors = implode(', ', $validator->errors()->all());
            return back()->with('error', $errors)->withInput();
        }

        $validatedData = $validator->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        return redirect()->route('user.index')->with('success', 'User created successfully!');
    }

    public function update(Request $request, $id)
    {
        $oldEmail = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255',
                $request->email == $oldEmail->email ? '' : Rule::unique(User::class)
            ],
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = implode(', ', $validator->errors()->all());
            return back()->with('error', $errors)->withInput();
        }

        $validatedData = $validator->validated();

        User::where('id', $id)->update($validatedData);

        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {

        $user = User::findOrFail($id);

        if (Auth::user()->role !== 'admin') {
            return redirect('/dashboard')->with('error', 'UNAUTHORIZED ACTION');
        }
        // Hapus data User
        $user->delete();

        return back()->with('success', 'User deleted successfully!');
    }

    public function log(){

        $title = 'User Log Page';

        $logs = UserActivity::orderBy('created_at', 'desc')->get();

        $totals = $logs->count();

        return view('pages.admin.log.log', compact('title', 'logs', 'totals'));

    }

}
