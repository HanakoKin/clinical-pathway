<?php

namespace App\Http\Controllers;

use App\Models\Kemoterapi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KemoterapiController extends Controller
{
    public function index()
    {
        $title = 'CP Kemoterapi Mammae Page';

        $datas = Kemoterapi::orderBy('created_at', 'desc')->get();

        return view('pages.kemoterapi.main', compact('datas', 'title'));
    }

    public function add()
    {
        $title = 'Add CP Kemoterapi Mammae';

        $func = 'add';

        return view('pages.kemoterapi.add', compact('func', 'title'));
    }

    public function store(Request $request)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_primer",
            "lab_darah",
            "lab_elektrolit",
            "lab_ureum",
            "radio_foto",
            "radio_USG",
            "varian_pato",
            "varian_ekg",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_nausea",
            "diagnosa_gangguan",
            "diagnosa_ansietas",
            "diagnosa_nyeri",
            "diagnosa_intoleransi",
            "diagnosa_adekuat",
            "diagnosa_malnutrisi",
            "displan_kondisi",
            "displan_kemoterapi",
            "displan_obat",
            "displan_tatalaksana",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_keluarga",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "tindakan_prekemo",
            "tindakan_kemp",
            "tindakan_postkemo",
            "terapi_omeprazole",
            "terapi_curcuma",
            "terapi_ondansetron",
            "intervensi_medika",
            "intervensi_nyeri",
            "intervensi_energi",
            "intervensi_mual",
            "intervensi_ansietas",
            "intervensi_citra",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_mual",
            "monev_nutrisi",
            "monev_nyeri",
            "monev_ADL",
            "monev_makanan",
            "monev_antropometri",
            "monev_efektiv",
            "monev_interaksi",
            "monev_efek",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_medis",
            "hasil_vital",
            "hasil_mual",
            "hasil_nyeri",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
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

        $validator = Validator::make($request->all(), [
            "noReg" => 'string',
            "nama" => 'nullable|string',
            "jenis_kelamin" => 'nullable|string',
            "tanggal_lahir" => 'nullable|string',
            "diagnosa" => 'nullable|string',
            "penyakit_utama" => 'nullable|string',
            "penyakit_penyerta" => 'nullable|string',
            "komplikasi" => 'nullable|string',
            "tindakan" => 'nullable|string',
            "berat_badan" => 'nullable|string',
            "tinggi_badan" => 'nullable|string',
            "tanggal_masuk" => 'nullable|string',
            "tanggal_keluar" => 'nullable|string',
            "kode_icd" => 'nullable|string',
            "jam_masuk" => 'nullable|string',
            "jam_keluar" => 'nullable|string',
            "lama_rawat" => 'nullable|string',
            "rencana_rawat" => 'nullable|string',
            "rawat_kelas" => 'nullable|string',
            "rujukan" => 'nullable|string',
            "hari_penyakit" => 'nullable|string',
            "asesment_igd" => 'nullable|string',
            "catatan_asesDokIgd" => 'nullable|string',
            "asesment_spesialis" => 'nullable|string',
            "catatan_asesDokSpe" => 'nullable|string',
            "asesment_primer" => 'nullable|string',
            "catatan_asesPer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "catatan_labDarah" => 'nullable|string',
            "lab_elektrolit" => 'nullable|string',
            "catatan_labElektrolit" => 'nullable|string',
            "lab_ureum" => 'nullable|string',
            "catatan_labUreum" => 'nullable|string',
            "radio_foto" => 'nullable|string',
            "catatan_radFoto" => 'nullable|string',
            "radio_USG" => 'nullable|string',
            "catatan_radUSG" => 'nullable|string',
            "varian_pato" => 'nullable|string',
            "catatan_varPato" => 'nullable|string',
            "varian_ekg" => 'nullable|string',
            "catatan_varEkg" => 'nullable|string',
            "konsultasi" => 'nullable|string',
            "catatan_konsul" => 'nullable|string',
            "ases_DPJP" => 'nullable|string',
            "catatan_asesDPJP" => 'nullable|string',
            "ases_nonDPJP" => 'nullable|string',
            "catatan_asesNonDPJP" => 'nullable|string',
            "ases_PPJ" => 'nullable|string',
            "catatan_asesPPJ" => 'nullable|string',
            "ases_gizi" => 'nullable|string',
            "catatan_asesGizi" => 'nullable|string',
            "ases_resep" => 'nullable|string',
            "catatan_asesResep" => 'nullable|string',
            "ases_obat" => 'nullable|string',
            "diagnosa_medis" => 'nullable|string',
            "catatan_diagChemotherapy" => 'nullable|string',
            "diagnosa_nausea" => 'nullable|string',
            "catatan_diagNausea" => 'nullable|string',
            "diagnosa_gangguan" => 'nullable|string',
            "diagnosa_ansietas" => 'nullable|string',
            "diagnosa_nyeri" => 'nullable|string',
            "diagnosa_intoleransi" => 'nullable|string',
            "diagnosa_adekuat" => 'nullable|string',
            "catatan_diagAdekuat" => 'nullable|string',
            "diagnosa_malnutrisi" => 'nullable|string',
            "displan_kondisi" => 'nullable|string',
            "catatan_disPlanKondisi" => 'nullable|string',
            "displan_kemoterapi" => 'nullable|string',
            "displan_obat" => 'nullable|string',
            "displan_tatalaksana" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "catatan_emedDiag" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "catatan_egiz" => 'nullable|string',
            "edukasi_keluarga" => 'nullable|string',
            "catatan_ekepKeluarga" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "catatan_efarmInf" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "catatan_lemEdTer" => 'nullable|string',
            "tindakan_prekemo" => 'nullable|string',
            "catatan_tindakanPreKemo" => 'nullable|string',
            "tindakan_kemp" => 'nullable|string',
            "catatan_tindakanKemo" => 'nullable|string',
            "tindakan_postkemo" => 'nullable|string',
            "catatan_tindakanPostKemo" => 'nullable|string',
            "terapi_omeprazole" => 'nullable|string',
            "catatan_terapiOmeprazole" => 'nullable|string',
            "terapi_curcuma" => 'nullable|string',
            "catatan_terapiCurcuma" => 'nullable|string',
            "terapi_ondansetron" => 'nullable|string',
            "catatan_terapiOndansetron" => 'nullable|string',
            "intervensi_medika" => 'nullable|string',
            "catatan_tatmedMedika" => 'nullable|string',
            "intervensi_nyeri" => 'nullable|string',
            "catatan_tatkepNyeri" => 'nullable|string',
            "intervensi_energi" => 'nullable|string',
            "intervensi_mual" => 'nullable|string',
            "intervensi_ansietas" => 'nullable|string',
            "intervensi_citra" => 'nullable|string',
            "intervensi_gizi" => 'nullable|string',
            "catatan_tatgizi" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "catatan_tatfarmDPJP" => 'nullable|string',
            "monev_dpjp" => 'nullable|string',
            "catatan_monevDPJP" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "catatan_monevkepVital" => 'nullable|string',
            "monev_mual" => 'nullable|string',
            "monev_nutrisi" => 'nullable|string',
            "monev_nyeri" => 'nullable|string',
            "monev_ADL" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "catatan_monevgiziMakanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "catatan_monevgiziAntropometri" => 'nullable|string',
            "monev_efektiv" => 'nullable|string',
            "catatan_monevfarmEfektiv" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "catatan_mobmed" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_medis" => 'nullable|string',
            "catatan_hasilMedis" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "catatan_haskepVital" => 'nullable|string',
            "hasil_mual" => 'nullable|string',
            "catatan_haskepMual" => 'nullable|string',
            "hasil_nyeri" => 'nullable|string',
            "catatan_haskepNyeri" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "catatan_hasgiziAsupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "catatan_hasgiziTerapi" => 'nullable|string',
            "hasil_rasional" => 'nullable|string',
            "pulang_umum" => 'nullable|string',
            "catatan_pulangUmum" => 'nullable|string',
            "pulang_khusus" => 'nullable|string',
            "rencana_resume" => 'nullable|string',
            "catatan_rencanaResume" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_surat" => 'nullable|string',
            "tanggal_laporan" => 'nullable|string',
            "nama_dokter" => 'nullable|string',
            "ttd_dokter" => 'nullable|string',
            "nama_perawat" => 'nullable|string',
            "ttd_perawat" => 'nullable|string',
        ]);

        $validatedData = $validator->validated();

        // dd($validator);

        // Hasil

        Kemoterapi::create($validatedData);

        return redirect('/kemoterapi')->with('success', 'Data added successfully!');
    }

    public function modify($cmd, $id)
    {
        $data = Kemoterapi::findOrFail($id);

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
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_primer",
            "lab_darah",
            "lab_elektrolit",
            "lab_ureum",
            "radio_foto",
            "radio_USG",
            "varian_pato",
            "varian_ekg",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_nausea",
            "diagnosa_gangguan",
            "diagnosa_ansietas",
            "diagnosa_nyeri",
            "diagnosa_intoleransi",
            "diagnosa_adekuat",
            "diagnosa_malnutrisi",
            "displan_kondisi",
            "displan_kemoterapi",
            "displan_obat",
            "displan_tatalaksana",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_keluarga",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "tindakan_prekemo",
            "tindakan_kemp",
            "tindakan_postkemo",
            "terapi_omeprazole",
            "terapi_curcuma",
            "terapi_ondansetron",
            "intervensi_medika",
            "intervensi_nyeri",
            "intervensi_energi",
            "intervensi_mual",
            "intervensi_ansietas",
            "intervensi_citra",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_mual",
            "monev_nutrisi",
            "monev_nyeri",
            "monev_ADL",
            "monev_makanan",
            "monev_antropometri",
            "monev_efektiv",
            "monev_interaksi",
            "monev_efek",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_medis",
            "hasil_vital",
            "hasil_mual",
            "hasil_nyeri",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
        ];

        foreach ($columns as $column) {
            $data[$column] = explode(', ', $data->$column);
        }

        // dd($data->hari_penyakit);

        if ($cmd === 'show') {
            $title = 'Displaying CP Kemoterapi Mammae';

            return view('pages.kemoterapi.show', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else if ($cmd === 'edit') {
            $title = 'Editing CP Kemoterapi Mammae';

            return view('pages.kemoterapi.edit', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_primer",
            "lab_darah",
            "lab_elektrolit",
            "lab_ureum",
            "radio_foto",
            "radio_USG",
            "varian_pato",
            "varian_ekg",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_nausea",
            "diagnosa_gangguan",
            "diagnosa_ansietas",
            "diagnosa_nyeri",
            "diagnosa_intoleransi",
            "diagnosa_adekuat",
            "diagnosa_malnutrisi",
            "displan_kondisi",
            "displan_kemoterapi",
            "displan_obat",
            "displan_tatalaksana",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_keluarga",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "tindakan_prekemo",
            "tindakan_kemp",
            "tindakan_postkemo",
            "terapi_omeprazole",
            "terapi_curcuma",
            "terapi_ondansetron",
            "intervensi_medika",
            "intervensi_nyeri",
            "intervensi_energi",
            "intervensi_mual",
            "intervensi_ansietas",
            "intervensi_citra",
            "intervensi_gizi",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_vital",
            "monev_mual",
            "monev_nutrisi",
            "monev_nyeri",
            "monev_ADL",
            "monev_makanan",
            "monev_antropometri",
            "monev_efektiv",
            "monev_interaksi",
            "monev_efek",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_medis",
            "hasil_vital",
            "hasil_mual",
            "hasil_nyeri",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_rasional",
            "pulang_umum",
            "pulang_khusus",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
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

        $validator = Validator::make($request->all(), [
            "noReg" => 'string',
            "nama" => 'nullable|string',
            "jenis_kelamin" => 'nullable|string',
            "tanggal_lahir" => 'nullable|string',
            "diagnosa" => 'nullable|string',
            "penyakit_utama" => 'nullable|string',
            "penyakit_penyerta" => 'nullable|string',
            "komplikasi" => 'nullable|string',
            "tindakan" => 'nullable|string',
            "berat_badan" => 'nullable|string',
            "tinggi_badan" => 'nullable|string',
            "tanggal_masuk" => 'nullable|string',
            "tanggal_keluar" => 'nullable|string',
            "kode_icd" => 'nullable|string',
            "jam_masuk" => 'nullable|string',
            "jam_keluar" => 'nullable|string',
            "lama_rawat" => 'nullable|string',
            "rencana_rawat" => 'nullable|string',
            "rawat_kelas" => 'nullable|string',
            "rujukan" => 'nullable|string',
            "hari_penyakit" => 'nullable|string',
            "asesment_igd" => 'nullable|string',
            "catatan_asesDokIgd" => 'nullable|string',
            "asesment_spesialis" => 'nullable|string',
            "catatan_asesDokSpe" => 'nullable|string',
            "asesment_primer" => 'nullable|string',
            "catatan_asesPer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "catatan_labDarah" => 'nullable|string',
            "lab_elektrolit" => 'nullable|string',
            "catatan_labElektrolit" => 'nullable|string',
            "lab_ureum" => 'nullable|string',
            "catatan_labUreum" => 'nullable|string',
            "radio_foto" => 'nullable|string',
            "catatan_radFoto" => 'nullable|string',
            "radio_USG" => 'nullable|string',
            "catatan_radUSG" => 'nullable|string',
            "varian_pato" => 'nullable|string',
            "catatan_varPato" => 'nullable|string',
            "varian_ekg" => 'nullable|string',
            "catatan_varEkg" => 'nullable|string',
            "konsultasi" => 'nullable|string',
            "catatan_konsul" => 'nullable|string',
            "ases_DPJP" => 'nullable|string',
            "catatan_asesDPJP" => 'nullable|string',
            "ases_nonDPJP" => 'nullable|string',
            "catatan_asesNonDPJP" => 'nullable|string',
            "ases_PPJ" => 'nullable|string',
            "catatan_asesPPJ" => 'nullable|string',
            "ases_gizi" => 'nullable|string',
            "catatan_asesGizi" => 'nullable|string',
            "ases_resep" => 'nullable|string',
            "catatan_asesResep" => 'nullable|string',
            "ases_obat" => 'nullable|string',
            "diagnosa_medis" => 'nullable|string',
            "catatan_diagChemotherapy" => 'nullable|string',
            "diagnosa_nausea" => 'nullable|string',
            "catatan_diagNausea" => 'nullable|string',
            "diagnosa_gangguan" => 'nullable|string',
            "diagnosa_ansietas" => 'nullable|string',
            "diagnosa_nyeri" => 'nullable|string',
            "diagnosa_intoleransi" => 'nullable|string',
            "diagnosa_adekuat" => 'nullable|string',
            "catatan_diagAdekuat" => 'nullable|string',
            "diagnosa_malnutrisi" => 'nullable|string',
            "displan_kondisi" => 'nullable|string',
            "catatan_disPlanKondisi" => 'nullable|string',
            "displan_kemoterapi" => 'nullable|string',
            "displan_obat" => 'nullable|string',
            "displan_tatalaksana" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "catatan_emedDiag" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "catatan_egiz" => 'nullable|string',
            "edukasi_keluarga" => 'nullable|string',
            "catatan_ekepKeluarga" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "catatan_efarmInf" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "catatan_lemEdTer" => 'nullable|string',
            "tindakan_prekemo" => 'nullable|string',
            "catatan_tindakanPreKemo" => 'nullable|string',
            "tindakan_kemp" => 'nullable|string',
            "catatan_tindakanKemo" => 'nullable|string',
            "tindakan_postkemo" => 'nullable|string',
            "catatan_tindakanPostKemo" => 'nullable|string',
            "terapi_omeprazole" => 'nullable|string',
            "catatan_terapiOmeprazole" => 'nullable|string',
            "terapi_curcuma" => 'nullable|string',
            "catatan_terapiCurcuma" => 'nullable|string',
            "terapi_ondansetron" => 'nullable|string',
            "catatan_terapiOndansetron" => 'nullable|string',
            "intervensi_medika" => 'nullable|string',
            "catatan_tatmedMedika" => 'nullable|string',
            "intervensi_nyeri" => 'nullable|string',
            "catatan_tatkepNyeri" => 'nullable|string',
            "intervensi_energi" => 'nullable|string',
            "intervensi_mual" => 'nullable|string',
            "intervensi_ansietas" => 'nullable|string',
            "intervensi_citra" => 'nullable|string',
            "intervensi_gizi" => 'nullable|string',
            "catatan_tatgizi" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "catatan_tatfarmDPJP" => 'nullable|string',
            "monev_dpjp" => 'nullable|string',
            "catatan_monevDPJP" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "catatan_monevkepVital" => 'nullable|string',
            "monev_mual" => 'nullable|string',
            "monev_nutrisi" => 'nullable|string',
            "monev_nyeri" => 'nullable|string',
            "monev_ADL" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "catatan_monevgiziMakanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "catatan_monevgiziAntropometri" => 'nullable|string',
            "monev_efektiv" => 'nullable|string',
            "catatan_monevfarmEfektiv" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "catatan_mobmed" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_medis" => 'nullable|string',
            "catatan_hasilMedis" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "catatan_haskepVital" => 'nullable|string',
            "hasil_mual" => 'nullable|string',
            "catatan_haskepMual" => 'nullable|string',
            "hasil_nyeri" => 'nullable|string',
            "catatan_haskepNyeri" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "catatan_hasgiziAsupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "catatan_hasgiziTerapi" => 'nullable|string',
            "hasil_rasional" => 'nullable|string',
            "pulang_umum" => 'nullable|string',
            "catatan_pulangUmum" => 'nullable|string',
            "pulang_khusus" => 'nullable|string',
            "rencana_resume" => 'nullable|string',
            "catatan_rencanaResume" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_surat" => 'nullable|string',
            "tanggal_laporan" => 'nullable|string',
            "nama_dokter" => 'nullable|string',
            "ttd_dokter" => 'nullable|string',
            "nama_perawat" => 'nullable|string',
            "ttd_perawat" => 'nullable|string',
        ]);

        // dd($validator);

        $validatedData = $validator->validated();

        if ($validator->fails()) {
            $errors = implode(', ', $validator->errors()->all());
            return back()->with('error', $errors)->withInput();
        }

        // dd($validator);

        // Hasil

        Kemoterapi::where('id', $id)->update($validatedData);

        return redirect('/kemoterapi')->with('success', 'Data updated successfully!');
    }

    public function delete($id)
    {
        $data = Kemoterapi::findOrFail($id);

        $data->delete();

        return back()->with('success', 'Data deleted sucessfully!');
    }
}
