@extends('index')

@section('container')
    <section class="content pt-0">

        @if (session()->has('error'))
            @include('script.alert.error')
        @endif

        <div class="row">
            <div class="col-12">

                <div class="d-inline-block align-items-center pb-2">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="mdi mdi-home-outline"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('user.index') }}">User
                                    Control</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add User</li>
                        </ol>
                    </nav>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-12">
                        {{-- Form --}}
                        <form action="{{ route('user.create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-8">
                                        <h4 class="box-title text-info mb-0"><i class="fal fa-user-injured"></i> Data User
                                        </h4>
                                    </div>
                                </div>

                                <hr class="my-15">

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fal fa-user-tie"></i></span>
                                        <input type="text" name="name" class="form-control ps-15 bg-transparent"
                                            placeholder="Full Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fal fa-user-tie"></i></span>
                                        <input type="email" name="email" class="form-control ps-15 bg-transparent"
                                            placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fal fa-key"></i></span>
                                        <input type="password" name="password" class="form-control ps-15 bg-transparent"
                                            placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="fal fa-key"></i></span>
                                        <input type="password" name="password_confirmation"
                                            class="form-control ps-15 bg-transparent" placeholder="Password Confirmation"
                                            required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group" id="">
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="role" required>
                                            <option selected disabled>Select one Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="dokter">Dokter</option>
                                            <option value="perawat">Perawat</option>
                                            <option value="pelaksana">Pelaksana</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="box-footer float-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Save
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
