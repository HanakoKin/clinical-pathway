<div class="modal fade bs-example-modal-lg" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="showTitle"></h4>
                <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-0">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="box box-widget widget-user">
                            <div class="widget-user-header bg-img"
                                style="background: url(https://source.unsplash.com/600x400?flower) center center; height: 15rem"
                                data-overlay="5">
                            </div>
                            <div class="widget-user-image mt-70">
                                <img class="rounded-circle bg-warning-light"
                                    src="https://source.unsplash.com/200x200?people" alt="User Avatar">
                            </div>
                            <div class="box-footer pb-0">

                                <div class="text-center">
                                    <h3 id="editNamaTitle"></h3>
                                    <h6 id="editNoRMTitle"></h6>
                                </div>

                                <h4 class="box-title mt-40">General Info</h4>

                                <form id="user-update-form" method="POST"
                                    action="{{ route('user.update', ['id' => '__ID__']) }}">

                                    @csrf
                                    @method('PATCH')

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td width="200">Nama</td>
                                                    <td>
                                                        <input id="editName" name="name" type="text"
                                                            class="form-control" required autofocus>
                                                        @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>
                                                        <input id="editEmail" name="email" type="email"
                                                            class="form-control" required autofocus>
                                                        @error('email')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <select class="form-control" name="role" id="editRole"
                                                                required>
                                                                <option value="admin"
                                                                    {{ $user->role === 'admin' ? 'selected' : '' }}>
                                                                    Admin</option>
                                                                <option value="dokter"
                                                                    {{ $user->role === 'dokter' ? 'selected' : '' }}>
                                                                    Dokter</option>
                                                                <option value="perawat"
                                                                    {{ $user->role === 'perawat' ? 'selected' : '' }}>
                                                                    Perawat</option>
                                                                <option value="pelaksana"
                                                                    {{ $user->role === 'pelaksana' ? 'selected' : '' }}>
                                                                    Pelaksana</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ti-save-alt"></i> Save
                                        </button>
                                        <button type="button" class="btn btn-danger text-start"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
