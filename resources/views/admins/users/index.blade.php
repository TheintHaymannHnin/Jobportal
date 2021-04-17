@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/category') }}" class="title-color">User</a>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="card-title">User List</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Approve Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <span class="badge badge-primary">{{ $user->role }}</span>
                            </td>
                            <td>{{$user->status}}</td>
                            <td>{{$user->approve_date}}</td>
                            <td>
                                @if($user->status == 'accepted')
                                    <span class="badge badge-primary">approved</span>
                                @endif
                                @if($user->status == 'request')
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#voucherImageModal">
                                        View Voucher
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="voucherImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Voucher Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <form action="{{url('admin/approve_company/'.$user->id)}}" method="POST">
                                                @csrf
                                            <div class="modal-body">
                                                <img src="{{asset('storage/voucher-images/'.$user->voucher)}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to approve?')">
                                                    <i class="fas fa-check-circle"></i> Approve
                                                </button>
                                            </div>
                                        </form>
                                        </div>
                                        </div>
                                    </div>

                                @endif


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>

@endsection
