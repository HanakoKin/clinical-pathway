<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-50 @elseif ($cmd === 'show') min-w-180 @endif">
                    URAIAN KEGIATAN</th>
                <th colspan="7">HARI PENYAKIT </th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-250 @elseif ($cmd === 'show') min-w-100 @endif">
                    KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 7; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hari_penyakit))
                        <th class="text-center p-1">
                            <input type="checkbox" id="hp{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false"
                            @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                        </th>
                    @else
                        <th class="text-center p-1">
                            <input type="checkbox" id="hp{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false"
                            @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hp{{ $i }}"></label>
                        </th>
                    @endif
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
                    @if (in_array($i + 1, $data->asesment_igd))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_igd[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokIgd{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokIgd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_igd[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokIgd{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDokIgd)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDokIgd" name="catatan_asesDokIgd">{{ $data->catatan_asesDokIgd }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Dokter Spesialis</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_spesialis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_spesialis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokSpe{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokSpe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_spesialis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokSpe{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDokSpe)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDokSpe" name="catatan_asesDokSpe">{{ $data->catatan_asesDokSpe }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat
                        alergi, skrining gizi, nyeri</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_primer))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_primer[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPerPri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_primer[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPerPri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesPer)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesPer" name="catatan_asesPer">{{ $data->catatan_asesPer }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">2. LABORATORIUM</td>
                <td>Hb, Ht, Leukosit, LED, Ureum, Creatinin, GDS</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_hb))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labHb{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_hb[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labHb{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labHb{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_hb[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labHb{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labHb)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabHb" name="catatan_labHb">{{ $data->catatan_labHb }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Tinja makroskopis dan mikroskopis</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_tinja))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labTinja{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_tinja[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labTinja{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labTinja{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_tinja[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labTinja{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labTinja)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabTinja" name="catatan_labTinja">{{ $data->catatan_labTinja }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_varian))
                        <td class="text-center p-1">
                            <input type="checkbox" id="labVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_varian[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labVarian{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="labVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_varian[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labVarian{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labVarian)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabVarian" name="catatan_labVarian">{{ $data->catatan_labVarian }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>3. RADIOLOGI/IMAGING</td>
                <td>Foto toraks PA dan atau dg lateral</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->radiologi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="radiologi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radiologi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radiologi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="radiologi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radiologi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radiologi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radio)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadio" name="catatan_radio">{{ $data->catatan_radio }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>4. KONSULTASI</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->konsultasi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="konsul{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="konsultasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="konsul{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="konsul{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="konsultasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="konsul{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_konsul)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanKonsul" name="catatan_konsul">{{ $data->catatan_konsul }}</textarea>
                    @endif
                </td>
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
                    @if (in_array($i + 1, $data->ases_DPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDPJP" name="catatan_asesDPJP">{{ $data->catatan_asesDPJP }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Dokter non DPJP/dokter Ruangan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_nonDPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesNonDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesNonDPJP" name="catatan_asesNonDPJP">{{ $data->catatan_asesNonDPJP }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN KEPERAWATAN</td>
                <td>Perawat Penanggung Jawab</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_PPJ))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPPJ{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesPPJ)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesPPJ" name="catatan_asesPPJ">{{ $data->catatan_asesPPJ }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>c. ASESMEN GIZI</td>
                <td>Skrining Gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesGizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesGizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesGizi)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesGizi" name="catatan_asesGizi">{{ $data->catatan_asesGizi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. ASESMEN FARMASI</td>
                <td>Telaah Resep</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_resep))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesResep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_resep[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesResep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_resep[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesResep{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesResep)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanAsesResep" name="catatan_asesResep">{{ $data->catatan_asesResep }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rekonsiliasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_obat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_obat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesObat{{ $i }}"></label>
                        </td>
                    @endif
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
                    @if (in_array($i + 1, $data->diagnosa_medis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGastroenteritis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGastroenteritis{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGastroenteritis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGastroenteritis{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagGastroenteritis)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanDiagGastroenteritis" name="catatan_diagGastroenteritis">{{ $data->catatan_diagGastroenteritis }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="7">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 00013 Diare</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_diare))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_diare[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagDiare{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_diare[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagDiare{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="7">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagDiare)) !!}
                    @else
                        <textarea rows="15" class="form-control" id="catatanDiagDiare" name="catatan_diagDiare">{{ $data->catatan_diagDiare }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Kode : 00025 Risiko ketidakseimbangan volume cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_cairan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagCairan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagCairan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Kode : 00195 Risiko ketidakseimbangan elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_elektrolit))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_elektrolit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagElektrolit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_elektrolit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagElektrolit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Kode : 00002 Ketidakseimbangan nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_nutrisi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nutrisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagNutrisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_nutrisi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagNutrisi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_hipertermia))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagHipertermia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hipertermia[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagHipertermia{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagHipertermia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hipertermia[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagHipertermia{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>f. Kode : 00132 Nyeri akut</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_akut))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAkut{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>g. Kode : 00046 Kerusakan integritas kulit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_kulit))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_kulit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagKulit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagKulit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_kulit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagKulit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">c. DIAGNOSIS GIZI</td>
                <td>
                    Peningkatan kebutuhan cairan berkaitan dengan diare ditandai
                    dengan estimasi asupan cairan kurang dari kebutuhan (NI -
                    3.1)
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_NI3))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGiziNI3-{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_NI3[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGiziNI3-{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGiziNI3-{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_NI3[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGiziNI3-{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagGiziNI3)) !!}
                    @else
                        <textarea rows="16" class="form-control" id="catatanDiagGiziNI3" name="catatan_diagGiziNI3">{{ $data->catatan_diagGiziNI3 }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    Tidak cukupnya asupan mineral berkaitan dengan pengeluaran
                    yang tinggi (diare) ditandai dengan estimasi asupan kurang
                    dari kebutuhan, malabsorbsi (NI – 5.10.1)
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_NI5))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGiziNI5-{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_NI5[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGiziNI5-{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGiziNI5-{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_NI5[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGiziNI5-{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>
                    Asupan oral inadekuat berkaitan dengan tidak nafsu makan
                    ditandai dengan asupan energi dan protein kurang dari
                    kebutuhan (NI – 2.1)
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_NI2))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGiziNI2-{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_NI2[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGiziNI2-{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGiziNI2-{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_NI2[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGiziNI2-{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="4">7. DISCHARGE PLANNING</td>
                <td>
                    Identifikasi kebutuhan edukasi & latihan selama perawatan
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_edukasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanEdukasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_edukasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanEdukasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanEdukasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_edukasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanEdukasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_disPlanEdukasi)) !!}
                    @else
                        <textarea rows="8" class="form-control" id="catatanDisPlanEdukasi" name="catatan_disPlanEdukasi">{{ $data->catatan_disPlanEdukasi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Identifikasi kebutuhan di rumah</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_rumah))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanRumah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_rumah[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanRumah{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanRumah{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_rumah[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanRumah{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Hand hygiene</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_hygenie))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanHygenie{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_hygenie[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanHygenie{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanHygenie{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_hygenie[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanHygenie{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kualitas hidup sehat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_sehat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanSehat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_sehat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanSehat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanSehat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_sehat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanSehat{{ $i }}"></label>
                        </td>
                    @endif
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
                    @if (in_array($i + 1, $data->edukasi_diagnosis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diagnosis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diagnosis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="emedDiag{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_emedDiag)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">{{ $data->catatan_emedDiag }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_terapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="emedTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Informed Consent</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_consent))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_consent[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_consent[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="emedConsent{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>b. EDUKASI DAN KONSELING GIZI</td>
                <td>
                    Menginformasikan status gizi, jenis diet, tujuan diet,
                    bentuk makanan
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="egiz{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_egiz)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEgiz" name="catatan_egiz">{{ $data->catatan_egiz }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">c. EDUKASI KEPERAWATAN</td>
                <td>a. Hand hygiene</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_hygenie))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepHygenie{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hygenie[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepHygenie{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepHygenie{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_hygenie[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepHygenie{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekepHygenie)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanEkepHygenie" name="catatan_ekepHygenie">{{ $data->catatan_ekepHygenie }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Menjaga kebersihan makanan dan peralatan makan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_kebersihan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepKebersihan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_kebersihan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepKebersihan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepKebersihan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_kebersihan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepKebersihan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Cara perawatan perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_perianal))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_perianal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepPerianal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_perianal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepPerianal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI</td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_info))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @elseif ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="efarmInf{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_efarmInf)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanEfarmInf" name="catatan_efarmInf">{{ $data->catatan_efarmInf }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Konseling Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_konseling))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 2)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 2)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="efarmKons{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>PENGISIAN FORMULIR INFORMASI DAN EDUKASI TERINTEGRASI</td>
                <td>Lembar Edukasi Terintegrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lembar_edukasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lembar_edukasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="lemEdTer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="lemEdTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lembar_edukasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="lemEdTer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_lemEdTer)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLemEdTer" name="catatan_lemEdTer">{{ $data->catatan_lemEdTer }}</textarea>
                    @endif
                </td>
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
                <td>Antibiotik :</td>
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ciprofloxacin 2x400 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_ciprofloxacin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectCiprofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ciprofloxacin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectCiprofloxacin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectCiprofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ciprofloxacin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectCiprofloxacin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectCiprofloxacin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectCiprofloxacin" name="catatan_injectCiprofloxacin">{{ $data->catatan_injectCiprofloxacin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Ceftriaxon 1x2 gram</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_ceftriaxon))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectCeftriaxon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ceftriaxon[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectCeftriaxon{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectCeftriaxon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ceftriaxon[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectCeftriaxon{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectCeftriaxon)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectCeftriaxon" name="catatan_injectCeftriaxon">{{ $data->catatan_injectCeftriaxon }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Levofloxacin 1x500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_levofloxacin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectLevofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_levofloxacin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectLevofloxacin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectLevofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_levofloxacin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectLevofloxacin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectLevofloxacin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectLevofloxacin" name="catatan_injectLevofloxacin">{{ $data->catatan_injectLevofloxacin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antipasmodik : Buscopan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_buscopan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectBuscopan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_buscopan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectBuscopan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectBuscopan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_buscopan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectBuscopan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectBuscopan)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectBuscopan" name="catatan_injectBuscopan">{{ $data->catatan_injectBuscopan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antimual : Ondansentron, Metochlopramid</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_antimual))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectAntimual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_antimual[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectAntimual{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectAntimual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_antimual[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectAntimual{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectAntimual)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectAntimual" name="catatan_injectAntimual">{{ $data->catatan_injectAntimual }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antipiretik : Parasetamol, Metamizol bila demam</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_antipiretik))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectAntipiretik{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_antipiretik[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectAntipiretik{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectAntipiretik{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_antipiretik[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectAntipiretik{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectAntipiretik)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectAntipiretik" name="catatan_injectAntipiretik">{{ $data->catatan_injectAntipiretik }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. CAIRAN INFUS</td>
                <td>Kristaloid</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_kristaloid))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_kristaloid[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusKristaloid{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_kristaloid[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusKristaloid{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_infusKristaloid)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInfusKristaloid" name="catatan_infusKristaloid">{{ $data->catatan_infusKristaloid }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Koloid (bila syok)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_koloid))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="infusKoloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_koloid[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusKoloid{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="infusKoloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_koloid[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusKoloid{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_infusKoloid)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInfusKoloid" name="catatan_infusKoloid">{{ $data->catatan_infusKoloid }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_varian))
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_varian[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusVarian{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="infusVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_varian[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusVarian{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_infusVarian)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInfusVarian" name="catatan_infusVarian">{{ $data->catatan_infusVarian }}</textarea>
                    @endif
                </td>
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
                    @if (in_array($i + 1, $data->oral_metronidazol))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralMetronidazol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_metronidazol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralMetronidazol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralMetronidazol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_metronidazol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralMetronidazol{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralMetronidazol)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralMetronidazol" name="catatan_oralMetronidazol">{{ $data->catatan_oralMetronidazol }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Kotrimoksazol 2x960 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_kotrimoksazol))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralKotrimoksazol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_kotrimoksazol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralKotrimoksazol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralKotrimoksazol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_kotrimoksazol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralKotrimoksazol{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralKotrimoksazol)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralKotrimoksazol" name="catatan_oralKotrimoksazol">{{ $data->catatan_oralKotrimoksazol }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Eritromisin 4x250 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_eritromisin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralEritromisin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_eritromisin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralEritromisin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralEritromisin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_eritromisin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralEritromisin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralEritromisin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralEritromisin" name="catatan_oralEritromisin">{{ $data->catatan_oralEritromisin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Klaritromisin 4x250 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_klaritromisin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralKlaritromisin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_klaritromisin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralKlaritromisin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralKlaritromisin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_klaritromisin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralKlaritromisin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralKlaritromisin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralKlaritromisin" name="catatan_oralKlaritromisin">{{ $data->catatan_oralKlaritromisin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Doksisiklin 1x200 mg dilanjutkan 1x100 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_doksisiklin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralDoksisiklin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_doksisiklin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralDoksisiklin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralDoksisiklin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_doksisiklin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralDoksisiklin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralDoksisiklin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralDoksisiklin" name="catatan_oralDoksisiklin">{{ $data->catatan_oralDoksisiklin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Cefixime 2x200 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_cefixime))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralCefixime{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_cefixime[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralCefixime{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralCefixime{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_cefixime[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralCefixime{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralCefixime)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralCefixime" name="catatan_oralCefixime">{{ $data->catatan_oralCefixime }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Ciprofloxacin 2x500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_ciprofloxacin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralCiprofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ciprofloxacin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralCiprofloxacin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralCiprofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ciprofloxacin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralCiprofloxacin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralCiprofloxacin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralCiprofloxacin" name="catatan_oralCiprofloxacin">{{ $data->catatan_oralCiprofloxacin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Levofloxacin 1x500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_levofloxacin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralLevofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_levofloxacin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralLevofloxacin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralLevofloxacin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_levofloxacin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralLevofloxacin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralLevofloxacin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralLevofloxacin" name="catatan_oralLevofloxacin">{{ $data->catatan_oralLevofloxacin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Amoxicillin 4x750 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_amoxicillin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralAmoxicillin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_amoxicillin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralAmoxicillin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralAmoxicillin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_amoxicillin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralAmoxicillin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralAmoxicillin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralAmoxicillin" name="catatan_oralAmoxicillin">{{ $data->catatan_oralAmoxicillin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antimotilitas : Loperamide, Bismuth subsalisilate, Attapulgite, Smectite</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_antimotilitas))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralAntimotilitas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_antimotilitas[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralAntimotilitas{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralAntimotilitas{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_antimotilitas[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralAntimotilitas{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralAntimotilitas)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralAntimotilitas" name="catatan_oralAntimotilitas">{{ $data->catatan_oralAntimotilitas }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antispasmodik : Buscopan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_buscopan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralBuscopan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_buscopan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralBuscopan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralBuscopan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_buscopan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralBuscopan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralBuscopan)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralBuscopan" name="catatan_oralBuscopan">{{ $data->catatan_oralBuscopan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antimual : Ondansentron, Metoklopramid, Domperidon</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_ondansentron))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralOndansentron{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ondansentron[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralOndansentron{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oralOndansentron{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ondansentron[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralOndansentron{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralOndansentron)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralOndansentron" name="catatan_oralOndansentron">{{ $data->catatan_oralOndansentron }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antipiretik : Parasetamol, Metamizol bila demam</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_parasetamol))
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralParasetamol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_parasetamol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralParasetamol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="oralParasetamol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_parasetamol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralParasetamol{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralParasetamol)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralParasetamol" name="catatan_oralParasetamol">{{ $data->catatan_oralParasetamol }}</textarea>
                    @endif
                </td>
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
                    @if (in_array($i + 1, $data->intervensi_medika))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medika[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatmedMedika{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatmedMedika{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medika[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatmedMedika{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatmedMedika)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatmedMedika" name="catatan_tatmedMedika">{{ $data->catatan_tatmedMedika }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="8">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC : 4120 Manajemen cairan dan elektrolit</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_elektrolit))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_elektrolit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepElektrolit{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepElektrolit{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_elektrolit[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepElektrolit{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="8">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatkepElektrolit)) !!}
                    @else
                        <textarea rows="20" class="form-control" id="catatanTatkepElektrolit" name="catatan_tatkepElektrolit">{{ $data->catatan_tatkepElektrolit }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. NIC: 1400 Manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. NIC : 0460 Manajemen diare</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_diare))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_diare[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepDiare{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_diare[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepDiare{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. NIC : 1100 Manajemen nutrisi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_nutrisi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nutrisi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepNutrisi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNutrisi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nutrisi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepNutrisi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. NIC : 1750 Perawatan perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_perianal))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_perianal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepPerianal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_perianal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepPerianal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>f. NIC : 4310 Pemenuhan ADL</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_ADL))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatkepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ADL[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepADL{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatkepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ADL[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepADL{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>g. NIC : 4190 Kolaborasi pemasangan infus</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_infus))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepInfus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>h. NIC : 2380 Kolaborasi pemberian obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_obat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_obat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepObat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>
                    Memberikan makanan berdasarkan kebutuhan gizi dalam bentuk
                    cair, saring, lunak, biasa, secara bertahap sesuai dengan
                    kondisi klinis, dengan jenis diet rendah sisa
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatgizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatgizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatgizi)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatgizi" name="catatan_tatgizi">{{ $data->catatan_tatgizi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_dpjp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_dpjp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatfarmDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatfarmDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatfarmDPJP" name="catatan_tatfarmDPJP">{{ $data->catatan_tatfarmDPJP }}</textarea>
                    @endif
                </td>
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
                    @if (in_array($i + 1, $data->monev_dpjp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_dpjp[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevDPJP{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevDPJP)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevDPJP" name="catatan_monevDPJP">{{ $data->catatan_monevDPJP }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="5">b. KEPERAWATAN</td>
                <td>a. Monitoring vital sign pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_vital))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="5">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevkepVital)) !!}
                    @else
                        <textarea rows="12" class="form-control" id="catatanMonevkepVital" name="catatan_monevkepVital">{{ $data->catatan_monevkepVital }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Monitoring intake dan output cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_cairan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepCairan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepCairan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring frekuensi karakteristik diare</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_diare))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_diare[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepDiare{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepDiare{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_diare[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepDiare{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. Monitoring tanda rehidrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_rehidrasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepRehidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_rehidrasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepRehidrasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepRehidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_rehidrasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepRehidrasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. Monitoring integritas kulit perianal</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_perianal))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_perianal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepPerianal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_perianal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepPerianal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="4">c. GIZI</td>
                <td>Monitoring asupan makanan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_makanan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziMakanan)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">{{ $data->catatan_monevgiziMakanan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_antropometri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziAntropometri)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevgiziAntropometri"
                            name="catatan_monevgiziAntropometri">{{ $data->catatan_monevgiziAntropometri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring biokimia</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_biokimia))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziBiokimia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_biokimia[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziBiokimia{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziBiokimia{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_biokimia[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziBiokimia{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziBiokimia)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevgiziBiokimia" name="catatan_monevgiziBiokimia">{{ $data->catatan_monevgiziBiokimia }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring fisik/klinis terkait gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_fisik))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziFisik{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_fisik[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziFisik{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="monevgiziFisik{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_fisik[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziFisik{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziFisik)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanMonevgiziFisik" name="catatan_monevgiziFisik">{{ $data->catatan_monevgiziFisik }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring efektivitas obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_efektiv))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efektiv[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfektiv{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfektiv{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efektiv[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmEfektiv{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevfarmEfektiv)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanMonevfarmEfektiv" name="catatan_monevfarmEfektiv">{{ $data->catatan_monevfarmEfektiv }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring interaksi obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_interaksi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Monitoring efek samping obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_efek))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfek{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfek{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmEfek{{ $i }}"></label>
                        </td>
                    @endif
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
                    @if (in_array($i + 1, $data->mob_medis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobmed{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobmed{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="mobmed{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_mobmed)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanMobmed" name="catatan_mobmed">{{ $data->catatan_mobmed }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td>Dibantu sebagian/mandiri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_keperawatan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobkep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_keperawatan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobkep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_keperawatan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="mobkep{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. FISIOTERAPI</td>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_fisio))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_fisio[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_fisio[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="mobfisio{{ $i }}"></label>
                        </td>
                    @endif
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
                    @if (in_array($i + 1, $data->hasil_dehidrasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedDehidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_dehidrasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedDehidrasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedDehidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_dehidrasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedDehidrasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedDehidrasi)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedDehidrasi" name="catatan_hasmedDehidrasi">{{ $data->catatan_hasmedDehidrasi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>BAB kurang dari 3 kali sehari dengan ampas positif</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_BAB))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedBAB{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_BAB[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedBAB{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedBAB{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_BAB[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedBAB{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedBAB)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedBAB" name="catatan_hasmedBAB">{{ $data->catatan_hasmedBAB }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Tanda vital dalam batas normal</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_vital))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i > 0 && $i < 3)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedVital)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedVital" name="catatan_hasmedVital">{{ $data->catatan_hasmedVital }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Indeks output seimbang</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_Seimbang))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_Seimbang[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepSeimbang{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_Seimbang[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepSeimbang{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedSeimbang)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedSeimbang" name="catatan_hasmedSeimbang">{{ $data->catatan_hasmedSeimbang }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>c. Integritas kulit perianal baik</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_perianal))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_perianal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepPerianal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepPerianal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_perianal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepPerianal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_haskepPerianal)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHaskepPerianal" name="catatan_haskepPerianal">{{ $data->catatan_haskepPerianal }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_asupan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasgiziAsupan)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanHasgiziAsupan" name="catatan_hasgiziAsupan">{{ $data->catatan_hasgiziAsupan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Optimalisasi Status Gizi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_status))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_status[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_status[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziStatus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. FARMASI</td>
                <td>Terapi obat sesuai indikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_terapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasgiziTerapi)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanHasgiziTerapi" name="catatan_hasgiziTerapi">{{ $data->catatan_hasgiziTerapi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_rasional))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_rasional[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziRasional{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziRasional{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_rasional[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasgiziRasional{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">14. KRITERIA PULANG</td>
                <td>Umum: hemodinamik stabil, keluhan berkurang atau hilang</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_umum))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_umum[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangUmum{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_umum[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangUmum{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_pulangUmum)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanPulangUmum" name="catatan_pulangUmum">{{ $data->catatan_pulangUmum }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Khusus: tidak ada komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_khusus))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_khusus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangKhusus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_khusus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangKhusus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td></td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_varian))
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_varian[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangVarian{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="pulangVarian{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_varian[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangVarian{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_pulangVarian)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanPulangVarian" name="catatan_pulangVarian">{{ $data->catatan_pulangVarian }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">
                    15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN
                </td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_resume))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaResume{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_rencanaResume)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanRencanaResume" name="catatan_rencanaResume">{{ $data->catatan_rencanaResume }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Penjelasan diberikan sesuai dengan keadaan umum pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_penjelasan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Surat pengantar kontrol</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_surat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_surat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_surat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaSurat{{ $i }}"></label>
                        </td>
                    @endif
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
