<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function search(Request $request)
    {

        $noReg = $request->input('noReg');

        $headers = [
            'Content-Type' => 'application/json',
            'ConsId' => 'husadati@gmail.com',
            'SecretKey' => 'husadaTI.123',
            'Authorization' => $request->header('Authorization'), // Ambil token dari header permintaan
        ];

        $api1Response = Http::withHeaders($headers)->get("http://10.1.10.7:6070/BipubApi/api/Reg/$noReg")->json();

        $informasiPasien = [];

        if (isset($api1Response['status']) && $api1Response['status'] === 'success') {

            // Ambil informasi dari API Pertama
            $informasiPasien['pasienId'] = $api1Response['data']['pasienId'];
            $informasiPasien['regDate'] = date('d-m-Y', strtotime($api1Response['data']['regDate']));
            $informasiPasien['regTime'] = $api1Response['data']['regTime'];
            $informasiPasien['regOutDate'] = date('d-m-Y', strtotime($api1Response['data']['regOutDate']));
            $informasiPasien['regOutTime'] = $api1Response['data']['regOutTime'];
            $informasiPasien['pasienName'] = $api1Response['data']['pasienName'];
            $informasiPasien['penjamin'] = $api1Response['data']['tipeJaminanName'];

            // Gunakan cURL atau Guzzle untuk mengakses API Kedua
            $api2Response = Http::withHeaders($headers)->get("http://10.1.10.7:6070/BipubApi/api/Pasien/{$api1Response['data']['pasienId']}")->json();

            // Periksa apakah nomor pasien ditemukan di API Kedua
            if (isset($api2Response['status']) && $api2Response['status'] === 'success') {

                // Ambil informasi dari API Kedua
                $informasiPasien['gender'] = $api2Response['data']['gender'];
                $informasiPasien['birthDate'] = date('d-m-Y', strtotime($api2Response['data']['birthDate']));

                // Gender 0 untuk perempuan, 1 untuk laki-laki
                if ($informasiPasien['gender'] == 0){
                    $informasiPasien['gender'] = 'Perempuan';
                } else {
                    $informasiPasien['gender'] = 'Laki-laki';
                }

                $tanggalMasuk = Carbon::parse($informasiPasien['regDate']);
                $tanggalKeluar = Carbon::parse($informasiPasien['regOutDate']);
                $jamMasuk = Carbon::parse($informasiPasien['regTime']);
                $jamKeluar = Carbon::parse($informasiPasien['regOutTime']);

                $diffTanggal = $tanggalMasuk->diff($tanggalKeluar);
                $diffWaktu = $jamMasuk->diff($jamKeluar);

                $tahun = $diffTanggal->y;
                $bulan = $diffTanggal->m;
                $hari = $diffTanggal->d;

                $jam = $diffWaktu->h;
                $menit = $diffWaktu->i;
                // $detik = $diffWaktu->s;

                if($hari > 0){
                    if($tahun > 0){
                        $informasiPasien['lamaRawat'] = "$tahun Tahun, $bulan Bulan, $hari Hari";
                    } else if($bulan > 0){
                        $informasiPasien['lamaRawat'] = "$bulan Bulan, $hari Hari";
                    } else{
                        $informasiPasien['lamaRawat'] = "$hari Hari";
                    }
                } else {
                    $informasiPasien['lamaRawat'] = "$jam Jam, $menit Menit";
                }

                // Hitung umur dari tanggal lahir
                // $tanggalLahir = Carbon::parse($api2Response['data']['birthDate']);
                // $diff = $tanggalLahir->diff(Carbon::now());

                // $tahun = $diff->y;
                // $bulan = $diff->m;
                // $hari = $diff->d;

                // $informasiPasien['umur'] = "$tahun Tahun, $bulan Bulan, $hari Hari";

                // Kirim data ke tampilan
                return response()->json($informasiPasien);
            } else {
                // Handle jika nomor pasien tidak ditemukan di API Kedua
                return response()->json(['error' => 'Nomor pasien tidak ditemukan'], 404);
            }
        } else {
            // Handle jika nomor registrasi tidak ditemukan di API Pertama
            return response()->json(['error' => 'Nomor registrasi tidak ditemukan'], 404);
        }
    }
}
