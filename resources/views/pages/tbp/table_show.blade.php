<div class="table-responsive">
    <table id="" class="table table-bordered display margin-top-10">
        <thead class="text-center">
            <tr>
                <th rowspan="5" class="min-w-100">KEGIATAN</th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-50 @elseif ($cmd === 'show') min-w-180 @endif">
                    URAIAN KEGIATAN</th>
                <th colspan="5">HARI PENYAKIT </th>
                <th rowspan="5"
                    class="@if ($cmd === 'edit') min-w-250 @elseif ($cmd === 'show') min-w-100 @endif">
                    KETERANGAN</th>
            </tr>
            <tr>
                @for ($i = 1; $i <= 5; $i++)
                    <th>{{ $i }}</th>
                @endfor
            </tr>
            <tr>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat alergi,
                        skrining gizi, suhu</p>
                </td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->asesment_perawat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPerPri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPerPri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif>
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
                <td rowspan="5">2. LABORATORIUM</td>
                <td>Hb, Ht, Leukosit, LED, Ureum, Creatinin, GDS</td>
                @for ($i = 0; $i < 5; $i++)
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
                <td>SGOT, SGPT, Bilirubin, asam urat</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_SGOT))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labSGOT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_SGOT[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labSGOT{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labSGOT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_SGOT[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labSGOT{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labSGOT)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabSGOT" name="catatan_labSGOT">{{ $data->catatan_labSGOT }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Sputum BTA langsung 2x</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_langsung))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labBTALangsung{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_langsung[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labBTALangsung{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labBTALangsung{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_langsung[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labBTALangsung{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labBTALangsung)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabBTALangsung" name="catatan_labBTALangsung">{{ $data->catatan_labBTALangsung }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Sputum BTA kultur</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_kultur))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labBTAKultur{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_kultur[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labBTAKultur{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="labBTAKultur{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_kultur[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labBTAKultur{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labBTAKultur)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabBTAKultur" name="catatan_labBTAKultur">{{ $data->catatan_labBTAKultur }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Gene expert / TCM</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->lab_expert))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labExpert{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_expert[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labExpert{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labExpert{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_expert[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labExpert{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labExpert)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabExpert" name="catatan_labExpert">{{ $data->catatan_labExpert }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>Foto toraks PA dan atau dg lateral</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->radio_foto))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radFoto{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_foto[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radFoto{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radFoto{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_foto[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radFoto{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radFoto)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadFoto" name="catatan_radFoto">{{ $data->catatan_radFoto }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>CT scan thorax dg kontras</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->radio_CT))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="radCT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_CT[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radCT{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="radCT{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_CT[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radCT{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radCT)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadCT" name="catatan_radCT">{{ $data->catatan_radCT }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>4. KONSULTASI</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. ASESMEN MEDIS</td>
                <td>Dokter DPJP</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->ases_DPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->ases_nonDPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DIAGNOSIS MEDIS</td>
                <td>TB Paru</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->diagnosa_medis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagTBParu{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagTBParu{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 3) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagTBParu{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagTBParu{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagTBParu)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanDiagTBParu" name="catatan_diagTBParu">{{ $data->catatan_diagTBParu }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="7">b. DIAGNOSIS KEPERAWATAN</td>
                <td>a. Kode : 00013 Diare</td>
                @for ($i = 0; $i < 5; $i++)
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
                        <textarea rows="20" class="form-control" id="catatanDiagDiare" name="catatan_diagDiare">{{ $data->catatan_diagDiare }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Kode : 00025 Risiko ketidakseimbangan volume cairan</td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                    Peningkatan kebutuhan cairan berkaitan dengan diare ditandai dengan estimasi asupan cairan kurang
                    dari kebutuhan (NI - 3.1)
                </td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_hygenie))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanHygenie{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_hygenie[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanHygenie{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->displan_sehat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanSehat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_sehat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanSehat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. EDUKASI/INFORMASI MEDIS</td>
                <td>Penjelasan Diagnosis</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_diagnosis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedDiag{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diagnosis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedDiag{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_terapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->edukasi_consent))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="emedConsent{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_consent[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="emedConsent{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">a. INJEKSI</td>
                <td>Antibiotik :</td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injeksi)) !!}
                    @else
                        <textarea rows="8" class="form-control" id="catatanInjeksi" name="catatan_injeksi">{{ $data->catatan_injeksi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Levifloksasin 1x500 mg drip</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->injeksi_levifloksasin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectLevifloksasin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_levifloksasin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectLevifloksasin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectLevifloksasin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_levifloksasin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectLevifloksasin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>- Streptomisin 1x750 mg IM</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->injeksi_streptomisin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectStreptomisin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_streptomisin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectStreptomisin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectStreptomisin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_streptomisin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectStreptomisin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>- Asam transenamat 3x500 mg iv</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->injeksi_transenamat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectTransenamat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_transenamat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectTransenamat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="injectTransenamat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_transenamat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectTransenamat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>Kristaloid : NaCol 0,9% / D5%</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->injeksi_kristaloid))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="infusKristaloid{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_kristaloid[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusKristaloid{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                <td rowspan="15">c. OBAT ORAL</td>
                <td>Oral antituberkulosis (OAT) :</td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Rifampicin 1x450 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_rifampicin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_rifampicin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_rifampicin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_rifampicin{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_rifampicin{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_rifampicin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_rifampicin{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralRifampicin)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralRifampicin" name="catatan_oralRifampicin">{{ $data->catatan_oralRifampicin }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    - INH 1x300 mg atau INH forte (sudah dengan B6) 1x400 mg
                </td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_INH))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_INH{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_INH[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_INH{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_INH{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_INH[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_INH{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralINH)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralINH" name="catatan_oralINH">{{ $data->catatan_oralINH }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Pirazinamide 1x1000 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_pirazinamide))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_pirazinamide{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_pirazinamide[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_pirazinamide{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_pirazinamide{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_pirazinamide[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_pirazinamide{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralPirazinamide)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralPirazinamide" name="catatan_oralPirazinamide">{{ $data->catatan_oralPirazinamide }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Etambutol 1x1000 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_etambutol))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_etambutol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_etambutol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_etambutol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_etambutol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_etambutol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_etambutol{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralEtambutol)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralEtambutol" name="catatan_oralEtambutol">{{ $data->catatan_oralEtambutol }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Lain-lain :</td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ambroksol 3x1 tab atau asetisistein 3x200 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_ambroksol_A))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ambroksol-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ambroksol_A[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_ambroksol-A{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ambroksol-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ambroksol_A[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_ambroksol-A{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralAmbroksol_A)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralAmbroksol-A" name="catatan_oralAmbroksol_A">{{ $data->catatan_oralAmbroksol_A }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Salbutamol 3x2 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_salbutamol_A))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_salbutamol-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_salbutamol_A[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_salbutamol-A{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_salbutamol-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_salbutamol_A[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_salbutamol-A{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralSalbutamol_A)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralSalbutamol-A" name="catatan_oralSalbutamol_A">{{ $data->catatan_oralSalbutamol_A }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- PCT 3x1</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_PCT_A))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_PCT-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_PCT_A[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_PCT-A{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_PCT-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_PCT_A[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_PCT-A{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralPCT_A)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralPCT-A" name="catatan_oralPCT_A">{{ $data->catatan_oralPCT_A }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Ranitidin 2x1</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_ranitidin_A))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ranitidin-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ranitidin_A[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_ranitidin-A{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ranitidin-A{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ranitidin_A[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_ranitidin-A{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralRanitidin_A)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralRanitidin-A" name="catatan_oralRanitidin_A">{{ $data->catatan_oralRanitidin_A }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Lain-lain :</td>
                @for ($i = 0; $i < 5; $i++)
                    <td>
                    </td>
                @endfor
                <td></td>
            </tr>
            <tr>
                <td>- Ambroksol 3x1 tab atau asetisistein 3x200 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_ambroksol_B))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ambroksol-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ambroksol_B[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_ambroksol-B{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ambroksol-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ambroksol_B[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_ambroksol-B{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralAmbroksol_B)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralAmbroksol-B" name="catatan_oralAmbroksol_B">{{ $data->catatan_oralAmbroksol_B }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Salbutamol 3x2 mg</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_salbutamol_B))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_salbutamol-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_salbutamol_B[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_salbutamol-B{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_salbutamol-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_salbutamol_B[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_salbutamol-B{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralSalbutamol_B)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralSalbutamol-B" name="catatan_oralSalbutamol_B">{{ $data->catatan_oralSalbutamol_B }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- PCT 3x1</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_PCT_B))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_PCT-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_PCT_B[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_PCT-B{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_PCT-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_PCT_B[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_PCT-B{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralPCT_B)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralPCT-B" name="catatan_oralPCT_B">{{ $data->catatan_oralPCT_B }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>- Ranitidin 2x1</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->oral_ranitidin_B))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ranitidin-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ranitidin_B[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oral_ranitidin-B{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="oral_ranitidin-B{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ranitidin_B[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oral_ranitidin-B{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralRanitidin_B)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralRanitidin-B" name="catatan_oralRanitidin_B">{{ $data->catatan_oralRanitidin_B }}</textarea>
                    @endif
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. DOKTER DPJP</td>
                <td>Asesmen Ulang & Review Verifikasi Rencana Asuhan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->monev_dpjp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit') style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td></td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. MEDIS</td>
                <td>Batuk atau sesak teratasi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_batuk))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedBatuk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_batuk[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedBatuk{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedBatuk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_batuk[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedBatuk{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedBatuk)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedBatuk" name="catatan_hasmedBatuk">{{ $data->catatan_hasmedBatuk }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Demam teratasi</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_demam))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_demam[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedDemam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasmedDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_demam[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedDemam{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedDemam)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedDemam" name="catatan_hasmedDemam">{{ $data->catatan_hasmedDemam }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Tanda vital dalam batas normal</td>
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->hasil_seimbang))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_seimbang[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepSeimbang{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepSeimbang{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_seimbang[ {{ $i }} ]" @endif>
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                @for ($i = 0; $i < 5; $i++)
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
                <td rowspan="2">14. KRITERIA PULANG</td>
                <td>Umum: hemodinamik stabil, keluhan berkurang atau hilang</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->pulang_umum))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangUmum{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_umum[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangUmum{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->pulang_khusus))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_khusus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangKhusus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangKhusus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_khusus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangKhusus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">
                    15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN
                </td>
                <td>Resume Medis dan Keperawatan</td>
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->rencana_resume))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaResume{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_resume[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaResume{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->rencana_penjelasan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 5; $i++)
                    @if (in_array($i + 1, $data->rencana_surat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaSurat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_surat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaSurat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 4) style="background-color: #FEA8B9" @endif>
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
                @for ($i = 0; $i < 7; $i++)
                    <td>
                    </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>
