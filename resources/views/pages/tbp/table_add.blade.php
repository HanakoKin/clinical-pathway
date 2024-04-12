<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5" class="min-w-50">URAIAN KEGIATAN</th>
                <th colspan="5">HARI PENYAKIT </th>
                <th rowspan="5" class="min-w-250">KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 5; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 5; $i++)
                    <th class="text-center p-1">
                        <input type="checkbox" id="hp{{ $i }}" value="1"
                            name="hari_penyakit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                    </th>
                @endfor
            </tr>
            <tr>
                <th colspan="5">HARI RAWAT</th>
            </tr>
            <tr>
                @for ($i = 0; $i < 5; $i++)
                    <th>{{ $i + 1 }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. ASESMEN AWAL</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN AWAL MEDIS</td>
                <td>Dokter IGD</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                            name="asesment_igd[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDokIgd" name="catatan_asesDokIgd">Pasien masuk melalui IGD</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter Spesialis</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                            name="asesment_spesialis[ {{ $i }} ]" />
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
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="5">2. LABORATORIUM</td>
                <td>Hb, Ht, Leukosit, LED, Ureum, Creatinin, GDS</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labHb{{ $i }}" value="1"
                            name="lab_hb[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labHb{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabHb" name="catatan_labHb"></textarea>
                </td>
            </tr>
            <tr>
                <td>SGOT, SGPT, Bilirubin, asam urat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labSGOT{{ $i }}" value="1"
                            name="lab_SGOT[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labSGOT{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabSGOT" name="catatan_labSGOT">Atas indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>Sputum BTA langsung 2x</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labBTALangsung{{ $i }}" value="1"
                            name="lab_langsung[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labBTALangsung{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabBTALangsung" name="catatan_labBTALangsung"></textarea>
                </td>
            </tr>
            <tr>
                <td>Sputum BTA kultur</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="labBTAKultur{{ $i }}" value="1"
                            name="lab_kultur[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labBTAKultur{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabBTAKultur" name="catatan_labBTAKultur"></textarea>
                </td>
            </tr>
            <tr>
                <td>Gene expert / TCM</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="labExpert{{ $i }}" value="1"
                            name="lab_expert[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labExpert{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLabExpert" name="catatan_labExpert">Kirim kelaboratorium rujukan RSUD Kemayoran</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>Foto toraks PA dan atau dg lateral</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="radFoto{{ $i }}" value="1"
                            name="radio_foto[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="radFoto{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadFoto" name="catatan_radFoto">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td>CT scan thorax dg kontras</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="radCT{{ $i }}" value="1"
                            name="radio_CT[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="radCT{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanRadCT" name="catatan_radCT">Atas Indikasi</textarea>
                </td>
            </tr>
            <tr>
                <td>4. KONSULTASI</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="konsul{{ $i }}" value="1"
                            name="konsultasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanKonsul" name="catatan_konsul">Varian</textarea>
                </td>
            </tr>
            <tr>
                <td>5. ASESMEN LANJUTAN</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN MEDIS</td>
                <td>Dokter DPJP</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                            name="ases_DPJP[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesDPJP" name="catatan_asesDPJP">Visit harian/Follow up</textarea>
                </td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dokter Ruangan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                            name="ases_nonDPJP[ {{ $i }} ]" />
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
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                            name="ases_PPJ[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanAsesPPJ" name="catatan_asesPPJ">Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Skrining Gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                            name="ases_gizi[ {{ $i }} ]" />
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
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesResep{{ $i }}" value="1"
                            name="ases_resep[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanAsesResep" name="catatan_asesResep">Dilanjutkan dengan intervensi farmasi yang sesuai hasil Telaah dan Rekonsiliasi obat</textarea>
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="asesObat{{ $i }}" value="1"
                            name="ases_obat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>6. DIAGNOSIS</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DIAGNOSIS MEDIS</td>
                <td>TB Paru</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagTBParu{{ $i }}" value="1"
                            name="diagnosa_medis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagTBParu{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanDiagTBParu" name="catatan_diagTBParu"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="7">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 00013 Diare</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagDiare{{ $i }}" value="1"
                            name="diagnosa_diare[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagDiare{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="7">
                    <textarea rows="20" class="form-control" id="catatanDiagDiare" name="catatan_diagDiare">Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh perawat penanggung jawab</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Kode : 00025 Risiko ketidakseimbangan volume cairan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagCairan{{ $i }}" value="1"
                            name="diagnosa_cairan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagCairan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Kode : 00195 Risiko ketidakseimbangan elektrolit</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagElektrolit{{ $i }}" value="1"
                            name="diagnosa_elektrolit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagElektrolit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Kode : 00002 Ketidakseimbangan nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                            name="diagnosa_nutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagHipertermia{{ $i }}" value="1"
                            name="diagnosa_hipertermia[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagHipertermia{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. Kode : 00132 Nyeri akut</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                            name="diagnosa_akut[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>g. Kode : 00046 Kerusakan integritas kulit</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagKulit{{ $i }}" value="1"
                            name="diagnosa_kulit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagKulit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">c. DIAGNOSIS GIZI</td>
                <td>Peningkatan kebutuhan cairan berkaitan dengan diare ditandai dengan estimasi asupan cairan kurang
                    dari kebutuhan (NI - 3.1)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGiziNI3-{{ $i }}" value="1"
                            name="diagnosa_NI3[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziNI3-{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="16" class="form-control" id="catatanDiagGiziNI3" name="catatan_diagGiziNI3">Sesuai dengan data asesmen, kemungkinan saja ada diagnosis lain atau diagnosis berubah selama perawatan</textarea>
                </td>
            </tr>
            <tr>
                <td>Tidak cukupnya asupan mineral berkaitan dengan pengeluaran yang tinggi (diare) ditandai dengan
                    estimasi asupan kurang dari kebutuhan, malabsorbsi (NI – 5.10.1)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGiziNI5-{{ $i }}" value="1"
                            name="diagnosa_NI5[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziNI5-{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Asupan oral inadekuat berkaitan dengan tidak nafsu makan ditandai dengan asupan energi dan protein
                    kurang dari kebutuhan (NI – 2.1)</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="diagGiziNI2-{{ $i }}" value="1"
                            name="diagnosa_NI2[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziNI2-{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">7. DISCHARGE PLANNING</td>
                <td>Identifikasi kebutuhan edukasi & latihan selama perawatan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanEdukasi{{ $i }}" value="1"
                            name="displan_edukasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanEdukasi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="10" class="form-control" id="catatanDisPlanEdukasi" name="catatan_disPlanEdukasi">Program pendidikan pasien dan keluarga</textarea>
                </td>
            </tr>
            <tr>
                <td>Identifikasi kebutuhan di rumah</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanRumah{{ $i }}" value="1"
                            name="displan_rumah[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanRumah{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Hand hygiene</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanHygenie{{ $i }}" value="1"
                            name="displan_hygenie[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanHygenie{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kualitas hidup sehat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="disPlanSehat{{ $i }}" value="1"
                            name="displan_sehat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanSehat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>8. EDUKASI TERINTEGRASI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. EDUKASI/INFORMASI MEDIS</td>
                <td>Penjelasan Diagnosis</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                            name="edukasi_diagnosis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga berdasarkan Discharge Planning</textarea>
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                            name="edukasi_terapi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Informed Consent</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                            name="edukasi_consent[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>Menginformasikan status gizi, jenis diet, tujuan diet, bentuk makanan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="egiz{{ $i }}" value="1"
                            name="edukasi_gizi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanEgiz" name="catatan_egiz">Edukasi gizi dilakukan saat awal masuk dan atau pada hari ke 1/hari ke 2</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">c. EDUKASI KEPERAWATAN</td>
                <td>a. Hand hygiene</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepHygenie{{ $i }}" value="1"
                            name="edukasi_hygenie[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepHygenie{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanEkepHygenie" name="catatan_ekepHygenie">Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Menjaga kebersihan makanan dan peralatan makan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepKebersihan{{ $i }}" value="1"
                            name="edukasi_kebersihan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepKebersihan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Cara perawatan perianal</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="ekepPerianal{{ $i }}" value="1"
                            name="edukasi_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepPerianal{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI</td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @elseif ($i > 0 && $i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                            name="edukasi_info[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf">Meningkatkan kepatuhan pasien meminum/menggunakan obat</textarea>
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0 || $i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                            name="edukasi_konseling[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 0) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                            name="lembar_edukasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanLemEdTer" name="catatan_lemEdTer">DTT keluarga/pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>9. TERAPI/MEDIKAMENTOSA</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">a. INJEKSI</td>
                <td>Antibiotik : </td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td rowspan="4">
                    <textarea rows="8" class="form-control" id="catatanInjeksi" name="catatan_injeksi">Bila disertai perdarahan (batuk darah)</textarea>
                </td>
            </tr>
            <tr>
                <td>- Levifloksasin 1x500 mg drip</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="injectLevifloksasin{{ $i }}" value="1"
                            name="injeksi_levifloksasin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectLevifloksasin{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>- Streptomisin 1x750 mg IM</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="injectStreptomisin{{ $i }}" value="1"
                            name="injeksi_streptomisin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectStreptomisin{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>- Asam transenamat 3x500 mg iv</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="injectTransenamat{{ $i }}" value="1"
                            name="injeksi_transenamat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectTransenamat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>Kristaloid : NaCol 0,9% / D5%</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                            name="injeksi_kristaloid[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="infusKristaloid{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanInfusKristaloid" name="catatan_infusKristaloid"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="15">c. OBAT ORAL</td>
                <td>Oral antituberkulosis (OAT) : </td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Rifampicin 1x450 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_rifampicin{{ $i }}" value="1"
                            name="oral_rifampicin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_rifampicin{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralRifampicin" name="catatan_oralRifampicin"></textarea>
                </td>
            </tr>
            <tr>
                <td>- INH 1x300 mg atau INH forte (sudah dengan B6) 1x400 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_INH{{ $i }}" value="1"
                            name="oral_INH[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_INH{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralINH" name="catatan_oralINH"></textarea>
                </td>
            </tr>
            <tr>
                <td>- Pirazinamide 1x1000 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_pirazinamide{{ $i }}" value="1"
                            name="oral_pirazinamide[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_pirazinamide{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralPirazinamide" name="catatan_oralPirazinamide"></textarea>
                </td>
            </tr>
            <tr>
                <td>- Etambutol 1x1000 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_etambutol{{ $i }}" value="1"
                            name="oral_etambutol[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_etambutol{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralEtambutol" name="catatan_oralEtambutol"></textarea>
                </td>
            </tr>
            <tr>
                <td>Lain-lain : </td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ambroksol 3x1 tab atau asetisistein 3x200 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_ambroksol-A{{ $i }}" value="1"
                            name="oral_ambroksol_A[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_ambroksol-A{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralAmbroksol-A" name="catatan_oralAmbroksol_A"></textarea>
                </td>
            </tr>
            <tr>
                <td>- Salbutamol 3x2 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_salbutamol-A{{ $i }}" value="1"
                            name="oral_salbutamol_A[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_salbutamol-A{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralSalbutamol-A" name="catatan_oralSalbutamol_A">Bila disertai sesak</textarea>
                </td>
            </tr>
            <tr>
                <td>- PCT 3x1</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_PCT-A{{ $i }}" value="1"
                            name="oral_PCT_A[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_PCT-A{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralPCT-A" name="catatan_oralPCT_A">Bila disertai demam</textarea>
                </td>
            </tr>
            <tr>
                <td>- Ranitidin 2x1</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_ranitidin-A{{ $i }}" value="1"
                            name="oral_ranitidin_A[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_ranitidin-A{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralRanitidin-A" name="catatan_oralRanitidin_A">Bila disertai mual</textarea>
                </td>
            </tr>
            <tr>
                <td>Lain-lain : </td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ambroksol 3x1 tab atau asetisistein 3x200 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_ambroksol-B{{ $i }}" value="1"
                            name="oral_ambroksol_B[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_ambroksol-B{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralAmbroksol-B" name="catatan_oralAmbroksol_B"></textarea>
                </td>
            </tr>
            <tr>
                <td>- Salbutamol 3x2 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_salbutamol-B{{ $i }}" value="1"
                            name="oral_salbutamol_B[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_salbutamol-B{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralSalbutamol-B" name="catatan_oralSalbutamol_B">Bila disertai sesak</textarea>
                </td>
            </tr>
            <tr>
                <td>- PCT 3x1</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_PCT-B{{ $i }}" value="1"
                            name="oral_PCT_B[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_PCT-B{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralPCT-B" name="catatan_oralPCT_B">Bila disertai demam</textarea>
                </td>
            </tr>
            <tr>
                <td>- Ranitidin 2x1</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #95FFFF">
                        <input type="checkbox" id="oral_ranitidin-B{{ $i }}" value="1"
                            name="oral_ranitidin_B[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oral_ranitidin-B{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanOralRanitidin-B" name="catatan_oralRanitidin_B">Bila disertai mual</textarea>
                </td>
            </tr>
            <tr>
                <td>10. TATA LAKSANA/INTERVENSI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. TATA LAKSANA/INTERVENSI MEDIS</td>
                <td>Medikamentosa</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                            name="intervensi_medika[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatmedMedika" name="catatan_tatmedMedika"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="8">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC : 4120 Manajemen cairan dan elektrolit</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                            name="intervensi_elektrolit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepElektrolit{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="8">
                    <textarea rows="20" class="form-control" id="catatanTatkepElektrolit" name="catatan_tatkepElektrolit">Mengacu pada NIC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. NIC: 1400 Manajemen nyeri</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                            name="intervensi_nyeri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. NIC : 0460 Manajemen diare</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepDiare{{ $i }}" value="1"
                            name="intervensi_diare[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepDiare{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. NIC : 1100 Manajemen nutrisi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                            name="intervensi_nutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. NIC : 1750 Perawatan perianal</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepPerianal{{ $i }}" value="1"
                            name="intervensi_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepPerianal{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. NIC : 4310 Pemenuhan ADL</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="tatkepADL{{ $i }}" value="1"
                            name="intervensi_ADL[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepADL{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>g. NIC : 4190 Kolaborasi pemasangan infus</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                            name="intervensi_infus[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>h. NIC : 2380 Kolaborasi pemberian obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatkepObat{{ $i }}" value="1"
                            name="intervensi_obat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Memberikan makanan berdasarkan kebutuhan gizi dalam bentuk cair, saring, lunak, biasa, secara
                    bertahap sesuai dengan kondisi klinis, dengan jenis diet rendah sisa</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                            name="intervensi_gizi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatgizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatgizi" name="catatan_tatgizi"></textarea>
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                            name="intervensi_dpjp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanTatfarmDPJP" name="catatan_tatfarmDPJP">Sesuai dengan hasil monitoring</textarea>
                </td>
            </tr>
            <tr>
                <td>11. MONITORING & EVALUASI (monitor perkembangan pasien)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DOKTER DPJP</td>
                <td>Asesmen Ulang & Review Verifikasi Rencana Asuhan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1" style="background-color: #FEA8B9">
                        <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                            name="monev_dpjp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevDPJP" name="catatan_monevDPJP">Monitor perkembangan pasien</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. Monitoring vital sign pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                            name="monev_vital[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">
                    <textarea rows="12" class="form-control" id="catatanMonevkepVital" name="catatan_monevkepVital">Mengacu pada NOC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Monitoring intake dan output cairan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepCairan{{ $i }}" value="1"
                            name="monev_cairan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepCairan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring frekuensi karakteristik diare</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepDiare{{ $i }}" value="1"
                            name="monev_diare[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepDiare{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Monitoring tanda rehidrasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepRehidrasi{{ $i }}" value="1"
                            name="monev_rehidrasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepRehidrasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring integritas kulit perianal</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevkepPerianal{{ $i }}" value="1"
                            name="monev_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepPerianal{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                            name="monev_makanan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">Sesuai dengan masalah gizi dan tanda gejala yang akan dilihat kemajuannya. Monev pada hari ke 4 atau ke 5 kecuali asupan makanan</textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                            name="monev_antropometri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziAntropometri"
                        name="catatan_monevgiziAntropometri"></textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring biokimia</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevgiziBiokimia{{ $i }}" value="1"
                            name="monev_biokimia[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziBiokimia{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziBiokimia" name="catatan_monevgiziBiokimia"></textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring fisik/klinis terkait gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="monevgiziFisik{{ $i }}" value="1"
                            name="monev_fisik[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziFisik{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanMonevgiziFisik" name="catatan_monevgiziFisik"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring efektivitas obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                            name="monev_efektiv[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmEfektiv{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanMonevfarmEfektiv" name="catatan_monevfarmEfektiv">Dilanjutkan dengan intervensi farmasi yang sesuai hasil monitoring</textarea>
                </td>
            </tr>
            <tr>
                <td>Monitoring interaksi obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                            name="monev_interaksi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Monitoring efek samping obat</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                            name="monev_efek[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmEfek{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>12. MOBILISASI/REHABILITASI</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="mobmed{{ $i }}" value="1"
                            name="mob_medis[ {{ $i }} ]" />
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
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="mobkep{{ $i }}" value="1"
                            name="mob_keperawatan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. FISIOTERAPI</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #95FFFF" @endif>
                        <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                            name="mob_fisio[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>13. OUTCOME/HASIL</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. MEDIS</td>
                <td>Batuk atau sesak teratasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedBatuk{{ $i }}" value="1"
                            name="hasil_batuk[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasmedBatuk{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedBatuk" name="catatan_hasmedBatuk"></textarea>
                </td>
            </tr>
            <tr>
                <td>Demam teratasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasmedDemam{{ $i }}" value="1"
                            name="hasil_demam[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasmedDemam{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedDemam" name="catatan_hasmedDemam"></textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Tanda vital dalam batas normal</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i > 0 && $i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                            name="hasil_vital[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedVital" name="catatan_hasmedVital">Mengacu pada NOC</textarea>
                </td>
            </tr>
            <tr>
                <td>b. Indeks output seimbang</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                            name="hasil_seimbang[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepSeimbang{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHasmedSeimbang" name="catatan_hasmedSeimbang"></textarea>
                </td>
            </tr>
            <tr>
                <td>c. Integritas kulit perianal baik</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 2) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="haskepPerianal{{ $i }}" value="1"
                            name="hasil_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepPerianal{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    <textarea rows="3" class="form-control" id="catatanHaskepPerianal" name="catatan_haskepPerianal">Dilakukan dalam 3 shift</textarea>
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                            name="hasil_asupan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasgiziAsupan" name="catatan_hasgiziAsupan">Status Gizi berdasarkan antropometri, biokimia, fisik/klinis</textarea>
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                            name="hasil_status[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. FARMASI</td>
                <td>Terapi obat sesuai indikasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                            name="hasil_terapi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziTerapi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanHasgiziTerapi" name="catatan_hasgiziTerapi">Meningkatkan kualitas hidup pasien</textarea>
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i < 3) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                            name="hasil_rasional[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziRasional{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">14. KRITERIA PULANG</td>
                <td>Umum: hemodinamik stabil, keluhan berkurang atau hilang</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                            name="pulang_umum[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="pulangUmum{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    <textarea rows="5" class="form-control" id="catatanPulangUmum" name="catatan_pulangUmum">Status pasien/tanda vital sesuai dengan PPK</textarea>
                </td>
            </tr>
            <tr>
                <td>Khusus: tidak ada komplikasi</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                            name="pulang_khusus[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="pulangKhusus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">
                    15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN
                </td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                            name="rencana_resume[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    <textarea rows="6" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">Pasien membawa Resume Perawatan/Surat Rujukan/Surat Kontrol/Homecare saat pulang</textarea>
                </td>
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                            name="rencana_penjelasan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Surat pengantar kontrol</td>
                @for ($i = 0; $i < 5; $i++)
                    <td class="text-center p-1"
                        @if ($i === 4) style="background-color: #FEA8B9" @endif>
                        <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                            name="rencana_surat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>VARIAN</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>
