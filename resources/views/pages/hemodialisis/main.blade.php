@extends('index')

@section('container')
    <section class="content pt-0">

        @if (session()->has('success'))
            @include('script.alert.success')
        @endif

        @if (session()->has('error'))
            @include('script.alert.error')
        @endif


        <div class="row">
            <div class="col-xl-12 col-12">

                <div class="d-inline-block align-items-center pb-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="mdi mdi-home-outline"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Clinical Pathway Hemodialisis</li>
                        </ol>
                    </nav>
                </div>

                {{-- Caption --}}
                <div class="box bg-transparent no-shadow mb-0">
                    <div class="box-header no-border">
                        <h4 class="box-title">Tabel Clinical Pathway Hemodialisis</h4>
                        <div class="box-controls pull-right d-md-flex d-none">
                            <a href="{{ url('/hemodialisis/add') }}" class="btn btn-info btn-sm mb-2 text-decoration-none">
                                <i class="fal fa-plus-circle"></i> Add
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Tabel Content --}}
                <div class="box">
                    <div class="box-body py-0">
                        <div class="table-responsive">
                            <table class="table no-border mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Foto</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr class="text-center">
                                            <td><img src="https://source.unsplash.com/50x50?people" alt="User Avatar"
                                                    class="img-fluid rounded-circle mb-3" style="width: 50px;"></td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->jenis_kelamin }}</td>
                                            <td>{{ $data->tanggal_lahir }}</td>
                                            <td>

                                                <a class="btn btn-success btn-sm me-2 mb-2 text-decoration-none"
                                                    href="{{ url('/hemodialisis/show', $data->id) }}"><i
                                                        class="fal fa-eye"></i>
                                                    Lihat
                                                </a>

                                                <a class="btn btn-warning btn-sm me-2 mb-2 text-decoration-none"
                                                    href="{{ url('/hemodialisis/edit', $data->id) }}"><i
                                                        class="fal fa-pen"></i>
                                                    Edit
                                                </a>

                                                <form id="deleteDataForm_{{ $data->id }}" class="d-inline-block"
                                                    action="{{ url('/hemodialisis/delete', $data->id) }}" method="POST"
                                                    data-target="{{ $data->nama }}'s data">
                                                    @csrf
                                                    @method('DELETE')

                                                    <input type="hidden" name="name" value="{{ $data->nama }}">
                                                    <input type="hidden" name="role" value="{{ $data->role }}">

                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm me-2 mb-2 text-decoration-none deleteBtn"
                                                        data-user-id="{{ $data->id }}">
                                                        <i class="fal fa-trash-alt"></i> Delete data
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- JS for Delete --}}
        @include('script.confirm.delete')

    </section>
@endsection
