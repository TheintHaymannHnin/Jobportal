@extends('client.layouts.client')

@section('index')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h4>Notifications</h4>
                @if($notis->count() < 1)
                    <strong class="text-danger">No message found!</strong>
                @else
                    @foreach($notis as $noti)
                    <div class="card mb-5">
                        <div class="card-header" style="color: black">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>From:</strong> {{$noti->company->name}}
                                </div>
                                <div class="col-md-6">
                                    <strong>Date:</strong> {{$noti->created_at}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div style="color: black">{{$noti->content}}</div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection

@section('script')
    <script>
    </script>
@endsection
