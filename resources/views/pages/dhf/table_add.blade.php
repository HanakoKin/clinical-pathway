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
                <td rowspan="2">a. ASESMEN AWAL MEDIS</td>
                <td>Dokter IGD</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                            name="asesment_igd[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokIgd" name="catatan_asesDokIgd">Pasien masuk melalui IGD</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter Spesialis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                            name="asesment_spesialis[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesDokSpe{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokSpe" name="catatan_asesDokSpe">Pasien masuk melalui RJ</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat alergi,
                        skrining gizi, suhu</p>
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
                <td rowspan="4">2. LABORATORIUM </td>
                <td>Darah rutin serial per hari</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
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
                <td>NS1 (hari 1-3 demam)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labNS{{ $i }}" value="1"
                            name="lab_NS[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labNS{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabNS" name="catatan_labNS"></textarea>
                </td>
            </tr>
            <tr>
                <td>DBT IgG, IgM (hari 6-7 demam)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labDBT{{ $i }}" value="1"
                            name="lab_DBT[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labDBT{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabDBT" name="catatan_labDBT"></textarea>
                </td>
            </tr>
            <tr>
                <td>Ur, Cr, SGOT, SGPT, Na, K</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labUr{{ $i }}" value="1"
                            name="lab_ur[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="labUr{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabUr" name="catatan_labUr">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>THORAX AP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="radTho{{ $i }}" value="1"
                            name="radio_thorax[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="radTho{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadTho" name="catatan_radTho">Bila sesak napas, dugaan edem paru/efusi pleura</textarea>
                </td>
            </tr>
            <tr>
                <td>USG ABDOMEN</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="radUSG{{ $i }}" value="1"
                            name="radio_USG[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="radUSG{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadUSG" name="catatan_radUSG">Bila nyeri perut hebat</textarea>
                </td>
            </tr>
            <tr>
                <td>4. KONSULTASI</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="konsul{{ $i }}" value="1"
                            name="konsultasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanKonsul" name="catatan_konsul"></textarea>
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
                        @if ($i !== 0) style="background-color: #FEA8B9" @endif>
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
                        @if ($i !== 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                            name="ases_nonDPJP[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesNonDPJP" name="catatan_asesNonDPJP">Atas Indikasi Emergency</textarea>
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i !== 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                            name="ases_PPJ[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPPJ" name="catatan_asesPPJ">Dilakukan dalam 3 shift</textarea>
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
                    <textarea rows="3" class="form-control" id="catatanAsesGizi" name="catatan_asesGizi">Lihat risiko malnutrisi melalui skrining gizi dan mengkaji data antropometri, biokimia, fisik/klinis, riwayat makan termasuk alergi makanan serta riwayat personal. Asesmen dilakukan dalam waktu 48 jam</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="asesResep{{ $i }}" value="1"
                            name="ases_resep[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="3" class="form-control" id="catatanAsesResep" name="catatan_asesResep">Dilanjutkan dengan intervensi farmasi yang sesuai hasil Telaah dan Rekonsiliasi obat</textarea>
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
                <td rowspan="4">b. DIAGNOSIS KEPERAWATAN</td>
                <td>Kode : 00132 Nyeri Akut</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                            name="diagnosa_akut[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="9" class="form-control" id="catatanDiagAkut" name="catatan_diagAkut">Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh perawat penanggung jawab</textarea>
                </td>
            </tr>
            <tr>
                <td>Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                            name="diagnosa_hiper[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagHiper{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00134 Mual</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagMual{{ $i }}" value="1"
                            name="diagnosa_mual[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagMual{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kode : 00027 Kekurangan Volume Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagCair{{ $i }}" value="1"
                            name="diagnosa_cairan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagCair{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. DIAGNOSIS GIZI</td>
                <td>Prediksi suboptimal asupan energi berkaitan rencana tindakan bedah/operasi ditandai dengan asupan
                    energi lebih rendah dari kebutuhan (NI - 1.4)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                            name="diagnosa_gizi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="diagGizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="5" class="form-control" id="catatanDiagGizi" name="catatan_diagGizi">Sesuai dengan data asesmen, kemungkinan saja ada diagnosis lain atau diagnosis berubah selama perawatan</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="4">7. DISCHARGE PLANNING</td>
                <td>Informasi tentang aktivitas yang dapat dilakukan sesuai dengan tingkat kondisi pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanAk{{ $i }}" value="1"
                            name="displan_aktiv[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanAk{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="17" class="form-control" id="catatanDisPlanAk" name="catatan_disPlanAk">Program pendidikan pasien dan keluarga (diisi 3x24 jam)</textarea>
                </td>
            </tr>
            <tr>
                <td>Terapi yang diberikan meliputi kegunaan obat, dosis dan efek samping</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                            name="displan_terapi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanTer{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Diet yang dapat dikonsumsi selama pemulihan kondisi, terutama banyaknya input cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanDiet{{ $i }}" value="1"
                            name="displan_diet[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanDiet{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Informasi mengenali tanda-tanda dengue dengan peringatan dan dengue berat serta cara pencegahan
                    penularan dengue</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanDengu{{ $i }}" value="1"
                            name="displan_dengue[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="disPlanDengu{{ $i }}"></label>
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
                    <textarea rows="17" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">
- Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga berdasarkan Discharge Planning

- Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga

- Edukasi gizi dapat dilakukan saat awal masuk pada hari 1 atau hari ke 2

- Meningkatkan kepatuhan pasien meminum/menggunakan obat

- Di TTD Keluarga/Pasien
                    </textarea>
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
                <td>Diet lunak bertahap, cairan adekuat</td>
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
                <td rowspan="4">c. EDUKASI KEPERAWATAN</td>
                <td>1. Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="ekepHiper{{ $i }}" value="1"
                            name="edukasi_hipertermia[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepHiper{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepHiper" name="catatan_ekepHiper"></textarea>
                </td>
            </tr>
            <tr>
                <td>2. Manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="ekepNyeri{{ $i }}" value="1"
                            name="edukasi_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepNyeri{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepNyeri" name="catatan_ekepNyeri"></textarea>
                </td>
            </tr>
            <tr>
                <td>3. Monitoring cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="ekepCair{{ $i }}" value="1"
                            name="edukasi_cairan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepCair{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepCair" name="catatan_ekepCair"></textarea>
                </td>
            </tr>
            <tr>
                <td>4. Pengelolaan hidup sehat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="ekepHidup{{ $i }}" value="1"
                            name="edukasi_hidup[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="ekepHidup{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEkepHidup" name="catatan_ekepHidup"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI </td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                            name="edukasi_info[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf"></textarea>
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
                <td>
                    <textarea rows="3" class="form-control" id="catatanEfarmKons" name="catatan_efarmKons"></textarea>
                </td>
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
                <td>Parasetamol 10 - 15 mg /Kg BB/intravena</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="injectPara{{ $i }}" value="1"
                            name="injeksi_parasetamol[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="injectPara{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectPara" name="catatan_injectPara"></textarea>
                </td>
            </tr>
            <tr>
                <td>Ranitidin atau PPI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectRanit{{ $i }}" value="1"
                            name="injeksi_ranitidin[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="injectRanit{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInjectRanit" name="catatan_injectRanit">Bila nyeri epigastrium</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">b. CAIRAN INFUS</td>
                <td>RL atau NaCl atau ringet asetat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="infusNaCl{{ $i }}" value="1"
                            name="injeksi_NaCl[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="infusNaCl{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInfusNaCl" name="catatan_infusNaCl"></textarea>
                </td>
            </tr>
            <tr>
                <td>Koloid</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="infusKoloid{{ $i }}" value="1"
                            name="injeksi_koloid[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="infusKoloid{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInfusKoloid" name="catatan_infusKoloid">Ht meningkat > 20%</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. OBAT ORAL</td>
                <td>Parasetamol oral 3-4x 500mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oral_para{{ $i }}" value="1"
                            name="oral_paracetamol[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="oral_para{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralPara" name="catatan_oralPara"></textarea>
                </td>
            </tr>
            <tr>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oral_varian{{ $i }}" value="1"
                            name="oral_varian[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="oral_varian{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralVarian" name="catatan_oralVarian">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td>d. TRANSFUSI</td>
                <td>TC 10-20 unit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="transfusi{{ $i }}" value="1"
                            name="transfusi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="transfusi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTransfusi" name="catatan_transfusi">Bila perdarahan aktif, atau trombosit < 20,000</textarea>
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
                <td>Medikamentosa</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                            name="intervensi_medika[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatmedMedika" name="catatan_tatmedMedika"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="4">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC: 1400 Manajemen Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                            name="intervensi_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="8" class="form-control" id="catatanTatkepNyeri" name="catatan_tatkepNyeri">Mengaju pada NIC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. NIC: 3740 Pengobatan Demam </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                            name="intervensi_demam[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepDemam{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. NIC: 4120 Manajemen Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                            name="intervensi_cairan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepCairan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. NIC: 4190 Pemasangan Infus</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                            name="intervensi_infus[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Diet cair/saring/lunak/biasa secara bertahap. Diet Tinggi Energi dan Tinggi Protein (TETP) selama
                    pemulihan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatgiziTETP{{ $i }}" value="1"
                            name="intervensi_tetp[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="tatgiziTETP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="5" class="form-control" id="catatanTatgiziTETP" name="catatan_tatgiziTETP">Bentuk makanan, kebutuhan zat gizi disesuaikan dengan usia dan kondisi klinis secara bertahap</textarea>
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
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
                <td>a. DOKTER DPJP</td>
                <td>Asesmen Ulang & Review Verifikasi Rencana Asuhan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                            name="monev_dpjp[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevDPJP" name="catatan_monevDPJP">Monitor Perkembangan Pasien</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="6">b. KEPERAWATAN</td>
                <td>a. Monitoring tanda perdarahan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepPerdarah{{ $i }}" value="1"
                            name="monev_perdarahan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepPerdarah{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="6">
                    <textarea rows="14" class="form-control" id="catatanMonevkepPerdarah" name="catatan_monevkepPerdarah">Mengacu pada NOC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Monitoring tanda-tanda vital pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
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
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                            name="monev_hidrasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepHidrasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Monitoring hasil laboratorium</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepLab{{ $i }}" value="1"
                            name="monev_lab[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepLab{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring keluhan nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepNyeri{{ $i }}" value="1"
                            name="monev_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. Monitoring status nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevkepNutrisi{{ $i }}" value="1"
                            name="monev_nutrisi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevkepNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                            name="monev_makanan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="8" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">
- Sesuai dengan masalah gizi dan tanda gejala yang akan dilihat kemajuannya

-Mengacu pada IDNT (International Dietetics & Nutrition Terminology)
                    </textarea>
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
                    <textarea rows="8" class="form-control" id="catatanMonevfarmInteraksi" name="catatan_monevfarmInteraksi">
- Menyusun Software interaksi

-Dilanjutkan dengan intervensi farmasi sesuai hasil monitoring
                    </textarea>
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
                    <td class="text-center p-1" style="background-color: #FEA8B9">
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
                    <textarea rows="6" class="form-control" id="catatanMobmed" name="catatan_mobmed">Tahapan mobilisasi sesuai kondisi pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td>Dibantu sebagian/mandiri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
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
                <td rowspan="2">a. MEDIS</td>
                <td>Demam Hilang</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 6) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedDemam{{ $i }}" value="1"
                            name="hasil_demam[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasmedDemam{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedDemam" name="catatan_hasmedDemam"></textarea>
                </td>
            </tr>
            <tr>
                <td>Trombosit > 50,000</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 6) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedTrombosit{{ $i }}" value="1"
                            name="hasil_trombosit[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="hasmedTrombosit{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedTrombosit" name="catatan_hasmedTrombosit"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. NOC : 1605 Kontrol Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepNyeri{{ $i }}" value="1"
                            name="hasil_nyeri[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepNyeri{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">
                    <textarea rows="12" class="form-control" id="catatanHaskepNyeri" name="catatan_haskepNyeri">
- Mengacu pada NOC

- Dilakukan dalam 3 shift
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>b. Hipertermi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepHipertermi{{ $i }}" value="1"
                            name="hasil_hipertermi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepHipertermi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepKomplikasi{{ $i }}" value="1"
                            name="hasil_komplikasi[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepKomplikasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. NOC : 0802 Tanda-tanda vital</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                            name="hasil_vital[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Efek gangguan mual yang dapat diterima</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="haskepMual{{ $i }}" value="1"
                            name="hasil_mual[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="haskepMual{{ $i }}"></label>
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
                        @if ($i === 6) style="background-color: #FEA8B9" @endif>
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
                        @if ($i === 6) style="background-color: #FEA8B9" @endif>
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
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 6) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                            name="rencana_resume[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="5" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">Pasien membawa Resume Perawatan/Surat Rujukan/Surat Kontrol/Homecare saat pulang</textarea>
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 6) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                            name="rencana_penjelasan[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Surat pengantar kontrol</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1"
                        @if ($i === 6) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                            name="rencana_surat[ {{ $i }} ]">
                        <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
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
