@extends('client.layouts.client')

@section('index')
    <div class="container p-2" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <h5>Category List</h5>

                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-md-3">
                        <a href="{{url('/all_jobs/'.$category->id)}}">
                            <div class="card mb-4" style="border: 1px solid black">
                                <div class="card-body">
                                   {{$category->name}}
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection

