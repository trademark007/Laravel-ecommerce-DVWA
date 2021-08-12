@extends('backend.layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header bg-white header-elements-inline">
            <h6 class="card-title">Create Users</h6>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="fullscreen"></a>
                </div>
            </div>
        </div>
        
        <!-- <div class="card-body">
            <button class="btn btn-warning"><i class="icon-arrow-left"></i> back</button>
        </div> -->

        <div class="card-body">
            <form action="{{route('management.users.create')}}" method="POST">
                @CSRF
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">FIRST NAME</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name">

                            @error('first_name')
								<span class="invalid-feedback" role="alert">
									<strong class="validation">{{ $message }}</strong>
								</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">LAST NAME</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name">

                            @error('last_name')
								<span class="invalid-feedback" role="alert">
									<strong class="validation">{{ $message }}</strong>
								</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">EMAIL</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">

                            @error('email')
								<span class="invalid-feedback" role="alert">
									<strong class="validation">{{ $message }}</strong>
								</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">GENDER</label>
                            <select name="gender" id="" class="form-control @error('gender') is-invalid @enderror">
                                <option selected>-- choose --</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>

                            @error('gender')
								<span class="invalid-feedback" role="alert">
									<strong class="validation">{{ $message }}</strong>
								</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ROLE</label>
                            <select name="role" id="" class="form-control @error('role') is-invalid @enderror">
                                <option selected>-- choose --</option>
                                <option value="1">Admin</option>
                                <option value="2">Users</option>
                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="validation">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">STATUS</label>
                            <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                                <option value="1" selected>Active</option>
                                <option value="2">Inactive</option>
                            </select>

                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="validation">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">CITY</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city">

                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="validation">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">COUNTRY</label>
                            <select name="country" id="" class="form-control @error('country') is-invalid @enderror">
                                <option selected>-- choose --</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Vietnam">Vietnam</option>
                            </select>

                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="validation">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">PASSWORD</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="icon-cogs"></i> create permission</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Permissions</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Checked default
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Checked default
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Checked default
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Checked default
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>

@endsection