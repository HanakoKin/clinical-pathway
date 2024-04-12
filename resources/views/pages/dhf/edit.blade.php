@extends('index')

@section('container')
    <section class="content">

        @if (session()->has('success'))
            @include('script.alert.success')
        @endif

        @if (session()->has('error'))
            @include('script.alert.error')
        @endif

        @include('pages.modal.instruction')

        <div class="row">

            <div class="col-xl-12 col-12">

                <div class="d-inline-block align-items-center pb-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="mdi mdi-home-outline"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="/dhf">Kelola Clinical Pathway DHF</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Clinical Pathway DHF</li>
                        </ol>
                    </nav>
                </div>

                {{-- Caption --}}
                <div class="box bg-transparent no-shadow mb-0">
                    <div class="box-header no-border">
                        <h4 class="box-title">Edit Clinical Pathway DHF</h4>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border header text-center">
                        <h4>CLINICAL PATHWAY DHF</h4>
                        <h5>(LOS 7 Hari)</h5>
                    </div>
                    <!-- /.box-header -->
                    <form class="form" id="formId" action="{{ url('/dhf/update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf

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

                                @include('pages.dhf.table_show')

                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="tanggal_laporan" class="form-label">Tanggal Laporan</label>
                                        <input type="text" id="tanggal_laporan" class="form-control"
                                            name="tanggal_laporan" placeholder="Tanggal Laporan"
                                            value="{{ $data->tanggal_laporan }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-lg-4 col-12">
                                            <div class="form-group">
                                                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                                                <input type="text" id="nama_dokter" class="form-control"
                                                    name="nama_dokter" placeholder="Nama Dokter"
                                                    value="{{ $data->nama_dokter }}">
                                            </div>
                                            <div id="ttd-dokter">
                                                <div class="text-center">
                                                    <label class="form-label text-bold fs-16">TTD Dokter Penanggung Jawab
                                                        Pelayanan</label>
                                                </div>
                                                <div class="form-group">
                                                    <p>Untuk TTD, apakah ingin memasukkan TTD baru?</p>
                                                    <div class="signature-option text-right mb-3">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            id="new-signature-dokter"><i class="fa fa-check"></i>
                                                            Ya</button>
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            id="old-signature-dokter"><i class="fa fa-undo"></i> Gunakan
                                                            TTD lama</button>
                                                    </div>
                                                    <div class="signature-dokter mb-3 d-none">
                                                        <div class="text-right d-flex justify-content-center">
                                                            <button type="button" class="btn btn-default btn-sm me-1"
                                                                id="undo-dokter"><i class="fa fa-undo"></i> Undo</button>
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                id="clear-dokter"><i class="fa fa-eraser"></i>
                                                                Clear</button>
                                                        </div>
                                                        <div class="wrapper mt-2">
                                                            <canvas id="signature-pad-dokter"
                                                                class="signature-pad b-5 border-dark" style="width: 100%;"
                                                                height="250"></canvas>
                                                        </div>

                                                        <div class="form-control-feedback"><small>Pastikan menekan tombol
                                                                <code>Preview & Confirm</code> sebelum mengisi form
                                                                selanjutnya!</small>
                                                        </div>

                                                        <div class="button mt-2">
                                                            <button type="button" class="btn btn-info btn-sm"
                                                                id="save-dokter"><i class="fas fa-check-circle"></i>
                                                                Preview & Confirm</button>
                                                        </div>
                                                        <!-- Modal untuk tampil preview tanda tangan-->
                                                        <div class="modal fade" id="modal-dokter" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">Preview
                                                                            Tanda Tangan</h4>
                                                                        <button type="button" class="btn-close"
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

                                        <div class="col-lg-4 col-12">
                                            <div class="form-group">
                                                <label for="nama_perawat" class="form-label">Nama Perawat</label>
                                                <input type="text" id="nama_perawat" class="form-control"
                                                    name="nama_perawat" placeholder="Nama perawat"
                                                    value="{{ $data->nama_perawat }}">
                                            </div>
                                            <div id="ttd-perawat">
                                                <div class="text-center">
                                                    <label class="form-label text-bold fs-16">TTD Perawat Penanggung Jawab
                                                        Pelayanan</label>
                                                </div>
                                                <div class="form-group">
                                                    <p>Untuk TTD, apakah ingin memasukkan TTD baru?</p>
                                                    <div class="signature-option text-right mb-3">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            id="new-signature-perawat"><i class="fa fa-check"></i>
                                                            Ya</button>
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            id="old-signature-perawat"><i class="fa fa-undo"></i> Gunakan
                                                            TTD lama</button>
                                                    </div>
                                                    <div class="signature-perawat mb-3 d-none">
                                                        <div class="text-right d-flex justify-content-center">
                                                            <button type="button" class="btn btn-default btn-sm me-1"
                                                                id="undo-perawat"><i class="fa fa-undo"></i> Undo</button>
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                id="clear-perawat"><i class="fa fa-eraser"></i>
                                                                Clear</button>
                                                        </div>
                                                        <div class="wrapper mt-2">
                                                            <canvas id="signature-pad-perawat"
                                                                class="signature-pad b-5 border-dark" style="width: 100%;"
                                                                height="250"></canvas>
                                                        </div>

                                                        <div class="form-control-feedback"><small>Pastikan menekan tombol
                                                                <code>Preview & Confirm</code> sebelum mengisi form
                                                                selanjutnya!</small>
                                                        </div>

                                                        <div class="button mt-2">
                                                            <button type="button" class="btn btn-info btn-sm"
                                                                id="save-perawat"><i class="fas fa-check-circle"></i>
                                                                Preview & Confirm</button>
                                                        </div>
                                                        <!-- Modal untuk tampil preview tanda tangan-->
                                                        <div class="modal fade" id="modal-perawat" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">Preview
                                                                            Tanda Tangan</h4>
                                                                        <button type="button" class="btn-close"
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

                                        <div class="col-lg-4 col-12">
                                            <div class="form-group">
                                                <label for="nama_pelaksana" class="form-label">Nama Pelaksana</label>
                                                <input type="text" id="nama_pelaksana" class="form-control"
                                                    name="nama_pelaksana" placeholder="Nama pelaksana"
                                                    value="{{ $data->nama_pelaksana }}">
                                            </div>
                                            <div id="ttd-pelaksana">
                                                <div class="text-center">
                                                    <label class="form-label text-bold fs-16">TTD Pelaksana Penanggung
                                                        Jawab Pelayanan</label>
                                                </div>
                                                <div class="form-group">
                                                    <p>Untuk TTD, apakah ingin memasukkan TTD baru?</p>
                                                    <div class="signature-option text-right mb-3">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            id="new-signature-pelaksana"><i class="fa fa-check"></i>
                                                            Ya</button>
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            id="old-signature-pelaksana"><i class="fa fa-undo"></i>
                                                            Gunakan TTD lama</button>
                                                    </div>
                                                    <div class="signature-pelaksana mb-3 d-none">
                                                        <div class="text-right d-flex justify-content-center">
                                                            <button type="button" class="btn btn-default btn-sm me-1"
                                                                id="undo-pelaksana"><i class="fa fa-undo"></i>
                                                                Undo</button>
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                id="clear-pelaksana"><i class="fa fa-eraser"></i>
                                                                Clear</button>
                                                        </div>
                                                        <div class="wrapper mt-2">
                                                            <canvas id="signature-pad-pelaksana"
                                                                class="signature-pad b-5 border-dark" style="width: 100%;"
                                                                height="250"></canvas>
                                                        </div>

                                                        <div class="form-control-feedback"><small>Pastikan menekan tombol
                                                                <code>Preview & Confirm</code> sebelum mengisi form
                                                                selanjutnya!</small>
                                                        </div>

                                                        <div class="button mt-2">
                                                            <button type="button" class="btn btn-info btn-sm"
                                                                id="save-pelaksana"><i class="fas fa-check-circle"></i>
                                                                Preview & Confirm</button>
                                                        </div>
                                                        <!-- Modal untuk tampil preview tanda tangan-->
                                                        <div class="modal fade" id="modal-pelaksana" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">Preview
                                                                            Tanda Tangan</h4>
                                                                        <button type="button" class="btn-close"
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
