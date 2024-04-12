<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5" class="min-w-50">URAIAN KEGIATAN</th>
                <th colspan="7">HARI PENYAKIT </th>
                <th rowspan="5" class="min-w-250">KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 7; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 7; $i++)
                    <th class="text-center p-1">
                        <input type="checkbox" id="hp{{ $i }}" value="1"
                            name="hari_penyakit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                    </th>
                @endfor
            </tr>
            <tr>
                <th colspan="7">HARI RAWAT</th>
            </tr>
            <tr>
                @for ($i = 0; $i < 7; $i++)
                    <th>{{ $i + 1 }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. ASESMEN AWAL </td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. ASESMEN AWAL MEDIS</td>
                <td>Dokter Spesialis Mata</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokMata{{ $i }}" value="1"
                            name="asesment_mata[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDokMata{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokMata" name="catatan_asesDokMata">Pasien masuk melalui poli, DPJP

Dilakukan pemeriksaan Visus, slit lamp, tekanan bola mata, funduskopi, retinometri (bila VISUS >= 1/60, Biometri)
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Konsultasi dokter Internis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokInternis{{ $i }}" value="1"
                            name="asesment_internis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDokInternis{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokInternis" name="catatan_asesDokInternis">Atas Indikasi (pre-operasi)</textarea>
                </td>
            </tr>
            <tr>
                <td>Konsultasi dokter Anestesi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokAnestesi{{ $i }}" value="1"
                            name="asesment_anestesi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDokAnestesi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokAnsestesi" name="catatan_asesDokAnsestesi">Bila Anastesi Umum</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat alergi, skrining gizi, nyeri</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesPer{{ $i }}" value="1"
                            name="asesment_perawat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesPer{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPer" name="catatan_asesPer">Dilanjutkan dengan asesmen bio, psiko, sosial, spiritual, dan budaya</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">2. LABORATORIUM </td>
                <td>Darah Lengkap, BT, CT, GDS</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labDar{{ $i }}" value="1"
                            name="lab_darah[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labDar{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabDar" name="catatan_labDar"></textarea>
                </td>
            </tr>
            <tr>
                <td>UR, CR, GDN, GD2PP, Na, K</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labUR{{ $i }}" value="1"
                            name="lab_UR[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labUR{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabUR" name="catatan_labUR">Bila Anestesi Umum / atas indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>THORAX</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="radTho{{ $i }}" value="1"
                            name="radio_thorax[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="radTho{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadTho" name="catatan_radTho">Bila Anestesi Umum / atas indikasi (usia > 40 tahun)</textarea>
                </td>
            </tr>
            <tr>
                <td>USG MATA</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="radUSG{{ $i }}" value="1"
                            name="radio_USG[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="radUSG{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadUSG" name="catatan_radUSG">Atas indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>4. EKG</td>
                <td>EKG</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekg{{ $i }}" value="1"
                            name="ekg[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekg{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkg" name="catatan_ekg">Bila Anestesi Umum / atas indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>5. ASESMEN LANJUTAN</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN MEDIS</td>
                <td>Dokter DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                            name="ases_DPJP[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDPJP" name="catatan_asesDPJP">Visit harian/Follow up</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dr. Ruangan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                            name="ases_nonDPJP[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesNonDPJP" name="catatan_asesNonDPJP">Atas Indikasi/Emergency</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                            name="ases_PPJ[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPPJ" name="catatan_asesPPJ">Pendaftaran ke OK

Administrasi

Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Tenaga Gizi (Nutrisionis/Dietisien)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                            name="ases_gizi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesGizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="5" class="form-control" id="catatanAsesGizi" name="catatan_asesGizi">Lihat risiko malnutrisi melalui skrining gizi dan mengkaji data antropometri, biokimia, fisik/klinis, riwayat makan termasuk alergi makanan serta riwayat personal. Asesmen dilakukan dalam waktu 48 jam</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesResep{{ $i }}" value="1"
                            name="ases_resep[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="6" class="form-control" id="catatanAsesResep" name="catatan_asesResep">Dilanjutkan dengan intervensi farmasi yang sesuai hasil Telaah dan Rekonsiliasi obat</textarea>
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesObat{{ $i }}" value="1"
                            name="ases_obat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>6. DIAGNOSIS</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. DIAGNOSIS MEDIS</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                            name="diagnosa_medis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagMedis{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanDiagMedis" name="catatan_diagMedis"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. DIAGNOSIS KEPERAWATAN</td>
                <td>Kode : 00132 Nyeri Akut</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                            name="diagnosa_akut[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanDiagAkut" name="catatan_diagAkut">Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh perawat penanggung jawab.</textarea>
                </td>
            </tr>
            <tr>
                <td>Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                            name="diagnosa_hiper[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagHiper{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00134 Mual</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagMual{{ $i }}" value="1"
                            name="diagnosa_mual[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagMual{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. DIAGNOSIS GIZI</td>
                <td>Prediksi suboptimal asupan energi berkaitan rencana tindakan bedah/operasi ditandai dengan asupan
                    energi lebih rendah dari kebutuhan (NI - 1.4)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                            name="diagnosa_gizi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagGizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="5" class="form-control" id="catatanDiagGizi" name="catatan_diagGizi">Sesuai dengan data asesmen, kemungkinan saja ada diagnosis lain atau diagnosis berubah selama perawatan.</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="4">7. DISCHARGE PLANNING</td>
                <td>Informasi tentang aktivitas yang dapat dilakukan sesuai dengan tingkat kondisi pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanAk{{ $i }}" value="1"
                            name="displan_aktiv[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanAk{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="15" class="form-control" id="catatanDisPlanAk" name="catatan_disPlanAk">Program pendidikan pasien dan keluarga (diisi 3x24 jam)</textarea>
                </td>
            </tr>
            <tr>
                <td>Terapi yang diberikan meliputi kegunaan obat, dosis dan efek samping</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                            name="displan_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanTer{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Diet yang dapat dikonsumsi selama pemulihan kondisi yaitu diet lunak yang tidak merangsang dan
                    tinggi karbohidrat dan protein</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanDiet{{ $i }}" value="1"
                            name="displan_diet[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanDiet{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Anjurkan untuk istirahat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanIstirahat{{ $i }}" value="1"
                            name="displan_istirahat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanIstirahat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>
                    8. EDUKASI TERINTEGRASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. EDUKASI/INFORMASI MEDIS</td>
                <td>Penjelasan Diagnosis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                            name="edukasi_diagnosis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="14" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga berdasarkan Discharge Planning

Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga

Edukasi gizi dapat dilakukan saat awal masuk pada hari 1 atau hari ke 2

Meningkatkan kepatuhan pasien meminum/menggunakan obat

Di DTT Keluarga/Pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                            name="edukasi_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Informed Consent</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                            name="edukasi_consent[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>Diet pra dan pasca bedah. Makan cair, saring, lunak, biasa secara bertahap setelah operasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="egiz{{ $i }}" value="1"
                            name="edukasi_gizi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEgiz" name="catatan_egiz"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="5">c. EDUKASI KEPERAWATAN</td>
                <td>1. Kemampuan melakukan ADL secara mandiri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepADL{{ $i }}" value="1"
                            name="edukasi_ADL[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepADL{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">
                    <textarea rows="14" class="form-control" id="catatanEkepADL" name="catatan_ekepADL"></textarea>
                </td>
            </tr>
            <tr>
                <td>2. Manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepNyeri{{ $i }}" value="1"
                            name="edukasi_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepNyeri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>3. Tanda-tanda infeksi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepInfeksi{{ $i }}" value="1"
                            name="edukasi_infeksi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepInfeksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>4. Diet selama perawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepDiet{{ $i }}" value="1"
                            name="edukasi_diet[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepDiet{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>5. Teknik meredakan mual</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepMual{{ $i }}" value="1"
                            name="edukasi_mual[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepMual{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI </td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                            name="edukasi_info[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf"></textarea>
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                            name="edukasi_konseling[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                            name="lembar_edukasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLemEdTer" name="catatan_lemEdTer"></textarea>
                </td>
            </tr>
            <tr>
                <td>9. TERAPI/MEDIKAMENTOSA</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. INJEKSI</td>
                <td>Ranitidine 2x1 amp</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="injectRani{{ $i }}" value="1"
                            name="injeksi_ranitidine[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="injectRani{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectRani" name="catatan_injectRani">Sesuai indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>Ondansentron 2x4 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectOndan{{ $i }}" value="1"
                            name="injeksi_ondansentron[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="injectOndan{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectOndan" name="catatan_injectOndan">Sesuai indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>RL 3 kolf / 24 jam</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="infusKolf{{ $i }}" value="1"
                            name="injeksi_kolf[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="infusKolf{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInfusKolf" name="catatan_infusKolf"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. OBAT ORAL</td>
                <td>Asam Mefenamat 3 x 500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="oralMefe{{ $i }}" value="1"
                            name="oral_mefenamat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="oralMefe{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralMefe" name="catatan_oralMefe">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td>Ciprofloxacin 2 x 500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="oralCipro{{ $i }}" value="1"
                            name="oral_ciprofloxacin[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="oralCipro{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralCipro" name="catatan_oralCipro"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. OBAT LOKAL</td>
                <td>Levofloxacin / Ofloxacin ED 4-6 x 1 gtt</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="lokalLevo{{ $i }}" value="1"
                            name="lokal_levofloxacin[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="lokalLevo{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLokalLevo" name="catatan_lokalLevo"></textarea>
                </td>
            </tr>
            <tr>
                <td>Antibiotika + Kortikosteroid ED 6 x 1 gtt</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 5) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="localAnti{{ $i }}" value="1"
                            name="local_antibiotika[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="localAnti{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLokalAnti" name="catatan_lokalAnti"></textarea>
                </td>
            </tr>
            <tr>
                <td>10. TATA LAKSANA/INTERVENSI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. TATA LAKSANA/INTERVENSI MEDIS</td>
                <td>ECCE / PHACO + IOL</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatmedECCE{{ $i }}" value="1"
                            name="intervensi_ECCE[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatmedECCE{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatmedECCE" name="catatan_tatmedECCE"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="9">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC: 1400 manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                            name="intervensi_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="9">
                    <textarea rows="25" class="form-control" id="catatanTatkepNyeri" name="catatan_tatkepNyeri">Mengaju pada NIC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. NIC: 6040 Terapi Relaksasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepTerapi{{ $i }}" value="1"
                            name="intervensi_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. NIC: 3740 Pengobatan Demam</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                            name="intervensi_demam[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepDemam{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. NIC: 4120 Manajemen Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                            name="intervensi_cairan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepCairan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. NIC: 6540 Kontrol Infeksi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepKontrol{{ $i }}" value="1"
                            name="intervensi_kontrol[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepKontrol{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. NIC: 4190 Pemasangan Infus</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                            name="intervensi_infus[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>
                    <p>g. NIC: 2314 Medikasi IV & Lokal</p>
                    <p>Pemberian obat tetes mata midriacyl</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepMedikasi{{ $i }}" value="1"
                            name="intervensi_medikasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepMedikasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>
                    <p>h. NIC: 309 Persiapan Operasi</p>
                    <p>Edukasi, kelengkapan surat, persiapan fisik : puasa, ganti pakaian, cukur bulu mata</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepOperasi{{ $i }}" value="1"
                            name="intervensi_operasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepOperasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>i. NIC: 3360 Perawatan Luka</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepLuka{{ $i }}" value="1"
                            name="intervensi_luka[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepLuka{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Diet Biasa</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatgiziDiet{{ $i }}" value="1"
                            name="intervensi_diet[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatgiziDiet{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatgiziDiet" name="catatan_tatgiziDiet"></textarea>
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                            name="intervensi_dpjp[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatfarmDPJP" name="catatan_tatfarmDPJP">Sesuai dengan hasil monitoring</textarea>
                </td>
            </tr>
            <tr>
                <td>11. MONITORING & EVALUASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">a. DOKTER DPJP</td>
                <td>Edukasi post operasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevOperasi{{ $i }}" value="1"
                            name="monev_operasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevOperasi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="16" class="form-control" id="catatanMonevOperasi" name="catatan_monevOperasi">Monitor Perkembangan Pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>Memeriksa dan monitoring semua kondisi dan keluhan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevPeriksa{{ $i }}" value="1"
                            name="monev_periksa[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevPeriksa{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Monitoring Komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevKomplikasi{{ $i }}" value="1"
                            name="monev_komplikasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevKomplikasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Rencana Asuhan / Perawatan luka operasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevPerawatan{{ $i }}" value="1"
                            name="monev_perawatan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevPerawatan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Monitoring penurunan skala nyeri pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepSkala{{ $i }}" value="1"
                            name="monev_skala[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepSkala{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="10" class="form-control" id="catatanMonevkepSkala" name="catatan_monevkepSkala">Mengacu pada NOC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Monitoring tanda-tanda vital pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                            name="monev_vital[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring status hidrasi pasien meliputi <span class="fst-italic">balance</span> cairan,
                    terapi intravena dan tanda-tanda dehidrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                            name="monev_hidrasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepHidrasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                            name="monev_makanan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">Sesuai dengan masalah gizi dan tanda gejala yang akan dilihat kemajuannya

Mengacu pada IDNT (International Dietetics & Nutrition Terminology)</textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                            name="monev_antropometri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring Interaksi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                            name="monev_interaksi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="10" class="form-control" id="catatanMonevfarmInteraksi" name="catatan_monevfarmInteraksi">Menyusun Software interaksi

Dilanjutkan dengan intervensi farmasi sesuai hasil monitoring</textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring Efek Samping Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevfarmEfsam{{ $i }}" value="1"
                            name="monev_efek[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevfarmEfsam{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Pemantauan Terapi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevfarmTerapi{{ $i }}" value="1"
                            name="monev_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevfarmTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>12. MOBILISASI / REHABILITASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="mobmed{{ $i }}" value="1"
                            name="mob_medis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="10" class="form-control" id="catatanMobmed" name="catatan_mobmed">Tahapan mobilisasi sesuai kondisi pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td>Posisi tidur dan sehari-hari</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="mobkep{{ $i }}" value="1"
                            name="mob_keperawatan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. FISIOTERAPI</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                            name="mob_fisio[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>13. OUTCOME/HASIL</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td>Perbaikan visus pada mata pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="hasmedVisus{{ $i }}" value="1"
                            name="hasil_visus[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasmedVisus{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedVisus" name="catatan_hasmedVisus"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="4">b. KEPERAWATAN</td>
                <td>a. NOC : 1605 Kontrol Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepNyeri{{ $i }}" value="1"
                            name="hasil_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepNyeri{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="10" class="form-control" id="catatanHaskepNyeri" name="catatan_haskepNyeri">Mengacu pada NOC

Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td>b. NOC : 0703 Saverity Infeksi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepInfeksi{{ $i }}" value="1"
                            name="hasil_infeksi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepInfeksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. NOC : 2301 Respon Pengobatan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepRespon{{ $i }}" value="1"
                            name="hasil_respon[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepRespon{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. NOC : 0802 Tanda-tanda vital</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                            name="hasil_vital[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                            name="hasil_asupan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasgiziAsupan" name="catatan_hasgiziAsupan">Status Gizi berdasarkan antropometri, biokimia, fisik/klinis</textarea>
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                            name="hasil_status[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. FARMASI</td>
                <td>Terapi obat sesuai indikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                            name="hasil_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasfarmInd{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasfarmInd" name="catatan_hasfarmInd">Meningkatkan kualitas hidup pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasfarmObat{{ $i }}" value="1"
                            name="hasil_obat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasfarmObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">14. KRITERIA PULANG</td>
                <td>Tanda Vital Normal</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                            name="pulang_normal[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="pulangNormal{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanPulangNormal" name="catatan_pulangNormal">Status pasien/tanda vital sesuai dengan PPK</textarea>
                </td>
            </tr>
            <tr>
                <td>Sesuai NOC</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangNOC{{ $i }}" value="1"
                            name="pulang_NOC[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="pulangNOC{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="pulangVarian{{ $i }}" value="1"
                            name="pulang_varian[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="pulangVarian{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanPulangVarian" name="catatan_pulangVarian">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN</td>
                <td>Perawatan luka di rumah</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="rencanaPerawatan{{ $i }}" value="1"
                            name="rencana_perawatan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaPerawatan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="7" class="form-control" id="catatanRencanaPerawatan" name="catatan_rencanaPerawatan">Pasien membawa Resume Perawatan/Surat Rujukan/Surat Kontrol/Homecare saat pulang</textarea>
                </td>
            </tr>
            <tr>
                <td>Penjelasan obat tetes mata dan obat oral</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                            name="rencana_penjelasan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kontrol</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0 || $i === 6) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaKontrol{{ $i }}" value="1"
                            name="rencana_kontrol[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaKontrol{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>VARIAN</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>
