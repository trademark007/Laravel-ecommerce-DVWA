@extends('backend.layouts.app')

@section('content')



    <div class="card">
        <div class="card-header bg-white header-elements-inline">
            <h6 class="card-title">Manajemen Users</h6>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="fullscreen"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="btn-group">
                <a href="{{route('management.create')}}" class="btn bg-indigo-400"><i class="icon-plus-circle2 mr-2"></i> New users</a>
                <button type="button" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Export</div>
                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
                    <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
                    <a href="#" class="dropdown-item"><i class="icon-database4"></i> Import to DB</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped datatable-basic">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>EMAIL</th>
                        <th>GENDER</th>
                        <th>ROLE</th>
                        <th>STATUS</th>
                        <th>CITY</th>
                        <th>COUNTRY</th>
                        <th>EMAIL VERIFIED</th>
                        <th>JOIN AT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->role}}</td>
                        <td>
                        @if($user->status == 'ACTIVE')
                            <span class="badge badge-success">ACTIVE</span>
                        @else
                            <span class="badge badge-danger">INACTIVE</span>
                        @endif
                        </td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->country}}</td>
                        <td>{{$user->email_verified_at}}</td>
                        <td>{{$user->created_at}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection