<?php

namespace App\Http\Controllers;

use App\Models\Diare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DiareController extends Controller
{
    public function index()
    {
        $title = 'CP Diare Akut pada Anak Page';

        $datas = Diare::orderBy('created_at', 'desc')->get();

        return view('pages.diare.main', compact('datas', 'title'));
    }

    public function add()
    {
        $title = 'Add CP Diare Akut pada Anak';

        $func = 'add';

        return view('pages.diare.add', compact('func', 'title'));
    }

    public function store(Request $request)
    {

        // dd($request);

        // Array yang berisi nama kolom dan nilai default
        $columns = [
            "hari_penyakit",
            "asesment_igd",
            "asesment_spesialis",
            "asesment_perawat",
            "lab_darah",
            "lab_feses",
            "lab_GDS",
            "lab_varian",
            "radiologi",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_diare",
            "diagnosa_cairan",
            "diagnosa_elektrolit",
            "diagnosa_nutrisi",
            "diagnosa_akut",
            "diagnosa_hiper",
            "diagnosa_kulit",
            "diagnosa_gizi",
            "displan_rumah",
            "displan_terapi",
            "displan_hygiene",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_hygiene",
            "edukasi_makanan",
            "edukasi_perianal",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_ceftriaxon",
            "injeksi_Parasetamol",
            "injeksi_NaCl",
            "oral_dompridon",
            "oral_zinc",
            "rehidrasi_oral",
            "intervensi_medika",
            "intervensi_cairan",
            "intervensi_diare",
            "intervensi_elektrolit",
            "intervensi_demam",
            "intervensi_nutrisi",
            "intervensi_nyeri",
            "intervensi_kulit",
            "intervensi_resusitasi",
            "intervensi_infus",
            "intervensi_ASI",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_intake",
            "monev_vital",
            "monev_hidrasi",
            "monev_kendali",
            "monev_eliminasi",
            "monev_kulit",
            "monev_makanan",
            "monev_antropometri",
            "monev_interaksi",
            "monev_efek",
            "monev_terapi",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_diare",
            "hasil_dehidrasi",
            "hasil_seimbang",
            "hasil_komplikasi",
            "hasil_vital",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_obat",
            "pulang_normal",
            "pulang_NOC",
            "pulang_varian",
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
            "hari_penyakit" => 'nullable|string',
            "asesment_igd" => 'nullable|string',
            "catatan_asesDokIgd" => 'nullable|string',
            "asesment_spesialis" => 'nullable|string',
            "catatan_asesDokSpe" => 'nullable|string',
            "asesment_perawat" => 'nullable|string',
            "catatan_asesPer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "catatan_labDar" => 'nullable|string',
            "lab_feses" => 'nullable|string',
            "catatan_labFeses" => 'nullable|string',
            "lab_GDS" => 'nullable|string',
            "catatan_labGDS" => 'nullable|string',
            "lab_varian" => 'nullable|string',
            "catatan_labVarian" => 'nullable|string',
            "radiologi" => 'nullable|string',
            "catatan_radiologi" => 'nullable|string',
            "konsultasi" => 'nullable|string',
            "catatan_konsultasi" => 'nullable|string',
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
            "catatan_diagMedis" => 'nullable|string',
            "diagnosa_diare" => 'nullable|string',
            "catatan_diagDiare" => 'nullable|string',
            "diagnosa_cairan" => 'nullable|string',
            "diagnosa_elektrolit" => 'nullable|string',
            "diagnosa_nutrisi" => 'nullable|string',
            "diagnosa_akut" => 'nullable|string',
            "diagnosa_hiper" => 'nullable|string',
            "diagnosa_kulit" => 'nullable|string',
            "diagnosa_gizi" => 'nullable|string',
            "catatan_diagGizi" => 'nullable|string',
            "displan_rumah" => 'nullable|string',
            "catatan_disPlanRumah" => 'nullable|string',
            "displan_terapi" => 'nullable|string',
            "displan_hygiene" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "catatan_emedDiag" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "catatan_egiz" => 'nullable|string',
            "edukasi_hygiene" => 'nullable|string',
            "catatan_ekepHygiene" => 'nullable|string',
            "edukasi_makanan" => 'nullable|string',
            "catatan_ekepMakanan" => 'nullable|string',
            "edukasi_perianal" => 'nullable|string',
            "catatan_ekepPerianal" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "catatan_efarmInf" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "catatan_efarmKons" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "catatan_lemEdTer" => 'nullable|string',
            "injeksi_ceftriaxon" => 'nullable|string',
            "catatan_injectCeftriaxon" => 'nullable|string',
            "injeksi_Parasetamol" => 'nullable|string',
            "catatan_injectParasetamol" => 'nullable|string',
            "injeksi_NaCl" => 'nullable|string',
            "catatan_infusNaCl" => 'nullable|string',
            "oral_dompridon" => 'nullable|string',
            "catatan_oralDompridon" => 'nullable|string',
            "oral_zinc" => 'nullable|string',
            "catatan_oralZinc" => 'nullable|string',
            "rehidrasi_oral" => 'nullable|string',
            "catatan_rehidrasiOral" => 'nullable|string',
            "intervensi_medika" => 'nullable|string',
            "catatan_tatmedMedika" => 'nullable|string',
            "intervensi_cairan" => 'nullable|string',
            "catatan_tatkepCairan" => 'nullable|string',
            "intervensi_diare" => 'nullable|string',
            "intervensi_elektrolit" => 'nullable|string',
            "intervensi_demam" => 'nullable|string',
            "intervensi_nutrisi" => 'nullable|string',
            "intervensi_nyeri" => 'nullable|string',
            "intervensi_kulit" => 'nullable|string',
            "intervensi_resusitasi" => 'nullable|string',
            "intervensi_infus" => 'nullable|string',
            "intervensi_ASI" => 'nullable|string',
            "catatan_tatgiziASI" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "catatan_tatfarmDPJP" => 'nullable|string',
            "monev_dpjp" => 'nullable|string',
            "catatan_monevDPJP" => 'nullable|string',
            "monev_intake" => 'nullable|string',
            "catatan_monevkepIntake" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "monev_hidrasi" => 'nullable|string',
            "monev_kendali" => 'nullable|string',
            "monev_eliminasi" => 'nullable|string',
            "monev_kulit" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "catatan_monevgiziMakanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "catatan_monevfarmInteraksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "monev_terapi" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "catatan_mobmed" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_diare" => 'nullable|string',
            "catatan_hasmedDiare" => 'nullable|string',
            "hasil_dehidrasi" => 'nullable|string',
            "catatan_hasmedDehidrasi" => 'nullable|string',
            "hasil_seimbang" => 'nullable|string',
            "catatan_hasmedSeimbang" => 'nullable|string',
            "hasil_komplikasi" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "catatan_hasgiziAsupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "catatan_hasfarmInd" => 'nullable|string',
            "hasil_obat" => 'nullable|string',
            "pulang_normal" => 'nullable|string',
            "catatan_pulangNormal" => 'nullable|string',
            "pulang_NOC" => 'nullable|string',
            "pulang_varian" => 'nullable|string',
            "catatan_pulangVarian" => 'nullable|string',
            "rencana_resume" => 'nullable|string',
            "catatan_rencanaResume" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_surat" => 'nullable|string',
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

        Diare::create($validatedData);

        return redirect('/diare')->with('success', 'Data added successfully!');
    }

    public function modify($cmd, $id)
    {
        $data = Diare::findOrFail($id);

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
            "asesment_perawat",
            "lab_darah",
            "lab_feses",
            "lab_GDS",
            "lab_varian",
            "radiologi",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_diare",
            "diagnosa_cairan",
            "diagnosa_elektrolit",
            "diagnosa_nutrisi",
            "diagnosa_akut",
            "diagnosa_hiper",
            "diagnosa_kulit",
            "diagnosa_gizi",
            "displan_rumah",
            "displan_terapi",
            "displan_hygiene",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_hygiene",
            "edukasi_makanan",
            "edukasi_perianal",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_ceftriaxon",
            "injeksi_Parasetamol",
            "injeksi_NaCl",
            "oral_dompridon",
            "oral_zinc",
            "rehidrasi_oral",
            "intervensi_medika",
            "intervensi_cairan",
            "intervensi_diare",
            "intervensi_elektrolit",
            "intervensi_demam",
            "intervensi_nutrisi",
            "intervensi_nyeri",
            "intervensi_kulit",
            "intervensi_resusitasi",
            "intervensi_infus",
            "intervensi_ASI",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_intake",
            "monev_vital",
            "monev_hidrasi",
            "monev_kendali",
            "monev_eliminasi",
            "monev_kulit",
            "monev_makanan",
            "monev_antropometri",
            "monev_interaksi",
            "monev_efek",
            "monev_terapi",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_diare",
            "hasil_dehidrasi",
            "hasil_seimbang",
            "hasil_komplikasi",
            "hasil_vital",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_obat",
            "pulang_normal",
            "pulang_NOC",
            "pulang_varian",
            "rencana_resume",
            "rencana_penjelasan",
            "rencana_surat",
        ];

        foreach ($columns as $column) {
            $data[$column] = explode(', ', $data->$column);
        }

        // dd($data->hari_penyakit);

        if ($cmd === 'show') {
            $title = 'Displaying CP Diare Akut pada Anak';

            return view('pages.diare.show', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
        } else if ($cmd === 'edit') {
            $title = 'Editing CP Diare Akut pada Anak';

            return view('pages.diare.edit', compact('data', 'arr_kode_icd', 'arr_tindakan', 'cmd', 'title'));
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
            "asesment_perawat",
            "lab_darah",
            "lab_feses",
            "lab_GDS",
            "lab_varian",
            "radiologi",
            "konsultasi",
            "ases_DPJP",
            "ases_nonDPJP",
            "ases_PPJ",
            "ases_gizi",
            "ases_resep",
            "ases_obat",
            "diagnosa_medis",
            "diagnosa_diare",
            "diagnosa_cairan",
            "diagnosa_elektrolit",
            "diagnosa_nutrisi",
            "diagnosa_akut",
            "diagnosa_hiper",
            "diagnosa_kulit",
            "diagnosa_gizi",
            "displan_rumah",
            "displan_terapi",
            "displan_hygiene",
            "edukasi_diagnosis",
            "edukasi_terapi",
            "edukasi_consent",
            "edukasi_gizi",
            "edukasi_hygiene",
            "edukasi_makanan",
            "edukasi_perianal",
            "edukasi_info",
            "edukasi_konseling",
            "lembar_edukasi",
            "injeksi_ceftriaxon",
            "injeksi_Parasetamol",
            "injeksi_NaCl",
            "oral_dompridon",
            "oral_zinc",
            "rehidrasi_oral",
            "intervensi_medika",
            "intervensi_cairan",
            "intervensi_diare",
            "intervensi_elektrolit",
            "intervensi_demam",
            "intervensi_nutrisi",
            "intervensi_nyeri",
            "intervensi_kulit",
            "intervensi_resusitasi",
            "intervensi_infus",
            "intervensi_ASI",
            "intervensi_dpjp",
            "monev_dpjp",
            "monev_intake",
            "monev_vital",
            "monev_hidrasi",
            "monev_kendali",
            "monev_eliminasi",
            "monev_kulit",
            "monev_makanan",
            "monev_antropometri",
            "monev_interaksi",
            "monev_efek",
            "monev_terapi",
            "mob_medis",
            "mob_keperawatan",
            "mob_fisio",
            "hasil_diare",
            "hasil_dehidrasi",
            "hasil_seimbang",
            "hasil_komplikasi",
            "hasil_vital",
            "hasil_asupan",
            "hasil_status",
            "hasil_terapi",
            "hasil_obat",
            "pulang_normal",
            "pulang_NOC",
            "pulang_varian",
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
            "hari_penyakit" => 'nullable|string',
            "asesment_igd" => 'nullable|string',
            "catatan_asesDokIgd" => 'nullable|string',
            "asesment_spesialis" => 'nullable|string',
            "catatan_asesDokSpe" => 'nullable|string',
            "asesment_perawat" => 'nullable|string',
            "catatan_asesPer" => 'nullable|string',
            "lab_darah" => 'nullable|string',
            "catatan_labDar" => 'nullable|string',
            "lab_feses" => 'nullable|string',
            "catatan_labFeses" => 'nullable|string',
            "lab_GDS" => 'nullable|string',
            "catatan_labGDS" => 'nullable|string',
            "lab_varian" => 'nullable|string',
            "catatan_labVarian" => 'nullable|string',
            "radiologi" => 'nullable|string',
            "catatan_radiologi" => 'nullable|string',
            "konsultasi" => 'nullable|string',
            "catatan_konsultasi" => 'nullable|string',
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
            "catatan_diagMedis" => 'nullable|string',
            "diagnosa_diare" => 'nullable|string',
            "catatan_diagDiare" => 'nullable|string',
            "diagnosa_cairan" => 'nullable|string',
            "diagnosa_elektrolit" => 'nullable|string',
            "diagnosa_nutrisi" => 'nullable|string',
            "diagnosa_akut" => 'nullable|string',
            "diagnosa_hiper" => 'nullable|string',
            "diagnosa_kulit" => 'nullable|string',
            "diagnosa_gizi" => 'nullable|string',
            "catatan_diagGizi" => 'nullable|string',
            "displan_rumah" => 'nullable|string',
            "catatan_disPlanRumah" => 'nullable|string',
            "displan_terapi" => 'nullable|string',
            "displan_hygiene" => 'nullable|string',
            "edukasi_diagnosis" => 'nullable|string',
            "catatan_emedDiag" => 'nullable|string',
            "edukasi_terapi" => 'nullable|string',
            "edukasi_consent" => 'nullable|string',
            "edukasi_gizi" => 'nullable|string',
            "catatan_egiz" => 'nullable|string',
            "edukasi_hygiene" => 'nullable|string',
            "catatan_ekepHygiene" => 'nullable|string',
            "edukasi_makanan" => 'nullable|string',
            "catatan_ekepMakanan" => 'nullable|string',
            "edukasi_perianal" => 'nullable|string',
            "catatan_ekepPerianal" => 'nullable|string',
            "edukasi_info" => 'nullable|string',
            "catatan_efarmInf" => 'nullable|string',
            "edukasi_konseling" => 'nullable|string',
            "catatan_efarmKons" => 'nullable|string',
            "lembar_edukasi" => 'nullable|string',
            "catatan_lemEdTer" => 'nullable|string',
            "injeksi_ceftriaxon" => 'nullable|string',
            "catatan_injectCeftriaxon" => 'nullable|string',
            "injeksi_Parasetamol" => 'nullable|string',
            "catatan_injectParasetamol" => 'nullable|string',
            "injeksi_NaCl" => 'nullable|string',
            "catatan_infusNaCl" => 'nullable|string',
            "oral_dompridon" => 'nullable|string',
            "catatan_oralDompridon" => 'nullable|string',
            "oral_zinc" => 'nullable|string',
            "catatan_oralZinc" => 'nullable|string',
            "rehidrasi_oral" => 'nullable|string',
            "catatan_rehidrasiOral" => 'nullable|string',
            "intervensi_medika" => 'nullable|string',
            "catatan_tatmedMedika" => 'nullable|string',
            "intervensi_cairan" => 'nullable|string',
            "catatan_tatkepCairan" => 'nullable|string',
            "intervensi_diare" => 'nullable|string',
            "intervensi_elektrolit" => 'nullable|string',
            "intervensi_demam" => 'nullable|string',
            "intervensi_nutrisi" => 'nullable|string',
            "intervensi_nyeri" => 'nullable|string',
            "intervensi_kulit" => 'nullable|string',
            "intervensi_resusitasi" => 'nullable|string',
            "intervensi_infus" => 'nullable|string',
            "intervensi_ASI" => 'nullable|string',
            "catatan_tatgiziASI" => 'nullable|string',
            "intervensi_dpjp" => 'nullable|string',
            "catatan_tatfarmDPJP" => 'nullable|string',
            "monev_dpjp" => 'nullable|string',
            "catatan_monevDPJP" => 'nullable|string',
            "monev_intake" => 'nullable|string',
            "catatan_monevkepIntake" => 'nullable|string',
            "monev_vital" => 'nullable|string',
            "monev_hidrasi" => 'nullable|string',
            "monev_kendali" => 'nullable|string',
            "monev_eliminasi" => 'nullable|string',
            "monev_kulit" => 'nullable|string',
            "monev_makanan" => 'nullable|string',
            "catatan_monevgiziMakanan" => 'nullable|string',
            "monev_antropometri" => 'nullable|string',
            "monev_interaksi" => 'nullable|string',
            "catatan_monevfarmInteraksi" => 'nullable|string',
            "monev_efek" => 'nullable|string',
            "monev_terapi" => 'nullable|string',
            "mob_medis" => 'nullable|string',
            "catatan_mobmed" => 'nullable|string',
            "mob_keperawatan" => 'nullable|string',
            "mob_fisio" => 'nullable|string',
            "hasil_diare" => 'nullable|string',
            "catatan_hasmedDiare" => 'nullable|string',
            "hasil_dehidrasi" => 'nullable|string',
            "catatan_hasmedDehidrasi" => 'nullable|string',
            "hasil_seimbang" => 'nullable|string',
            "catatan_hasmedSeimbang" => 'nullable|string',
            "hasil_komplikasi" => 'nullable|string',
            "hasil_vital" => 'nullable|string',
            "hasil_asupan" => 'nullable|string',
            "catatan_hasgiziAsupan" => 'nullable|string',
            "hasil_status" => 'nullable|string',
            "hasil_terapi" => 'nullable|string',
            "catatan_hasfarmInd" => 'nullable|string',
            "hasil_obat" => 'nullable|string',
            "pulang_normal" => 'nullable|string',
            "catatan_pulangNormal" => 'nullable|string',
            "pulang_NOC" => 'nullable|string',
            "pulang_varian" => 'nullable|string',
            "catatan_pulangVarian" => 'nullable|string',
            "rencana_resume" => 'nullable|string',
            "catatan_rencanaResume" => 'nullable|string',
            "rencana_penjelasan" => 'nullable|string',
            "rencana_surat" => 'nullable|string',
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
            if (Diare::where('id', $id)->update($validatedData)) {
                return redirect('/diare')->with('success', 'Data updated successfully!');
            } else {
                throw new \Exception('Data is not updated!');
            }
        } catch (\Exception $e) {
            return redirect('/diare')->with('error', $e->getMessage());
        }

    }

    public function delete($id)
    {
        $data = Diare::findOrFail($id);

        $data->delete();

        return back()->with('success', 'Data deleted sucessfully!');
    }
}
