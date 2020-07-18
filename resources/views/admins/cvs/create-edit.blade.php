@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/cv') }}" class="title-color">CV</a>
@endsection
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($cv->id))
                        <strong>CV </strong>
                        <small>Create Form</small>
                        <form action="{{ url('admin/cv') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>CV</strong>
                        <small>Update Form</small>
                        <form action="{{ url('admin/cv/'.$cv->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name"> Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter Your Name" value="{{ old('name')  ??  $cv->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="father_name">Father Name</label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" name="father_name" id="father_name" type="text" placeholder="Enter your father's name" value="{{ old('father_name')  ??  $cv->father_name ?? '' }}" required>
                                    @error('fathername')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $father_name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="mother_name">Mother Name</label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" id="mother_name" type="text" placeholder="Enter your mother's name" value="{{ old('mother_name')  ??  $cv->mother_name ?? '' }}" required>
                                    @error('mothername')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $mother_name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" type="text" placeholder="Enter your gender" value="{{ old('gender')  ??  $cv->gender ?? '' }}" required>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $gender }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="date_of_birth">Date of birth</label>
                                    <input class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" id="mdate_of_birth" type="date" placeholder="Enter your birthday" value="{{ old('date_of_birth')  ??  $cv->date_of_birth?? '' }}" required>
                                    @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $date_of_birth }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="text" placeholder="Enter your email" value="{{ old('email')  ??  $cv->email?? '' }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $email}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nrc">NRC</label>
                                    <input class="form-control @error('nrc') is-invalid @enderror" name="nrc" id="mother_name" type="text" placeholder="Enter your NRC-number" value="{{ old('nrc')  ??  $cv->nrc ?? '' }}" required>
                                    @error('nrc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $nrc }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input class="form-control @error('address') is-invalid @enderror" name="address" id="address" type="text" placeholder="Enter your address" value="{{ old('address')  ??  $cv->address ?? '' }}" required>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $address }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone_number">Phone-number</label>
                                    <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" type="number" placeholder="Enter your phone_number" value="{{ old('phone_number')  ??  $cv->phone_number?? '' }}" required>
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $phone_number}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="religion">Religion</label>
                                    <input class="form-control @error('religion') is-invalid @enderror" name="religion" id="religion" type="text" placeholder="Enter your religion" value="{{ old('religion')  ??  $cv->religion ?? '' }}" required>
                                    @error('religion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $religion }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="race">Race</label>
                                    <input class="form-control @error('race') is-invalid @enderror" name="race" id="race" type="text" placeholder="Enter your race" value="{{ old('race')  ??  $cv->race?? '' }}" required>
                                    @error('race')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $race}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="material_status">Material status</label>
                                    <input class="form-control @error('material_status') is-invalid @enderror" name="material_status" id="material_status" type="text" placeholder="Enter your material_status" value="{{ old('material_status')  ??  $cv->material_status ?? '' }}" required>
                                    @error('material_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ material_status }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="applied_position">Applied position</label>
                                    <input class="form-control @error('applied_position') is-invalid @enderror" name="applied_position" id="applied_position" type="text" placeholder="Enter your applied_position" value="{{ old('applied_position')  ??  $cv->applied_position ?? '' }}" required>
                                    @error('applied_position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $applied_position}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="professional_area">Professional area</label>
                                    <input class="form-control @error('professional_area') is-invalid @enderror" name="professional_area" id="professional_area" type="text" placeholder="Enter your professional_area" value="{{ old('professional_area')  ??  $cv->professional_area ?? '' }}" required>
                                    @error('professional_area')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $professional_area }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="total_experience">Total experience</label>
                                    <input class="form-control @error('total_experience') is-invalid @enderror" name="total_experience" id="total_experience" type="text" placeholder="Enter your mtotal_experience" value="{{ old('total_experience')  ??  $cv->total_experience ?? '' }}" required>
                                    @error('total_experience')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $total_experience }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="education_university">Education-university</label>
                                    <input class="form-control @error('education_university') is-invalid @enderror" name="education_university" id="education_university" type="text" placeholder="Enter your education_university" value="{{ old('education_university')  ??  $cv->education_university?? '' }}" required>
                                    @error('education_university')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $education_university }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="education_level">Education-level</label>
                                    <input class="form-control @error('education_level') is-invalid @enderror" name="education_level" id="education_level" type="text" placeholder="Enter your education_level" value="{{ old('education_level')  ??  $cv->education_level ?? '' }}" required>
                                    @error('education_level')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $education_level }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="education_major">Education-major</label>
                                    <input class="form-control @error('education_major') is-invalid @enderror" name="education_major" id="education_major" type="text" placeholder="Enter your education_major" value="{{ old('education_major')  ??  $cv->education_major ?? '' }}" required>
                                    @error('education_major')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $education_major }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="past_experience_1_title">Past_experience_1_title</label>
                                    <input class="form-control @error('past_experience_1_title') is-invalid @enderror" name="past_experience_1_title" id="past_experience_1_title" type="text" placeholder="Enter your past_experience_1_title" value="{{ old('past_experience_1_title')  ??  $cv->past_experience_1_title ?? '' }}" required>
                                    @error('past_experience_1_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $past_experience_1_title}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="past_experience_1_company">Past_experience_1_company</label>
                                    <input class="form-control @error('past_experience_1_company') is-invalid @enderror" name="past_experience_1_company" id="past_experience_1_company" type="text" placeholder="Enter your past_experience_1_company" value="{{ old('past_experience_1_company')  ??  $cv->past_experience_1_company ?? '' }}" required>
                                    @error('past_experience_1_company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $past_experience_1_company }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="past_experience_1_duration">Past_experience_1_duration</label>
                                    <input class="form-control @error('past_experience_1_duration') is-invalid @enderror" name="past_experience_1_duration" id="past_experience_1_duration" type="text" placeholder="Enter your past_experience_1_duration" value="{{ old('past_experience_1_duration')  ??  $cv->past_experience_1_duration ?? '' }}" required>
                                    @error('past_experience_1_duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $past_experience_1_duration}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="past_experience_1_function">Past_experience_1_function</label>
                                    <input class="form-control @error('past_experience_1_function') is-invalid @enderror" name="past_experience_1_function" id="past_experience_1_function" type="text" placeholder="Enter your past_experience_1_function" value="{{ old('past_experience_1_function')  ??  $cv->past_experience_1_function ?? '' }}" required>
                                    @error('past_experience_1_function')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $past_experience_1_function }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="other_qualifications">Other -Qualitions</label>
                                    <input class="form-control @error('other_qualifications') is-invalid @enderror" name="other_qualifications" id="other_qualifications" type="text" placeholder="Enter your other_qualifications" value="{{ old('other_qualifications')  ??  $cv->other_qualifications ?? '' }}" required>
                                    @error('other_qualifications')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $other_qualifications }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="expected_salary">Expected-Salary</label>
                                    <input class="form-control @error('expected_salary') is-invalid @enderror" name="expected_salary" id="expected_salary" type="text" placeholder="Enter your expected_salary" value="{{ old('expected_salary')  ??  $cv->expected_salary ?? '' }}" required>
                                    @error('expected_salarye')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $expected_salary }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                            
                           






                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           
                           
                           
                            

                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button class="btn btn-sm btn-danger" type="reset">
                                <i class="fa fa-ban"></i> Reset</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection