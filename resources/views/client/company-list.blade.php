@extends('client.layouts.client')

@section('index')
    <div class="container p-2" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <h5>Company List</h5>

                <div class="row">
                    @foreach($companies as $company)
                    <div class="col-md-3">
                        <a href="{{url('/all_jobs_by_company/'.$company->id)}}">
                            <div class="card mb-4" style="border: 1px solid black">
                                <div class="card-body">
                                   {{$company->name}}
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection

