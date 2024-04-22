<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Catat aktivitas pengguna ke dalam database
        $user = Auth::user(); // Mendapatkan pengguna yang sedang aktif

        UserActivity::create([
            'user_id' => $user->id, // Jika Anda menggunakan autentikasi
            'user_name' => $user->name, // Catat nama pengguna
            'activity' => $this->getActivity($request),
            'resource' => $request->path(),
            'table' => $request->get('table'), // Dapatkan nama tabel dari URI atau data request
            'performed_at' => now(), // Catat waktu aktivitas
        ]);

        return $response;
    }

    protected function getActivity($request)
    {
        $user = Auth::user();
        $activity = '';

        if ($request->is('login')) {
            $activity = 'Logged in';
        } elseif ($request->is('logout')) {
            $activity = 'Logged out';
        } elseif ($request->isMethod('post')) {
            $activity = 'Added';
        } elseif ($request->isMethod('put') || $request->isMethod('patch')) {
            $activity = 'Updated';
        } elseif ($request->isMethod('delete')) {
            $activity = 'Deleted';
        }

        // Menambahkan detail pesan log berdasarkan aksi yang dilakukan
        if ($activity) {

            $changes = ''; // Detail perubahan data

            if ($activity === 'Added') {
                $changes = 'Data: '.json_encode($request->all());
            } elseif ($activity === 'Updated') {
                $changes = 'Changes: '.json_encode($request->all());
            } elseif ($activity === 'Deleted') {
                $changes = 'Data: '.json_encode($request->all());
            }

            return "$user->name $activity $changes";
        }

        return 'Performed an unknown activity';
    }

}
