@extends('index')

@section('container')
    <section class="content">

        @if (session()->has('success'))
            @include('script.alert.success')
        @endif

        @if (session()->has('error'))
            @include('script.alert.error')
        @endif

        @include('modal.instruction')

        <div class="row">

            <div class="col-xl-12 col-12">

                <div class="d-inline-block align-items-center pb-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="mdi mdi-home-outline"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="/katarak">Kelola Clinical Pathway Katarak Senilis</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Clinical Pathway Katarak Senilis
                            </li>
                        </ol>
                    </nav>
                </div>

                {{-- Caption --}}
                <div class="box bg-transparent no-shadow mb-0">
                    <div class="box-header no-border">
                        <h4 class="box-title">Edit Clinical Pathway Katarak Senilis</h4>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border header text-center">
                        <h4>CLINICAL PATHWAY KATARAK SENILIS TANPA PENYULIT</h4>
                        <h5>(LOS 1 Hari / One Day Care)</h5>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" id="formId" action="{{ url('/katarak/update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="table" value="Katarak">

                        <div class="box-body">
                            <div class="patient-data row" id="patient-data">

                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="nama" class="form-label">Nama Pasien</label>
                                        <input type="text" id="nama" class="form-control" name="nama"
                                            value="{{ $data->nama }}" placeholder="Nama Pasien" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" id="jenis_kelamin" class="form-control" name="jenis_kelamin"
                                            value="{{ $data->jenis_kelamin }}" placeholder="Jenis Kelamin" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" id="tanggal_lahir" class="form-control" name="tanggal_lahir"
                                            value="{{ $data->tanggal_lahir }}" placeholder="Tanggal Lahir" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="diagnosa" class="form-label">Diagnosa masuk RS</label>
                                        <input type="text" id="diagnosa" class="form-control" name="diagnosa"
                                            value="{{ $data->diagnosa }}" placeholder="Diagnosa">
                                    </div>

                                    <div class="form-group">
                                        <label for="penyakit_utama" class="form-label">Penyakit Utama</label>
                                        <input type="text" id="penyakit_utama" class="form-control" name="penyakit_utama"
                                            value="{{ $data->penyakit_utama }}" placeholder="Penyakit Utama">
                                    </div>

                                    <div class="form-group">
                                        <label for="penyakit_penyerta" class="form-label">Penyakit Penyerta</label>
                                        <input type="text" id="penyakit_penyerta" class="form-control"
                                            name="penyakit_penyerta" value="{{ $data->penyakit_penyerta }}"
                                            placeholder="Penyakit Penyerta">
                                    </div>

                                    <div class="form-group">
                                        <label for="komplikasi" class="form-label">Komplikasi</label>
                                        <input type="text" id="komplikasi" class="form-control" name="komplikasi"
                                            value="{{ $data->komplikasi }}" placeholder="Komplikasi">
                                    </div>

                                    <div class="form-group">
                                        <label for="tindakan" class="form-label">Tindakan</label>
                                        @if (isset($arr_tindakan[1]))
                                            <input type="text" class="form-control" id="tindakan" name="tindakan[0]"
                                                value="{{ $arr_tindakan[1] }}" placeholder="Tindakan">
                                        @else
                                            <input type="text" class="form-control" id="tindakan" name="tindakan[0]"
                                                value="" placeholder="Tindakan">
                                        @endif
                                        <input type="text" class="form-control mt-2" id="tindakan"
                                            name="tindakan[1]" placeholder="Tindakan" value="{{ $arr_tindakan[2] }}"
                                            readonly>
                                    </div>

                                </div>

                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="berat_badan" class="form-label">Berat Badan</label>
                                        <input type="text" id="berat_badan" class="form-control" name="berat_badan"
                                            value="{{ $data->berat_badan }}" placeholder="Berat Badan">
                                    </div>

                                    <div class="form-group">
                                        <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                        <input type="text" id="tinggi_badan" class="form-control" name="tinggi_badan"
                                            value="{{ $data->tinggi_badan }}" placeholder="Tinggi Badan">
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                        <input type="text" id="tanggal_masuk" class="form-control"
                                            name="tanggal_masuk" value="{{ $data->tanggal_masuk }}"
                                            placeholder="Tanggal Masuk" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                                        <input type="text" id="tanggal_keluar" class="form-control"
                                            name="tanggal_keluar" value="{{ $data->tanggal_keluar }}"
                                            placeholder="Tanggal Keluar" readonly>
                                    </div>

                                    @for ($i = 1; $i <= 6; $i++)
                                        @if (isset($arr_kode_icd[$i]))
                                            <div class="form-group">
                                                <label for="kode_icd{{ $i }}" class="form-label">Kode
                                                    ICD</label>
                                                <input type="text" id="kode_icd{{ $i }}"
                                                    class="form-control" name="kode_icd[]"
                                                    value="{{ $arr_kode_icd[$i] }}" placeholder="Kode ICD"
                                                    {{ $i === 6 ? 'readonly' : '' }}>
                                            </div>
                                        @else
                                            <div class="form-group">
                                                <label for="kode_icd{{ $i }}" class="form-label">Kode
                                                    ICD</label>
                                                <input type="text" for="kode_icd{{ $i }}"
                                                    class="form-control" name="kode_icd[]" value=""
                                                    placeholder="Kode ICD">
                                            </div>
                                        @endif
                                    @endfor
                                </div>

                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="noReg" class="form-label">No Reg</label>
                                        <input type="text" id="noReg" class="form-control" name="noReg"
                                            value="{{ $data->noReg }}" placeholder="No Registrasi" disabled>
                                    </div>

                                    <div class="form-group mt-90">
                                        <label for="jam_masuk" class="form-label">Jam</label>
                                        <input type="text" id="jam_masuk" class="form-control" name="jam_masuk"
                                            value="{{ $data->jam_masuk }}" placeholder="Jam Masuk" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="jam_keluar" class="form-label">Jam</label>
                                        <input type="text" class="form-control" id="jam_keluar" name="jam_keluar"
                                            value="{{ $data->jam_keluar }}" placeholder="Jam Keluar" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="lama_rawat" class="form-label">Lama Rawat</label>
                                        <input type="text" class="form-control" id="lama_rawat" name="lama_rawat"
                                            value="{{ $data->lama_rawat }}" placeholder="Lama Rawat" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="rencana_rawat" class="form-label">Rencana Rawat</label>
                                        <input type="text" class="form-control" id="rencana_rawat"
                                            name="rencana_rawat" value="{{ $data->rencana_rawat }}"
                                            placeholder="Rencana Rawat">
                                    </div>

                                    <div class="form-group">
                                        <label for="rawat_kelas" class="form-label">R. Rawat/kelas</label>
                                        <input type="text" class="form-control" id="rawat_kelas" name="rawat_kelas"
                                            value="{{ $data->rawat_kelas }}" placeholder="R. Rawat/kelas">
                                    </div>

                                    <div class="form-group">
                                        <label for="rujukan" class="form-label">Rujukan</label>
                                        <input type="text" class="form-control" id="rujukan" name="rujukan"
                                            value="{{ $data->rujukan }}" placeholder="Rujukan">
                                    </div>
                                </div>

                                @include('pages.katarak.table_show')

                                <div class="col-12">
                                    <div class="row">
                                        @php
                                            $role = Auth::user()->role;
                                            $signaturePads = [
                                                'admin' => ['dokter', 'perawat', 'pelaksana'],
                                                'dokter' => ['dokter'],
                                                'perawat' => ['perawat'],
                                                'pelaksana' => ['pelaksana'],
                                            ];
                                        @endphp

                                        <div class="{{ Auth::user()->role == 'admin' ? 'col-lg-4' : 'col-lg-3' }}">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="tanggal_laporan" class="form-label">Tanggal
                                                        Laporan</label>
                                                    <input type="text" id="tanggal_laporan" class="form-control"
                                                        name="tanggal_laporan" placeholder="Tanggal Laporan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="{{ Auth::user()->role == 'admin' ? 'col-12' : 'col-8' }}">
                                            <div class="row">
                                                @foreach ($signaturePads[$role] as $signaturePad)
                                                    @if ($role == 'admin' || $role == $signaturePad)
                                                        <div
                                                            class="{{ Auth::user()->role == 'admin' ? 'col-lg-4 col-12' : 'col-lg-10 col-12' }}">
                                                            <div class="form-group">
                                                                <label for="nama_{{ $signaturePad }}"
                                                                    class="form-label">Nama
                                                                    {{ ucfirst($signaturePad) }}</label>
                                                                <input type="text" id="nama_{{ $signaturePad }}"
                                                                    class="form-control" name="nama_{{ $signaturePad }}"
                                                                    placeholder="Nama {{ ucfirst($signaturePad) }}">
                                                            </div>
                                                            <div id="ttd-{{ $signaturePad }}">
                                                                <div class="text-center">
                                                                    <label class="form-label text-bold fs-16">TTD
                                                                        {{ ucfirst($signaturePad) }} Penanggung Jawab
                                                                        Pelayanan</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <p>Untuk TTD, apakah ingin memasukkan TTD baru?</p>
                                                                    <div class="signature-option text-right mb-3">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-sm"
                                                                            id="new-signature-{{ $signaturePad }}"><i
                                                                                class="fa fa-check"></i> Ya</button>
                                                                        <button type="button"
                                                                            class="btn btn-warning btn-sm"
                                                                            id="old-signature-{{ $signaturePad }}"><i
                                                                                class="fa fa-undo"></i> Gunakan TTD
                                                                            lama</button>
                                                                    </div>
                                                                    <div
                                                                        class="signature-{{ $signaturePad }} mb-3 d-none">
                                                                        <div
                                                                            class="text-right d-flex justify-content-center">
                                                                            <button type="button"
                                                                                class="btn btn-default btn-sm me-1"
                                                                                id="undo-{{ $signaturePad }}"><i
                                                                                    class="fa fa-undo"></i> Undo</button>
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm"
                                                                                id="clear-{{ $signaturePad }}"><i
                                                                                    class="fa fa-eraser"></i>
                                                                                Clear</button>
                                                                        </div>
                                                                        <div class="wrapper mt-2">
                                                                            <canvas id="signature-pad-{{ $signaturePad }}"
                                                                                class="signature-pad b-5 border-dark"
                                                                                style="width: 100%;"
                                                                                height="250"></canvas>
                                                                        </div>

                                                                        <div class="form-control-feedback"><small>Pastikan
                                                                                menekan tombol <code>Preview &
                                                                                    Confirm</code> sebelum mengisi form
                                                                                selanjutnya!</small></div>

                                                                        <div class="button mt-2">
                                                                            <button type="button"
                                                                                class="btn btn-info btn-sm"
                                                                                id="save-{{ $signaturePad }}"><i
                                                                                    class="fas fa-check-circle"></i>
                                                                                Preview & Confirm</button>
                                                                        </div>
                                                                        <!-- Modal untuk tampil preview tanda tangan-->
                                                                        <div class="modal fade"
                                                                            id="modal-{{ $signaturePad }}" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title"
                                                                                            id="myModalLabel">Preview Tanda
                                                                                            Tangan</h4>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('script.modal.instruction')
    @include('script.signature.editSignature')
@endsection
