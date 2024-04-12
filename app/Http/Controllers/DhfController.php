<?php

namespace App\Http\Controllers;

use App\Models\Dhf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DhfController extends Controller
{
    public function index()
    {
        $title = 'CP DHF Page';

        $datas = Dhf::orderBy('created_at', 'desc')->get();

        return view('pages.dhf.main', compact('datas', 'title'));
    }

    public function add()
    {
        $title = 'Add CP DHF';

        $func = 'add';

        return view('pages.dhf.add', compact('func', 'title'));
    }

    public function store(Request $request)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            'hari_penyakit',
            'asesment_igd',
            'asesment_spesialis',
            'asesment_perawat',
            'lab_darah',
            'lab_NS',
            'lab_DBT',
            'lab_ur',
            'radio_thorax',
            'radio_USG',
            'konsultasi',
            'ases_DPJP',
            'ases_nonDPJP',
            'ases_PPJ',
            'ases_gizi',
            'ases_resep',
            'ases_obat',
            'diagnosa_medis',
            'diagnosa_akut',
            'diagnosa_hiper',
            'diagnosa_mual',
            'diagnosa_cairan',
            'diagnosa_gizi',
            'displan_aktiv',
            'displan_terapi',
            'displan_diet',
            'displan_dengue',
            'edukasi_diagnosis',
            'edukasi_terapi',
            'edukasi_consent',
            'edukasi_gizi',
            'edukasi_hipertermia',
            'edukasi_nyeri',
            'edukasi_cairan',
            'edukasi_hidup',
            'edukasi_info',
            'edukasi_konseling',
            'lembar_edukasi',
            'injeksi_parasetamol',
            'injeksi_ranitidin',
            'injeksi_NaCl',
            'injeksi_koloid',
            'oral_paracetamol',
            'oral_varian',
            'transfusi',
            'intervensi_medika',
            'intervensi_nyeri',
            'intervensi_demam',
            'intervensi_cairan',
            'intervensi_infus',
            'intervensi_tetp',
            'intervensi_dpjp',
            'monev_dpjp',
            'monev_perdarahan',
            'monev_vital',
            'monev_hidrasi',
            'monev_lab',
            'monev_nyeri',
            'monev_nutrisi',
            'monev_makanan',
            'monev_antropometri',
            'monev_interaksi',
            'monev_efek',
            'monev_terapi',
            'mob_medis',
            'mob_keperawatan',
            'mob_fisio',
            'hasil_demam',
            'hasil_trombosit',
            'hasil_nyeri',
            'hasil_hipertermi',
            'hasil_komplikasi',
            'hasil_vital',
            'hasil_mual',
            'hasil_asupan',
            'hasil_status',
            'hasil_terapi',
            'hasil_obat',
            'pulang_normal',
            'pulang_NOC',
            'pulang_varian',
            'rencana_resume',
            'rencana_penjelasan',
            'rencana_surat',
        ];


        // Inisialisasi string kosong untuk setiap tabel
        $tableValues = [];

        // Loop untuk setiap kolom
        foreach ($columns as $column) {
            // Ambil nilai dari request atau gunakan nilai default jika tidak tersedia
            $columnValues = $request->$column ?? []; // Default value []

            // Periksa apakah $columnValues tidak kosong
            if (!empty($columnValues)) {
                // Inisialisasi string kosong untuk setiap kolom
                $columnString = '';

                // Loop untuk setiap nilai dalam kolom
                foreach ($columnValues as $index => $value) {
                    // Tambahkan index dan nilai ke dalam string
                    $columnString .= ($index + 1) . ', ';
                }

                // Hapus koma terakhir dari string
                $columnString = rtrim($columnString, ', ');

                // Tambahkan string kolom ke dalam array tabel
                $tableValues[$column] = $columnString;
            }
        }

        $stringKodeICD = '';

        for ($i = 0; $i < 6; $i++) {
            if ($request->has('kode_icd') && isset($request->kode_icd[$i])) {
                $stringKodeICD .= ($i + 1) . ':' . ($request->kode_icd[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringKodeICD = rtrim($stringKodeICD, ', ');

        // Menyimpan dalam variabel
        $kodeICDResult = $stringKodeICD;

        if ($request->has('kode_icd')) {
            $request->merge(['kode_icd' => $kodeICDResult]);
        }

        $stringTindakan = '';

        for ($i = 0; $i < 2; $i++) {
            if ($request->has('tindakan') && isset($request->tindakan[$i])) {
                $stringTindakan .= ($i + 1) . ':' . ($request->tindakan[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringTindakan = rtrim($stringTindakan, ', ');

        // Menyimpan dalam variabel
        $tindakanResult = $stringTindakan;

        if ($request->has('tindakan')) {
            $request->merge(['tindakan' => $tindakanResult]);
        }

        foreach ($columns as $data) {
            if ($request->has($data)) {
                $request->merge([$data => $tableValues[$data]]);
            }
        }

        // dd($request);

        $validator = Validator::make($request->all(), [
            "noReg" => "string",
            "nama" => "nullable|string",
            "jenis_kelamin" => "nullable|string",
            "tanggal_lahir" => "nullable|string",
            "diagnosa" => "nullable|string",
            "penyakit_utama" => "nullable|string",
            "penyakit_penyerta" => "nullable|string",
            "komplikasi" => "nullable|string",
            "tindakan" => "nullable|string",
            "berat_badan" => "nullable|string",
            "tinggi_badan" => "nullable|string",
            "tanggal_masuk" => "nullable|string",
            "tanggal_keluar" => "nullable|string",
            "kode_icd" => "nullable|string",
            "jam_masuk" => "nullable|string",
            "jam_keluar" => "nullable|string",
            "lama_rawat" => "nullable|string",
            "rencana_rawat" => "nullable|string",
            "rawat_kelas" => "nullable|string",
            "rujukan" => "nullable|string",
            "hari_penyakit" => "nullable|string",
            "asesment_igd" => "nullable|string",
            "catatan_asesDokIgd" => "nullable|string",
            "asesment_spesialis" => "nullable|string",
            "catatan_asesDokSpe" => "nullable|string",
            "asesment_perawat" => "nullable|string",
            "catatan_asesPer" => "nullable|string",
            "lab_darah" => "nullable|string",
            "catatan_labDar" => "nullable|string",
            "lab_NS" => "nullable|string",
            "catatan_labNS" => "nullable|string",
            "lab_DBT" => "nullable|string",
            "catatan_labDBT" => "nullable|string",
            "lab_ur" => "nullable|string",
            "catatan_labUr" => "nullable|string",
            "radio_thorax" => "nullable|string",
            "catatan_radTho" => "nullable|string",
            "radio_USG" => "nullable|string",
            "catatan_radUSG" => "nullable|string",
            "konsultasi" => "nullable|string",
            "catatan_konsul" => "nullable|string",
            "ases_DPJP" => "nullable|string",
            "catatan_asesDPJP" => "nullable|string",
            "ases_nonDPJP" => "nullable|string",
            "catatan_asesNonDPJP" => "nullable|string",
            "ases_PPJ" => "nullable|string",
            "catatan_asesPPJ" => "nullable|string",
            "ases_gizi" => "nullable|string",
            "catatan_asesGizi" => "nullable|string",
            "ases_resep" => "nullable|string",
            "catatan_asesResep" => "nullable|string",
            "ases_obat" => "nullable|string",
            "diagnosa_medis" => "nullable|string",
            "catatan_diagMedis" => "nullable|string",
            "diagnosa_akut" => "nullable|string",
            "catatan_diagAkut" => "nullable|string",
            "diagnosa_hiper" => "nullable|string",
            "diagnosa_mual" => "nullable|string",
            "diagnosa_cairan" => "nullable|string",
            "diagnosa_gizi" => "nullable|string",
            "catatan_diagGizi" => "nullable|string",
            "displan_aktiv" => "nullable|string",
            "catatan_disPlanAk" => "nullable|string",
            "displan_terapi" => "nullable|string",
            "displan_diet" => "nullable|string",
            "displan_dengue" => "nullable|string",
            "edukasi_diagnosis" => "nullable|string",
            "catatan_emedDiag" => "nullable|string",
            "edukasi_terapi" => "nullable|string",
            "edukasi_consent" => "nullable|string",
            "edukasi_gizi" => "nullable|string",
            "catatan_egiz" => "nullable|string",
            "edukasi_hipertermia" => "nullable|string",
            "catatan_ekepHiper" => "nullable|string",
            "edukasi_nyeri" => "nullable|string",
            "catatan_ekepNyeri" => "nullable|string",
            "edukasi_cairan" => "nullable|string",
            "catatan_ekepCair" => "nullable|string",
            "edukasi_hidup" => "nullable|string",
            "catatan_ekepHidup" => "nullable|string",
            "edukasi_info" => "nullable|string",
            "catatan_efarmInf" => "nullable|string",
            "edukasi_konseling" => "nullable|string",
            "catatan_efarmKons" => "nullable|string",
            "lembar_edukasi" => "nullable|string",
            "catatan_lemEdTer" => "nullable|string",
            "injeksi_parasetamol" => "nullable|string",
            "catatan_injectPara" => "nullable|string",
            "injeksi_ranitidin" => "nullable|string",
            "catatan_injectRanit" => "nullable|string",
            "injeksi_NaCl" => "nullable|string",
            "catatan_infusNaCl" => "nullable|string",
            "injeksi_koloid" => "nullable|string",
            "catatan_infusKoloid" => "nullable|string",
            "oral_paracetamol" => "nullable|string",
            "catatan_oralPara" => "nullable|string",
            "oral_varian" => "nullable|string",
            "catatan_oralVarian" => "nullable|string",
            "transfusi" => "nullable|string",
            "catatan_transfusi" => "nullable|string",
            "intervensi_medika" => "nullable|string",
            "catatan_tatmedMedika" => "nullable|string",
            "intervensi_nyeri" => "nullable|string",
            "catatan_tatkepNyeri" => "nullable|string",
            "intervensi_demam" => "nullable|string",
            "intervensi_cairan" => "nullable|string",
            "intervensi_infus" => "nullable|string",
            "intervensi_tetp" => "nullable|string",
            "catatan_tatgiziTETP" => "nullable|string",
            "intervensi_dpjp" => "nullable|string",
            "catatan_tatfarmDPJP" => "nullable|string",
            "monev_dpjp" => "nullable|string",
            "catatan_monevDPJP" => "nullable|string",
            "monev_perdarahan" => "nullable|string",
            "catatan_monevkepPerdarah" => "nullable|string",
            "monev_vital" => "nullable|string",
            "monev_hidrasi" => "nullable|string",
            "monev_lab" => "nullable|string",
            "monev_nyeri" => "nullable|string",
            "monev_nutrisi" => "nullable|string",
            "monev_makanan" => "nullable|string",
            "catatan_monevgiziMakanan" => "nullable|string",
            "monev_antropometri" => "nullable|string",
            "monev_interaksi" => "nullable|string",
            "catatan_monevfarmInteraksi" => "nullable|string",
            "monev_efek" => "nullable|string",
            "monev_terapi" => "nullable|string",
            "mob_medis" => "nullable|string",
            "catatan_mobmed" => "nullable|string",
            "mob_keperawatan" => "nullable|string",
            "mob_fisio" => "nullable|string",
            "hasil_demam" => "nullable|string",
            "catatan_hasmedDemam" => "nullable|string",
            "hasil_trombosit" => "nullable|string",
            "catatan_hasmedTrombosit" => "nullable|string",
            "hasil_nyeri" => "nullable|string",
            "catatan_haskepNyeri" => "nullable|string",
            "hasil_hipertermi" => "nullable|string",
            "hasil_komplikasi" => "nullable|string",
            "hasil_vital" => "nullable|string",
            "hasil_mual" => "nullable|string",
            "hasil_asupan" => "nullable|string",
            "catatan_hasgiziAsupan" => "nullable|string",
            "hasil_status" => "nullable|string",
            "hasil_terapi" => "nullable|string",
            "catatan_hasfarmInd" => "nullable|string",
            "hasil_obat" => "nullable|string",
            "pulang_normal" => "nullable|string",
            "catatan_pulangNormal" => "nullable|string",
            "pulang_NOC" => "nullable|string",
            "pulang_varian" => "nullable|string",
            "catatan_pulangVarian" => "nullable|string",
            "rencana_resume" => "nullable|string",
            "catatan_rencanaResume" => "nullable|string",
            "rencana_penjelasan" => "nullable|string",
            "rencana_surat" => "nullable|string",
            "tanggal_laporan" => "nullable|string",
            "nama_dokter" => "nullable|string",
            "ttd_dokter" => "nullable|string",
            "nama_perawat" => "nullable|string",
            "ttd_perawat" => "nullable|string",
            "nama_pelaksana" => "nullable|string",
            "ttd_pelaksana" => "nullable|string",
        ]);

        $validatedData = $validator->validated();

        // dd($validator);

        // Hasil

        Dhf::create($validatedData);

        return redirect('/dhf')->with('success', 'Data added successfully!');
    }

    public function modify($cmd, $id)
    {
        $data = Dhf::findOrFail($id);

        $kode_icd = explode(', ', $data->kode_icd);

        $arr_kode_icd = [];

        foreach ($kode_icd as $item) {
            list($key, $value) = explode(':', $item);
            $arr_kode_icd[trim($key)] = trim($value);
        }

        $tindakan = explode(', ', $data->tindakan);

        $arr_tindakan = [];

        foreach ($tindakan as $item) {
            list($key, $value) = explode(':', $item);
            $arr_tindakan[trim($key)] = trim($value);
        }

        $columns = [
            'hari_penyakit',
            'asesment_igd',
            'asesment_spesialis',
            'asesment_perawat',
            'lab_darah',
            'lab_NS',
            'lab_DBT',
            'lab_ur',
            'radio_thorax',
            'radio_USG',
            'konsultasi',
            'ases_DPJP',
            'ases_nonDPJP',
            'ases_PPJ',
            'ases_gizi',
            'ases_resep',
            'ases_obat',
            'diagnosa_medis',
            'diagnosa_akut',
            'diagnosa_hiper',
            'diagnosa_mual',
            'diagnosa_cairan',
            'diagnosa_gizi',
            'displan_aktiv',
            'displan_terapi',
            'displan_diet',
            'displan_dengue',
            'edukasi_diagnosis',
            'edukasi_terapi',
            'edukasi_consent',
            'edukasi_gizi',
            'edukasi_hipertermia',
            'edukasi_nyeri',
            'edukasi_cairan',
            'edukasi_hidup',
            'edukasi_info',
            'edukasi_konseling',
            'lembar_edukasi',
            'injeksi_parasetamol',
            'injeksi_ranitidin',
            'injeksi_NaCl',
            'injeksi_koloid',
            'oral_paracetamol',
            'oral_varian',
            'transfusi',
            'intervensi_medika',
            'intervensi_nyeri',
            'intervensi_demam',
            'intervensi_cairan',
            'intervensi_infus',
            'intervensi_tetp',
            'intervensi_dpjp',
            'monev_dpjp',
            'monev_perdarahan',
            'monev_vital',
            'monev_hidrasi',
            'monev_lab',
            'monev_nyeri',
            'monev_nutrisi',
            'monev_makanan',
            'monev_antropometri',
            'monev_interaksi',
            'monev_efek',
            'monev_terapi',
            'mob_medis',
            'mob_keperawatan',
            'mob_fisio',
            'hasil_demam',
            'hasil_trombosit',
            'hasil_nyeri',
            'hasil_hipertermi',
            'hasil_komplikasi',
            'hasil_vital',
            'hasil_mual',
            'hasil_asupan',
            'hasil_status',
            'hasil_terapi',
            'hasil_obat',
            'pulang_normal',
            'pulang_NOC',
            'pulang_varian',
            'rencana_resume',
            'rencana_penjelasan',
            'rencana_surat',
        ];

        foreach ($columns as $column) {
            $data[$column] = explode(', ', $data->$column);
        }

        // dd($data->hari_penyakit);

        if ($cmd === 'show') {
            $title = 'Displaying CP DHF';

            return view('pages.dhf.show', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else if ($cmd === 'edit') {
            $title = 'Editing CP DHF';

            return view('pages.dhf.edit', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            'hari_penyakit',
            'asesment_igd',
            'asesment_spesialis',
            'asesment_perawat',
            'lab_darah',
            'lab_NS',
            'lab_DBT',
            'lab_ur',
            'radio_thorax',
            'radio_USG',
            'konsultasi',
            'ases_DPJP',
            'ases_nonDPJP',
            'ases_PPJ',
            'ases_gizi',
            'ases_resep',
            'ases_obat',
            'diagnosa_medis',
            'diagnosa_akut',
            'diagnosa_hiper',
            'diagnosa_mual',
            'diagnosa_cairan',
            'diagnosa_gizi',
            'displan_aktiv',
            'displan_terapi',
            'displan_diet',
            'displan_dengue',
            'edukasi_diagnosis',
            'edukasi_terapi',
            'edukasi_consent',
            'edukasi_gizi',
            'edukasi_hipertermia',
            'edukasi_nyeri',
            'edukasi_cairan',
            'edukasi_hidup',
            'edukasi_info',
            'edukasi_konseling',
            'lembar_edukasi',
            'injeksi_parasetamol',
            'injeksi_ranitidin',
            'injeksi_NaCl',
            'injeksi_koloid',
            'oral_paracetamol',
            'oral_varian',
            'transfusi',
            'intervensi_medika',
            'intervensi_nyeri',
            'intervensi_demam',
            'intervensi_cairan',
            'intervensi_infus',
            'intervensi_tetp',
            'intervensi_dpjp',
            'monev_dpjp',
            'monev_perdarahan',
            'monev_vital',
            'monev_hidrasi',
            'monev_lab',
            'monev_nyeri',
            'monev_nutrisi',
            'monev_makanan',
            'monev_antropometri',
            'monev_interaksi',
            'monev_efek',
            'monev_terapi',
            'mob_medis',
            'mob_keperawatan',
            'mob_fisio',
            'hasil_demam',
            'hasil_trombosit',
            'hasil_nyeri',
            'hasil_hipertermi',
            'hasil_komplikasi',
            'hasil_vital',
            'hasil_mual',
            'hasil_asupan',
            'hasil_status',
            'hasil_terapi',
            'hasil_obat',
            'pulang_normal',
            'pulang_NOC',
            'pulang_varian',
            'rencana_resume',
            'rencana_penjelasan',
            'rencana_surat',
        ];

        // Inisialisasi string kosong untuk setiap tabel
        $tableValues = [];

        // Loop untuk setiap kolom
        foreach ($columns as $column) {
            // Ambil nilai dari request atau gunakan nilai default jika tidak tersedia
            $columnValues = $request->$column ?? []; // Default value []

            // Periksa apakah $columnValues tidak kosong
            if (!empty($columnValues)) {
                // Inisialisasi string kosong untuk setiap kolom
                $columnString = '';

                // Loop untuk setiap nilai dalam kolom
                foreach ($columnValues as $index => $value) {
                    // Tambahkan index dan nilai ke dalam string
                    $columnString .= ($index + 1) . ', ';
                }

                // Hapus koma terakhir dari string
                $columnString = rtrim($columnString, ', ');

                // Tambahkan string kolom ke dalam array tabel
                $tableValues[$column] = $columnString;
            } else {
                $tableValues[$column] = null;
            }
        }

        // dd($tableValues);

        $stringKodeICD = '';

        for ($i = 0; $i < 6; $i++) {
            if ($request->has('kode_icd') && isset($request->kode_icd[$i])) {
                $stringKodeICD .= ($i + 1) . ':' . ($request->kode_icd[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringKodeICD = rtrim($stringKodeICD, ', ');

        // Menyimpan dalam variabel
        $kodeICDResult = $stringKodeICD;

        if ($request->has('kode_icd')) {
            $request->merge(['kode_icd' => $kodeICDResult]);
        }

        $stringTindakan = '';

        for ($i = 0; $i < 2; $i++) {
            if ($request->has('tindakan') && isset($request->tindakan[$i])) {
                $stringTindakan .= ($i + 1) . ':' . ($request->tindakan[$i] ?? '-') . ', ';
            }
        }

        // Menghapus koma dan spasi ekstra di akhir string
        $stringTindakan = rtrim($stringTindakan, ', ');

        // Menyimpan dalam variabel
        $tindakanResult = $stringTindakan;

        if ($request->has('tindakan')) {
            $request->merge(['tindakan' => $tindakanResult]);
        }

        foreach ($columns as $data) {
            $request->merge([$data => $tableValues[$data]]);
        }

        // dd($request);

        $validator = Validator::make($request->all(), [
            "noReg" => "string",
            "nama" => "nullable|string",
            "jenis_kelamin" => "nullable|string",
            "tanggal_lahir" => "nullable|string",
            "diagnosa" => "nullable|string",
            "penyakit_utama" => "nullable|string",
            "penyakit_penyerta" => "nullable|string",
            "komplikasi" => "nullable|string",
            "tindakan" => "nullable|string",
            "berat_badan" => "nullable|string",
            "tinggi_badan" => "nullable|string",
            "tanggal_masuk" => "nullable|string",
            "tanggal_keluar" => "nullable|string",
            "kode_icd" => "nullable|string",
            "jam_masuk" => "nullable|string",
            "jam_keluar" => "nullable|string",
            "lama_rawat" => "nullable|string",
            "rencana_rawat" => "nullable|string",
            "rawat_kelas" => "nullable|string",
            "rujukan" => "nullable|string",
            "hari_penyakit" => "nullable|string",
            "asesment_igd" => "nullable|string",
            "catatan_asesDokIgd" => "nullable|string",
            "asesment_spesialis" => "nullable|string",
            "catatan_asesDokSpe" => "nullable|string",
            "asesment_perawat" => "nullable|string",
            "catatan_asesPer" => "nullable|string",
            "lab_darah" => "nullable|string",
            "catatan_labDar" => "nullable|string",
            "lab_NS" => "nullable|string",
            "catatan_labNS" => "nullable|string",
            "lab_DBT" => "nullable|string",
            "catatan_labDBT" => "nullable|string",
            "lab_ur" => "nullable|string",
            "catatan_labUr" => "nullable|string",
            "radio_thorax" => "nullable|string",
            "catatan_radTho" => "nullable|string",
            "radio_USG" => "nullable|string",
            "catatan_radUSG" => "nullable|string",
            "konsultasi" => "nullable|string",
            "catatan_konsul" => "nullable|string",
            "ases_DPJP" => "nullable|string",
            "catatan_asesDPJP" => "nullable|string",
            "ases_nonDPJP" => "nullable|string",
            "catatan_asesNonDPJP" => "nullable|string",
            "ases_PPJ" => "nullable|string",
            "catatan_asesPPJ" => "nullable|string",
            "ases_gizi" => "nullable|string",
            "catatan_asesGizi" => "nullable|string",
            "ases_resep" => "nullable|string",
            "catatan_asesResep" => "nullable|string",
            "ases_obat" => "nullable|string",
            "diagnosa_medis" => "nullable|string",
            "catatan_diagMedis" => "nullable|string",
            "diagnosa_akut" => "nullable|string",
            "catatan_diagAkut" => "nullable|string",
            "diagnosa_hiper" => "nullable|string",
            "diagnosa_mual" => "nullable|string",
            "diagnosa_cairan" => "nullable|string",
            "diagnosa_gizi" => "nullable|string",
            "catatan_diagGizi" => "nullable|string",
            "displan_aktiv" => "nullable|string",
            "catatan_disPlanAk" => "nullable|string",
            "displan_terapi" => "nullable|string",
            "displan_diet" => "nullable|string",
            "displan_dengue" => "nullable|string",
            "edukasi_diagnosis" => "nullable|string",
            "catatan_emedDiag" => "nullable|string",
            "edukasi_terapi" => "nullable|string",
            "edukasi_consent" => "nullable|string",
            "edukasi_gizi" => "nullable|string",
            "catatan_egiz" => "nullable|string",
            "edukasi_hipertermia" => "nullable|string",
            "catatan_ekepHiper" => "nullable|string",
            "edukasi_nyeri" => "nullable|string",
            "catatan_ekepNyeri" => "nullable|string",
            "edukasi_cairan" => "nullable|string",
            "catatan_ekepCair" => "nullable|string",
            "edukasi_hidup" => "nullable|string",
            "catatan_ekepHidup" => "nullable|string",
            "edukasi_info" => "nullable|string",
            "catatan_efarmInf" => "nullable|string",
            "edukasi_konseling" => "nullable|string",
            "catatan_efarmKons" => "nullable|string",
            "lembar_edukasi" => "nullable|string",
            "catatan_lemEdTer" => "nullable|string",
            "injeksi_parasetamol" => "nullable|string",
            "catatan_injectPara" => "nullable|string",
            "injeksi_ranitidin" => "nullable|string",
            "catatan_injectRanit" => "nullable|string",
            "injeksi_NaCl" => "nullable|string",
            "catatan_infusNaCl" => "nullable|string",
            "injeksi_koloid" => "nullable|string",
            "catatan_infusKoloid" => "nullable|string",
            "oral_paracetamol" => "nullable|string",
            "catatan_oralPara" => "nullable|string",
            "oral_varian" => "nullable|string",
            "catatan_oralVarian" => "nullable|string",
            "transfusi" => "nullable|string",
            "catatan_transfusi" => "nullable|string",
            "intervensi_medika" => "nullable|string",
            "catatan_tatmedMedika" => "nullable|string",
            "intervensi_nyeri" => "nullable|string",
            "catatan_tatkepNyeri" => "nullable|string",
            "intervensi_demam" => "nullable|string",
            "intervensi_cairan" => "nullable|string",
            "intervensi_infus" => "nullable|string",
            "intervensi_tetp" => "nullable|string",
            "catatan_tatgiziTETP" => "nullable|string",
            "intervensi_dpjp" => "nullable|string",
            "catatan_tatfarmDPJP" => "nullable|string",
            "monev_dpjp" => "nullable|string",
            "catatan_monevDPJP" => "nullable|string",
            "monev_perdarahan" => "nullable|string",
            "catatan_monevkepPerdarah" => "nullable|string",
            "monev_vital" => "nullable|string",
            "monev_hidrasi" => "nullable|string",
            "monev_lab" => "nullable|string",
            "monev_nyeri" => "nullable|string",
            "monev_nutrisi" => "nullable|string",
            "monev_makanan" => "nullable|string",
            "catatan_monevgiziMakanan" => "nullable|string",
            "monev_antropometri" => "nullable|string",
            "monev_interaksi" => "nullable|string",
            "catatan_monevfarmInteraksi" => "nullable|string",
            "monev_efek" => "nullable|string",
            "monev_terapi" => "nullable|string",
            "mob_medis" => "nullable|string",
            "catatan_mobmed" => "nullable|string",
            "mob_keperawatan" => "nullable|string",
            "mob_fisio" => "nullable|string",
            "hasil_demam" => "nullable|string",
            "catatan_hasmedDemam" => "nullable|string",
            "hasil_trombosit" => "nullable|string",
            "catatan_hasmedTrombosit" => "nullable|string",
            "hasil_nyeri" => "nullable|string",
            "catatan_haskepNyeri" => "nullable|string",
            "hasil_hipertermi" => "nullable|string",
            "hasil_komplikasi" => "nullable|string",
            "hasil_vital" => "nullable|string",
            "hasil_mual" => "nullable|string",
            "hasil_asupan" => "nullable|string",
            "catatan_hasgiziAsupan" => "nullable|string",
            "hasil_status" => "nullable|string",
            "hasil_terapi" => "nullable|string",
            "catatan_hasfarmInd" => "nullable|string",
            "hasil_obat" => "nullable|string",
            "pulang_normal" => "nullable|string",
            "catatan_pulangNormal" => "nullable|string",
            "pulang_NOC" => "nullable|string",
            "pulang_varian" => "nullable|string",
            "catatan_pulangVarian" => "nullable|string",
            "rencana_resume" => "nullable|string",
            "catatan_rencanaResume" => "nullable|string",
            "rencana_penjelasan" => "nullable|string",
            "rencana_surat" => "nullable|string",
            "tanggal_laporan" => "nullable|string",
            "nama_dokter" => "nullable|string",
            "ttd_dokter" => "nullable|string",
            "nama_perawat" => "nullable|string",
            "ttd_perawat" => "nullable|string",
            "nama_pelaksana" => "nullable|string",
            "ttd_pelaksana" => "nullable|string",
        ]);

        $validatedData = $validator->validated();

        // dd($validatedData);

        if ($validator->fails()) {
            $errors = implode(', ', $validator->errors()->all());
            return back()->with('error', $errors)->withInput();
        }

        // Hasil

        try {
            if (Dhf::where('id', $id)->update($validatedData)) {
                return redirect('/dhf')->with('success', 'Data updated successfully!');
            } else {
                throw new \Exception('Data is not updated!');
            }
        } catch (\Exception $e) {
            return redirect('/dhf')->with('error', $e->getMessage());
        }

    }

    public function delete($id)
    {
        $data = Dhf::findOrFail($id);

        $data->delete();

        return back()->with('success', 'Data deleted sucessfully!');
    }
}
