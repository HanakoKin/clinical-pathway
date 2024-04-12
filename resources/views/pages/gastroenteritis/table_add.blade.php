<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5">KEGIATAN</th>
                <th rowspan="5" class="min-w-180">URAIAN KEGIATAN</th>
                <th colspan="7" class="min-w-250">HARI PENYAKIT</th>
                <th rowspan="5">KETERANGAN</th>
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
                            name="hari_penyakit[ {{ $i }} ]" />
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
                <td>1. ASESMEN AWAL</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN AWAL MEDIS</td>
                <td>Dokter IGD</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                            name="asesment_igd[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                    </td>
                @endfor
                <td>Pasien masuk melalui IGD</td>
            </tr>
            <tr>
                <td>Dokter Spesialis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                            name="asesment_spesialis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDokSpe{{ $i }}"></label>
                    </td>
                @endfor
                <td>Pasien masuk melalui RJ</td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>
                    Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital,
                        riwayat alergi, skrining gizi, nyeri</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                            name="asesment_primer[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesPerPri{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    Dilanjutkan dengan asesmen bio, psiko, sosial, spiritual,
                    dan budaya
                </td>
            </tr>
            <tr>
                <td rowspan="3">2. LABORATORIUM</td>
                <td>Hb, Ht, Leukosit, LED, Ureum, Creatinin, GDS</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="labHb{{ $i }}" value="1"
                            name="lab_hb[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labHb{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Tinja makroskopis dan mikroskopis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="labTinja{{ $i }}" value="1"
                            name="lab_tinja[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labTinja{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="labVarian{{ $i }}" value="1"
                            name="lab_varian[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="labVarian{{ $i }}"></label>
                    </td>
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td>3. RADIOLOGI/IMAGING</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="radiologi{{ $i }}" value="1"
                            name="radiologi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="radiologi{{ $i }}"></label>
                    </td>
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td>4. KONSULTASI</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="konsul{{ $i }}" value="1"
                            name="konsultasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                    </td>
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td>5. ASESMEN LANJUTAN</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN MEDIS</td>
                <td>Dokter DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                            name="ases_DPJP[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>Visit harian/Follow up</td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dokter Ruangan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                            name="ases_nonDPJP[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>Atas Indikasi/Emergency</td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                            name="ases_PPJ[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                    </td>
                @endfor
                <td>Dilakukan dalam 3 shift</td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Skrining Gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                            name="ases_gizi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesGizi{{ $i }}"></label>
                    </td>
                @endfor
                <td>
                    Lihat risiko malnutrisi melalui skrining gizi dan mengkaji
                    data antropometri, biokimia, fisik/klinis, riwayat makan
                    termasuk alergi makanan serta riwayat personal. Asesmen
                    dilakukan dalam waktu 48 jam
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesResep{{ $i }}" value="1"
                            name="ases_resep[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    Dilanjutkan dengan intervensi farmasi yang sesuai hasil
                    Telaah dan Rekonsiliasi obat
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="asesObat{{ $i }}" value="1"
                            name="ases_obat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>6. DIAGNOSIS</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DIAGNOSIS MEDIS</td>
                <td>Gastroenteritis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagGastroenteritis{{ $i }}" value="1"
                            name="diagnosa_medis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGastroenteritis{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td rowspan="7">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 00013 Diare</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagDiare{{ $i }}" value="1"
                            name="diagnosa_diare[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagDiare{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="7">
                    Masalah keperawatan yang dijumpai setiap hari. Dibuat oleh
                    perawat penanggung jawab
                </td>
            </tr>
            <tr>
                <td>b. Kode : 00025 Risiko ketidakseimbangan volume cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagCairan{{ $i }}" value="1"
                            name="diagnosa_cairan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagCairan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Kode : 00195 Risiko ketidakseimbangan elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagElektrolit{{ $i }}" value="1"
                            name="diagnosa_elektrolit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagElektrolit{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Kode : 00002 Ketidakseimbangan nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                            name="diagnosa_nutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagHipertermia{{ $i }}" value="1"
                            name="diagnosa_hipertermia[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagHipertermia{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. Kode : 00132 Nyeri akut</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                            name="diagnosa_akut[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>g. Kode : 00046 Kerusakan integritas kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
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
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagGiziNI3-{{ $i }}" value="1"
                            name="diagnosa_NI3[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziNI3-{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    Sesuai dengan data asesmen, kemungkinan saja ada diagnosis
                    lain atau diagnosis berubah selama perawatan
                </td>
            </tr>
            <tr>
                <td>Tidak cukupnya asupan mineral berkaitan dengan pengeluaran yang tinggi (diare) ditandai dengan
                    estimasi asupan kurang dari kebutuhan, malabsorbsi (NI – 5.10.1)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagGiziNI5-{{ $i }}" value="1"
                            name="diagnosa_NI5[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziNI5-{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Asupan oral inadekuat berkaitan dengan tidak nafsu makan ditandai dengan asupan energi dan protein
                    kurang dari kebutuhan (NI – 2.1)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="diagGiziNI2-{{ $i }}" value="1"
                            name="diagnosa_NI2[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="diagGiziNI2-{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">7. DISCHARGE PLANNING</td>
                <td>Identifikasi kebutuhan edukasi & latihan selama perawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="disPlanEdukasi{{ $i }}" value="1"
                            name="displan_edukasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanEdukasi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="4">
                    Program pendidikan pasien dan keluarga
                </td>
            </tr>
            <tr>
                <td>Identifikasi kebutuhan di rumah</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="disPlanRumah{{ $i }}" value="1"
                            name="displan_rumah[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanRumah{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Hand hygiene</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="disPlanHygenie{{ $i }}" value="1"
                            name="displan_hygenie[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanHygenie{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Kualitas hidup sehat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="disPlanSehat{{ $i }}" value="1"
                            name="displan_sehat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="disPlanSehat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>8. EDUKASI TERINTEGRASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. EDUKASI/INFORMASI MEDIS</td>
                <td>Penjelasan Diagnosis</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                            name="edukasi_diagnosis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    Oleh semua pemberi asuhan berdasarkan kebutuhan dan juga
                    berdasarkan Discharge Planning
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                            name="edukasi_terapi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Informed Consent</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                            name="edukasi_consent[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>Menginformasikan status gizi, jenis diet, tujuan diet, bentuk makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="egiz{{ $i }}" value="1"
                            name="edukasi_gizi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                    </td>
                @endfor
                <td>Edukasi gizi dilakukan saat awal masuk dan atau pada hari ke 1/hari ke 2</td>
            </tr>
            <tr>
                <td rowspan="3">c. EDUKASI KEPERAWATAN</td>
                <td>a. Hand hygiene</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="ekepHygenie{{ $i }}" value="1"
                            name="edukasi_hygenie[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepHygenie{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">Pengisian formulir informasi dan edukasi terintegrasi oleh pasien dan atau keluarga
                </td>
            </tr>
            <tr>
                <td>b. Menjaga kebersihan makanan dan peralatan makan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="ekepKebersihan{{ $i }}" value="1"
                            name="edukasi_kebersihan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepKebersihan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Cara perawatan perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="ekepPerianal{{ $i }}" value="1"
                            name="edukasi_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="ekepPerianal{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI</td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                            name="edukasi_info[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">Meningkatkan kepatuhan pasien meminum/menggunakan obat</td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                            name="edukasi_konseling[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                            name="lembar_edukasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                    </td>
                @endfor
                <td>DTT keluarga/pasien</td>
            </tr>
            <tr>
                <td>9. TERAPI/MEDIKAMENTOSA</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="7">a. INJEKSI</td>
                <td>Antibiotik : </td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ciprofloxacin 2x400 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectCiprofloxacin{{ $i }}" value="1"
                            name="injeksi_ciprofloxacin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectCiprofloxacin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ceftriaxon 1x2 gram</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectCeftriaxon{{ $i }}" value="1"
                            name="injeksi_ceftriaxon[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectCeftriaxon{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Levofloxacin 1x500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectLevofloxacin{{ $i }}" value="1"
                            name="injeksi_levofloxacin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectLevofloxacin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Antispamodil : Buscopan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectBuscopan{{ $i }}" value="1"
                            name="injeksi_buscopan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectBuscopan{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Antimual : Ondansentron, Metochlopramid</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectAntimual{{ $i }}" value="1"
                            name="injeksi_antimual[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectAntimual{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Antipiretik : Parasetamol, Metamizol bila demam</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="injectAntipiretik{{ $i }}" value="1"
                            name="injeksi_antipiretik[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="injectAntipiretik{{ $i }}"></label>
                    </td>
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td rowspan="3">b. CAIRAN INFUS</td>
                <td>Kristaloid</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                            name="injeksi_kristaloid[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="infusKristaloid{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Koloid (bila syok)</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="infusKoloid{{ $i }}" value="1"
                            name="injeksi_koloid[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="infusKoloid{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="infusVarian{{ $i }}" value="1"
                            name="injeksi_varian[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="infusVarian{{ $i }}"></label>
                    </td>
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td rowspan="14">c. OBAT ORAL</td>
                <td>Antibiotik : </td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
                <td>Sebagai obat pulang atau bila ada indikasi</td>
            </tr>
            <tr>
                <td>- Metronidazol 3x250 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralMetronidazol{{ $i }}" value="1"
                            name="oral_metronidazol[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralMetronidazol{{ $i }}"></label>
                    </td>
                @endfor
                <td>Amuba positif</td>
            </tr>
            <tr>
                <td>- Kotrimoksazol 2x960 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralKotrimoksazol{{ $i }}" value="1"
                            name="oral_kotrimoksazol[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralKotrimoksazol{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Eritromisin 4x250 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralEritromisin{{ $i }}" value="1"
                            name="oral_eritromisin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralEritromisin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Klaritromisin 4x250 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralKlaritromisin{{ $i }}" value="1"
                            name="oral_klaritromisin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralKlaritromisin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Doksisiklin 1x200 mg dilanjutkan 1x100 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralDoksisiklin{{ $i }}" value="1"
                            name="oral_doksisiklin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralDoksisiklin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Cefixime 2x200 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralCefixime{{ $i }}" value="1"
                            name="oral_cefixime[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralCefixime{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ciprofloxacin 2x500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralCiprofloxacin{{ $i }}" value="1"
                            name="oral_ciprofloxacin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralCiprofloxacin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Levofloxacin 1x500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralLevofloxacin{{ $i }}" value="1"
                            name="oral_levofloxacin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralLevofloxacin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Amoxicillin 4x750 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralAmoxicillin{{ $i }}" value="1"
                            name="oral_amoxicillin[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralAmoxicillin{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Antimotilitas : Loperamide, Bismuth subsalisilate, Attapulgite, Smectite</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralAntimotilitas{{ $i }}" value="1"
                            name="oral_antimotilitas[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralAntimotilitas{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Antispasmodik : Buscopan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralBuscopan{{ $i }}" value="1"
                            name="oral_buscopan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralBuscopan{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Antimual : Ondansentron, Metoklopramid, Domperidon</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralOndansentron{{ $i }}" value="1"
                            name="oral_ondansentron[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralOndansentron{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Antipiretik : Parasetamol, Metamizol bila demam</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="oralParasetamol{{ $i }}" value="1"
                            name="oral_parasetamol[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="oralParasetamol{{ $i }}"></label>
                    </td>
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td>10. TATA LAKSANA/INTERVENSI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. TATA LAKSANA/INTERVENSI MEDIS</td>
                <td>Medikamentosa</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                            name="intervensi_medika[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td rowspan="8">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC : 4120 Manajemen cairan dan elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                            name="intervensi_elektrolit[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepElektrolit{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="8">Mengaju pada NIC</td>
            </tr>
            <tr>
                <td>b. NIC: 1400 Manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                            name="intervensi_nyeri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. NIC : 0460 Manajemen diare</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatkepDiare{{ $i }}" value="1"
                            name="intervensi_diare[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepDiare{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. NIC : 1100 Manajemen nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                            name="intervensi_nutrisi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepNutrisi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. NIC : 1750 Perawatan perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatkepPerianal{{ $i }}" value="1"
                            name="intervensi_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepPerianal{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>f. NIC : 4310 Pemenuhan ADL</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatkepADL{{ $i }}" value="1"
                            name="intervensi_ADL[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepADL{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>g. NIC : 4190 Kolaborasi pemasangan infus</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                            name="intervensi_infus[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>h. NIC : 2380 Kolaborasi pemberian obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
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
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                            name="intervensi_gizi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatgizi{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                            name="intervensi_dpjp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>Sesuai dengan hasil monitoring</td>
            </tr>
            <tr>
                <td>11. MONITORING & EVALUASI (monitor perkembangan pasien)</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DOKTER DPJP</td>
                <td>Asesmen Ulang & Review Verifikasi Rencana Asuhan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                            name="monev_dpjp[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                    </td>
                @endfor
                <td>Monitor perkembangan pasien</td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. Monitoring vital sign pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                            name="monev_vital[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="5">Mengacu pada NOC</td>
            </tr>
            <tr>
                <td>b. Monitoring intake dan output cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevkepCairan{{ $i }}" value="1"
                            name="monev_cairan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepCairan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring frekuensi karakteristik diare</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevkepDiare{{ $i }}" value="1"
                            name="monev_diare[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepDiare{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>d. Monitoring tanda rehidrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevkepRehidrasi{{ $i }}" value="1"
                            name="monev_rehidrasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepRehidrasi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring integritas kulit perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevkepPerianal{{ $i }}" value="1"
                            name="monev_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevkepPerianal{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                            name="monev_makanan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                    </td>
                @endfor
                <td>Sesuai dengan masalah gizi dan tanda gejala yang akan dilihat kemajuannya. Monev pada hari ke 4
                    atau ke 5 kecuali asupan makanan</td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                            name="monev_antropometri[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Monitoring biokimia</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevgiziBiokimia{{ $i }}" value="1"
                            name="monev_biokimia[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziBiokimia{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>Monitoring fisik/klinis terkait gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevgiziFisik{{ $i }}" value="1"
                            name="monev_fisik[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevgiziFisik{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring efektivitas obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                            name="monev_efektiv[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmEfektiv{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">Dilanjutkan dengan intervensi farmasi yang sesuai hasil monitoring</td>
            </tr>
            <tr>
                <td>Monitoring interaksi obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                            name="monev_interaksi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Monitoring efek samping obat</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                            name="monev_efek[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="monevfarmEfek{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>12. MOBILISASI/REHABILITASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="mobmed{{ $i }}" value="1"
                            name="mob_medis[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">Tahapan mobilisasi sesuai kondisi pasien</td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td>Dibantu sebagian/mandiri</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="mobkep{{ $i }}" value="1"
                            name="mob_keperawatan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>c. FISIOTERAPI</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                            name="mob_fisio[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>13. OUTCOME/HASIL</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. MEDIS</td>
                <td>Dehidrasi teratasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="hasmedDehidrasi{{ $i }}" value="1"
                            name="hasil_dehidrasi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasmedDehidrasi{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>BAB kurang dari 3 kali sehari dengan ampas positif</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="hasmedBAB{{ $i }}" value="1"
                            name="hasil_BAB[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasmedBAB{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Tanda vital dalam batas normal</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                            name="hasil_vital[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                    </td>
                @endfor
                <td>Mengacu pada NOC</td>
            </tr>
            <tr>
                <td>b. Indeks output seimbang</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                            name="hasil_Seimbang[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepSeimbang{{ $i }}"></label>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>c. Integritas kulit perianal baik</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="haskepPerianal{{ $i }}" value="1"
                            name="hasil_perianal[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="haskepPerianal{{ $i }}"></label>
                    </td>
                @endfor
                <td>Dilakukan dalam 3 shift</td>
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                            name="hasil_asupan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">
                    Status Gizi berdasarkan antropometri, biokimia, fisik/klinis
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                            name="hasil_status[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. FARMASI</td>
                <td>Terapi obat sesuai indikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                            name="hasil_terapi[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziTerapi{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">Meningkatkan kualitas hidup pasien</td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                            name="hasil_rasional[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="hasgiziRasional{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">14. KRITERIA PULANG</td>
                <td>Umum: hemodinamik stabil, keluhan berkurang atau hilang</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                            name="pulang_umum[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="pulangUmum{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="2">Status pasien/tanda vital sesuai dengan PPK</td>
            </tr>
            <tr>
                <td>Khusus: tidak ada komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                            name="pulang_khusus[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="pulangKhusus{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="pulangVarian{{ $i }}" value="1"
                            name="pulang_varian[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="pulangVarian{{ $i }}"></label>
                    </td>
                @endfor
                <td>Varian</td>
            </tr>
            <tr>
                <td rowspan="3">
                    15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN
                </td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                            name="rencana_resume[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                    </td>
                @endfor
                <td rowspan="3">
                    Pasien membawa Resume Perawatan/Surat Rujukan/Surat
                    Kontrol/Homecare saat pulang
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                            name="rencana_penjelasan[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>Surat pengantar kontrol</td>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center p-1">
                        <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                            name="rencana_surat[ {{ $i }} ]" />
                        <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>VARIAN</td>
                @for ($i = 0; $i < 9; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>
