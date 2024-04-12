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
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hp{{ $i }}"></label>
                        </th>
                    @else
                        <th class="text-center p-1">
                            <input type="checkbox" id="hp{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hari_penyakit[ {{ $i }} ]" @endif>
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
                <td>1. ASESMEN AWAL </td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="3">a. ASESMEN AWAL MEDIS</td>
                <td>Dokter Spesialis Mata</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_mata))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokMata{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_mata[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokMata{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokMata{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_mata[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokMata{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDokMata)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDokMata" name="catatan_asesDokMata">{{ $data->catatan_asesDokMata }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Konsultasi dokter Internis</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_internis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokInternis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_internis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokInternis{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokInternis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_internis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokInternis{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDokInternis)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDokInternis" name="catatan_asesDokInternis">{{ $data->catatan_asesDokInternis }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Konsultasi dokter Anestesi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_anestesi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokAnestesi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_anestesi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDokAnestesi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDokAnestesi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_anestesi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesDokAnestesi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_asesDokAnsestesi)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanAsesDokAnsestesi" name="catatan_asesDokAnsestesi">{{ $data->catatan_asesDokAnsestesi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. ASESMEN AWAL KEPERAWATAN</td>
                <td>Perawat Primer :
                    <p>Kondisi umum, tingkat kesadaran, tanda-tanda vital, riwayat alergi, skrining gizi, nyeri</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->asesment_perawat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="asesment_perawat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="asesPer{{ $i }}"></label>
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
                <td rowspan="2">2. LABORATORIUM </td>
                <td>Darah Lengkap, BT, CT, GDS</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_darah))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labDar{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labDar{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labDar{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_darah[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labDar{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labDar)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabDar" name="catatan_labDar">{{ $data->catatan_labDar }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>UR, CR, GDN, GD2PP, Na, K</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lab_UR))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labUR{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_UR[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="labUR{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="labUR{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lab_UR[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="labUR{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_labUR)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLabUR" name="catatan_labUR">{{ $data->catatan_labUR }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">3. RADIOLOGI/IMAGING</td>
                <td>THORAX</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->radio_thorax))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radTho{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_thorax[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radTho{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radTho{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_thorax[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radTho{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radTho)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadTho" name="catatan_radTho">{{ $data->catatan_radTho }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>USG MATA</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->radio_USG))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radUSG{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_USG[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="radUSG{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="radUSG{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="radio_USG[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="radUSG{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_radUSG)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanRadUSG" name="catatan_radUSG">{{ $data->catatan_radUSG }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>4. EKG</td>
                <td>EKG</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ekg))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekg{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ekg[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekg{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekg{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ekg[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekg{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekg)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanEkg" name="catatan_ekg">{{ $data->catatan_ekg }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->ases_DPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_DPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td>Dokter non DPJP/dr. Ruangan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_nonDPJP))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesNonDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_nonDPJP[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesNonDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesPPJ{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_PPJ[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesPPJ{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td>Tenaga Gizi (Nutrisionis/Dietisien)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->ases_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesGizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="asesResep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="ases_resep[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="asesResep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
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
                        <textarea rows="6" class="form-control" id="catatanAsesResep" name="catatan_asesResep">{{ $data->catatan_asesResep }}</textarea>
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
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. DIAGNOSIS MEDIS</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_medis))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagMedis{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMedis{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_medis[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagMedis{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagMedis)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanDiagMedis" name="catatan_diagMedis">{{ $data->catatan_diagMedis }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">b. DIAGNOSIS KEPERAWATAN</td>
                <td>Kode : 00132 Nyeri Akut</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_akut))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagAkut{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagAkut{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_akut[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagAkut{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagAkut)) !!}
                    @else
                        <textarea rows="6" class="form-control" id="catatanDiagAkut" name="catatan_diagAkut">{{ $data->catatan_diagAkut }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Kode : 00007 Hipertermia</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_hiper))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hiper[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagHiper{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagHiper{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_hiper[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagHiper{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kode : 00134 Mual</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_mual))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_mual[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagMual{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_mual[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagMual{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. DIAGNOSIS GIZI</td>
                <td>Prediksi suboptimal asupan energi berkaitan rencana tindakan bedah/operasi ditandai dengan asupan
                    energi lebih rendah dari kebutuhan (NI - 1.4)</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->diagnosa_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="diagGizi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="diagGizi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="diagnosa_gizi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="diagGizi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_diagGizi)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanDiagGizi" name="catatan_diagGizi">{{ $data->catatan_diagGizi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="4">7. DISCHARGE PLANNING</td>
                <td>Informasi tentang aktivitas yang dapat dilakukan sesuai dengan tingkat kondisi pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_aktiv))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanAk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_aktiv[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanAk{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanAk{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_aktiv[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanAk{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_disPlanAk)) !!}
                    @else
                        <textarea rows="15" class="form-control" id="catatanDisPlanAk" name="catatan_disPlanAk">{{ $data->catatan_disPlanAk }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Terapi yang diberikan meliputi kegunaan obat, dosis dan efek samping</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_terapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanTer{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanTer{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanTer{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Diet yang dapat dikonsumsi selama pemulihan kondisi, terutama
                    banyaknya input cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_diet))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_diet[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanDiet{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_diet[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanDiet{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Anjurkan untuk istirahat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->displan_istirahat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanIstirahat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_istirahat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="disPlanIstirahat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="disPlanIstirahat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="displan_istirahat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="disPlanIstirahat{{ $i }}"></label>
                        </td>
                    @endif
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
                        <textarea rows="14" class="form-control" id="catatanEmedDiag" name="catatan_emedDiag">{{ $data->catatan_emedDiag }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rencana terapi</td>
                @for ($i = 0; $i < 7; $i++)
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
                @for ($i = 0; $i < 7; $i++)
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
                <td>Diet pra dan pasca bedah. Makan cair, saring, lunak, biasa secara bertahap setelah operasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_gizi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="egiz{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_gizi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="egiz{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td rowspan="5">c. EDUKASI KEPERAWATAN</td>
                <td>1. Kemampuan melakukan ADL secara mandiri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_ADL))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_ADL[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepADL{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepADL{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_ADL[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepADL{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="5">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_ekepADL)) !!}
                    @else
                        <textarea rows="14" class="form-control" id="catatanEkepADL" name="catatan_ekepADL">{{ $data->catatan_ekepADL }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>2. Manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>3. Tanda-tanda infeksi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_infeksi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_infeksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepInfeksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_infeksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepInfeksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>4. Diet selama perawatan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_diet))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diet[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepDiet{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_diet[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepDiet{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>5. Teknik meredakan mual</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_mual))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_mual[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="ekepMual{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="ekepMual{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_mual[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="ekepMual{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">d. EDUKASI FARMASI </td>
                <td>Informasi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->edukasi_info))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmInf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_info[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmInf{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="efarmKons{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="edukasi_konseling[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="efarmKons{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="2">a. INJEKSI</td>
                <td>Ranitidine 2x1 amp</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_ranitidine))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectRani{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ranitidine[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectRani{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="injectRani{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ranitidine[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectRani{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectRani)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectRani" name="catatan_injectRani">{{ $data->catatan_injectRani }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Ondansentron 2x4 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_ondansentron))
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectOndan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ondansentron[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="injectOndan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="injectOndan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_ondansentron[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="injectOndan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_injectOndan)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInjectOndan" name="catatan_injectOndan">{{ $data->catatan_injectOndan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. CAIRAN INFUS</td>
                <td>RL 3 kolf / 24 jam</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->injeksi_kolf))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="infusKolf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_kolf[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="infusKolf{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #95FFFF" @endif>
                            <input type="checkbox" id="infusKolf{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="injeksi_kolf[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="infusKolf{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_infusKolf)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanInfusKolf" name="catatan_infusKolf">{{ $data->catatan_infusKolf }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">c. OBAT ORAL</td>
                <td>Asam Mefenamat 3 x 500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_mefenamat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="oralMefe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_mefenamat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralMefe{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 4) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="oralMefe{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_mefenamat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralMefe{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralMefe)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralMefe" name="catatan_oralMefe">{{ $data->catatan_oralMefe }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Ciprofloxacin 2 x 500 mg</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->oral_ciprofloxacin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="oralCipro{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ciprofloxacin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="oralCipro{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="oralCipro{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="oral_ciprofloxacin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="oralCipro{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_oralCipro)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanOralCipro" name="catatan_oralCipro">{{ $data->catatan_oralCipro }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="2">d. OBAT LOKAL</td>
                <td>Levofloxacin / Ofloxacin ED 4-6 x 1 gtt</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->lokal_levofloxacin))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="lokalLevo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lokal_levofloxacin[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="lokalLevo{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="lokalLevo{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="lokal_levofloxacin[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="lokalLevo{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_lokalLevo)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLokalLevo" name="catatan_lokalLevo">{{ $data->catatan_lokalLevo }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Antibiotika + Kortikosteroid ED 6 x 1 gtt</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->local_antibiotika))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="localAnti{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="local_antibiotika[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="localAnti{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 5) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="localAnti{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="local_antibiotika[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="localAnti{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_lokalAnti)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanLokalAnti" name="catatan_lokalAnti">{{ $data->catatan_lokalAnti }}</textarea>
                    @endif
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
                    @if (in_array($i + 1, $data->intervensi_ECCE))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatmedECCE{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ECCE[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatmedECCE{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatmedECCE{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_ECCE[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatmedECCE{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatmedECCE)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatmedECCE" name="catatan_tatmedECCE">{{ $data->catatan_tatmedECCE }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="9">b. TATA LAKSANA/INTERVENSI KEPERAWATAN</td>
                <td>a. NIC: 1400 manajemen nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="9">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatkepNyeri)) !!}
                    @else
                        <textarea rows="25" class="form-control" id="catatanTatkepNyeri" name="catatan_tatkepNyeri">{{ $data->catatan_tatkepNyeri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. NIC: 6040 Terapi Relaksasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_terapi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. NIC: 3740 Pengobatan Demam</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_demam))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_demam[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepDemam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepDemam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_demam[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepDemam{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. NIC: 4120 Manajemen Cairan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_cairan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_cairan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepCairan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepCairan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_cairan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepCairan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>e. NIC: 6540 Kontrol Infeksi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_kontrol))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepKontrol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_kontrol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepKontrol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepKontrol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_kontrol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepKontrol{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>f. NIC: 4190 Pemasangan Infus</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_infus))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepInfus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepInfus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_infus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepInfus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>
                    <p>g. NIC: 2314 Medikasi IV & Lokal</p>
                    <p>Pemberian obat tetes mata midriacyl</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_medikasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepMedikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medikasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepMedikasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepMedikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_medikasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepMedikasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>
                    <p>h. NIC: 309 Persiapan Operasi</p>
                    <p>Edukasi, kelengkapan surat, persiapan fisik : puasa, ganti pakaian, cukur bulu mata</p>
                </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_operasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepOperasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_operasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepOperasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepOperasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_operasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepOperasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>i. NIC: 3360 Perawatan Luka</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_luka))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i < 2) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepLuka{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_luka[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatkepLuka{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatkepLuka{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_luka[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatkepLuka{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. TATA LAKSANA/INTERVENSI GIZI</td>
                <td>Diet Biasa</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_diet))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgiziDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_diet[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatgiziDiet{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatgiziDiet{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_diet[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="tatgiziDiet{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_tatgiziDiet)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanTatgiziDiet" name="catatan_tatgiziDiet">{{ $data->catatan_tatgiziDiet }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>d. TATA LAKSANA/INTERVENSI FARMASI</td>
                <td>Rekomendasi kepala DPJP</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->intervensi_dpjp))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="tatfarmDPJP{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="intervensi_dpjp[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="tatfarmDPJP{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td>11. MONITORING & EVALUASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td rowspan="4">a. DOKTER DPJP</td>
                <td>Edukasi post operasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_operasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevOperasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_operasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevOperasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevOperasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_operasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevOperasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevOperasi)) !!}
                    @else
                        <textarea rows="16" class="form-control" id="catatanMonevOperasi" name="catatan_monevOperasi">{{ $data->catatan_monevOperasi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Memeriksa dan monitoring semua kondisi dan keluhan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_periksa))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevPeriksa{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_periksa[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevPeriksa{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevPeriksa{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_periksa[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevPeriksa{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Monitoring Komplikasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_komplikasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevKomplikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_komplikasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevKomplikasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevKomplikasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_komplikasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevKomplikasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Rencana Asuhan / Perawatan luka operasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_perawatan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevPerawatan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_perawatan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevPerawatan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevPerawatan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_perawatan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevPerawatan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">b. KEPERAWATAN</td>
                <td>a. Monitoring penurunan skala nyeri pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_skala))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepSkala{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_skala[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepSkala{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepSkala{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_skala[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepSkala{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevkepSkala)) !!}
                    @else
                        <textarea rows="10" class="form-control" id="catatanMonevkepSkala" name="catatan_monevkepSkala">{{ $data->catatan_monevkepSkala }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. Monitoring tanda-tanda vital pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_vital))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. Monitoring status hidrasi pasien meliputi <span class="fst-italic">balance</span> cairan,
                    terapi intravena dan tanda-tanda dehidrasi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_hidrasi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_hidrasi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevkepHidrasi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevkepHidrasi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_hidrasi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevkepHidrasi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Monitoring asupan makan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_makanan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziMakanan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_makanan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziMakanan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevgiziMakanan)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanMonevgiziMakanan" name="catatan_monevgiziMakanan">{{ $data->catatan_monevgiziMakanan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring Antropometri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_antropometri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevgiziAntropometri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_antropometri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevgiziAntropometri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">d. FARMASI</td>
                <td>Monitoring Interaksi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_interaksi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmInteraksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_interaksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmInteraksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_monevfarmInteraksi)) !!}
                    @else
                        <textarea rows="10" class="form-control" id="catatanMonevfarmInteraksi" name="catatan_monevfarmInteraksi">{{ $data->catatan_monevfarmInteraksi }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Monitoring Efek Samping Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_efek))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfsam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmEfsam{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="monevfarmEfsam{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_efek[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmEfsam{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Pemantauan Terapi Obat</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->monev_terapi))
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="monevfarmTerapi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="monevfarmTerapi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="monev_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="monevfarmTerapi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>12. MOBILISASI/REHABILITASI</td>
                @for ($i = 0; $i < 9; $i++)
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_medis))
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobmed{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_medis[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobmed{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
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
                        <textarea rows="10" class="form-control" id="catatanMobmed" name="catatan_mobmed">{{ $data->catatan_mobmed }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. KEPERAWATAN</td>
                <td>Posisi tidur dan sehari-hari</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_keperawatan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="mobkep{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_keperawatan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobkep{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                <td> </td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->mob_fisio))
                        <td class="text-center p-1">
                            <input type="checkbox" id="mobfisio{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="mob_fisio[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="mobfisio{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
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
                    <td> </td>
                @endfor
            </tr>
            <tr>
                <td>a. MEDIS</td>
                <td>Perbaikan visus pada mata pasien</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_visus))
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedVisus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_visus[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasmedVisus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="hasmedVisus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_visus[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasmedVisus{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td>
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasmedVisus)) !!}
                    @else
                        <textarea rows="3" class="form-control" id="catatanHasmedVisus" name="catatan_hasmedVisus">{{ $data->catatan_hasmedVisus }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="4">b. KEPERAWATAN</td>
                <td>a. NOC : 1605 Kontrol Nyeri</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_nyeri))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_nyeri[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepNyeri{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepNyeri{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_nyeri[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepNyeri{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="4">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_haskepNyeri)) !!}
                    @else
                        <textarea rows="10" class="form-control" id="catatanHaskepNyeri" name="catatan_haskepNyeri">{{ $data->catatan_haskepNyeri }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>b. NOC : 0703 Saverity Infeksi</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_infeksi))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_infeksi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepInfeksi{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepInfeksi{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_infeksi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepInfeksi{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>c. NOC : 2301 Respon Pengobatan</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_respon))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepRespon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_respon[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepRespon{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepRespon{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_respon[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepRespon{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>d. NOC : 0802 Tanda-tanda vital</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_vital))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="haskepVital{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="haskepVital{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_vital[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="haskepVital{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="2">c. GIZI</td>
                <td>Asupan makanan >= 80%</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_asupan))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziAsupan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_asupan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziAsupan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasgiziStatus{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_status[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasgiziStatus{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
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
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasfarmInd{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasfarmInd{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_terapi[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasfarmInd{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_hasfarmInd)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanHasfarmInd" name="catatan_hasfarmInd">{{ $data->catatan_hasfarmInd }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Obat rasional</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->hasil_obat))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasfarmObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_obat[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="hasfarmObat{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="hasfarmObat{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="hasil_obat[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="hasfarmObat{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td rowspan="3">14. KRITERIA PULANG</td>
                <td>Tanda Vital Normal</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_normal))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_normal[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangNormal{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangNormal{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_normal[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangNormal{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="2">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_pulangNormal)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanPulangNormal" name="catatan_pulangNormal">{{ $data->catatan_pulangNormal }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Sesuai NOC</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->pulang_NOC))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangNOC{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_NOC[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="pulangNOC{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && $i === 0) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="pulangNOC{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="pulang_NOC[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="pulangNOC{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td> </td>
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
                        {!! nl2br(e($data->catatan_rencanaPerawatan)) !!}
                    @else
                        <textarea rows="7" class="form-control" id="catatanRencanaPerawatan" name="catatan_rencanaPerawatan">{{ $data->catatan_rencanaPerawatan }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td rowspan="3">15. RENCANA PULANG/EDUKASI PELAYANAN LANJUTAN</td>
                <td>Perawatan luka di rumah</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_perawatan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaPerawatan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_perawatan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaPerawatan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaPerawatan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_perawatan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaPerawatan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
                <td rowspan="3">
                    @if ($cmd === 'show')
                        {!! nl2br(e($data->catatan_pulangVarian)) !!}
                    @else
                        <textarea rows="5" class="form-control" id="catatanPulangVarian" name="catatan_pulangVarian">{{ $data->catatan_pulangVarian }}</textarea>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Penjelasan obat tetes mata dan obat oral</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_penjelasan))
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1">
                            <input type="checkbox" id="rencanaPenjelasan{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_penjelasan[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaPenjelasan{{ $i }}"></label>
                        </td>
                    @endif
                @endfor
            </tr>
            <tr>
                <td>Kontrol</td>
                @for ($i = 0; $i < 7; $i++)
                    @if (in_array($i + 1, $data->rencana_kontrol))
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 6)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaKontrol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_kontrol[ {{ $i }} ]" @endif
                                checked>
                            <label class="p-1 me-2 mt-2" for="rencanaKontrol{{ $i }}"></label>
                        </td>
                    @else
                        <td class="text-center p-1"
                            @if ($cmd === 'edit' && ($i === 0 || $i === 6)) style="background-color: #FEA8B9" @endif>
                            <input type="checkbox" id="rencanaKontrol{{ $i }}" value="1"
                                @if ($cmd === 'show') onclick="return false" @elseif ($cmd === 'edit') name="rencana_kontrol[ {{ $i }} ]" @endif>
                            <label class="p-1 me-2 mt-2 @if ($cmd === 'show') d-none @endif"
                                for="rencanaKontrol{{ $i }}"></label>
                        </td>
                    @endif
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
