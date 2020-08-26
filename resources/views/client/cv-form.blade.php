@extends('client.layouts.client')

@section('index')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="{{url('/cv_form/store')}}" method="POST">
                @csrf
                <input type="hidden" name="job_id" value="{{$jobToApply->id}}">

                <div class="form-group">
                    <label>Employee Name</label>
                    <input type="text" class="form-control" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <label>Job Name</label>
                    <input type="text" class="form-control" value="{{$jobToApply->name}}">
                </div>
                <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="father_name" id="" class="form-control @error('father_name') is-invalid @enderror" placeholder="Enter your father's name">
                    @error('father_name')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Mother Name</label>
                    <input type="text" name="mother_name" id="" class="form-control @error('mother_name') is-invalid @enderror" placeholder="Enter your mother's name">
                    @error('mother_name')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="" class="form-control @error('dob') is-invalid @enderror">
                    @error('dob')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <select name="gender" id="" class="form-control @error('gender') is-invalid @enderror">
                        <option value="">Select Gender</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" value="{{Auth::user()->email}}">
                    @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nrc">NRC</label>
                    <input type="text" name="nrc" id="" class="form-control @error('nrc') is-invalid @enderror" placeholder="Enter your NRC">
                    @error('nrc')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter your phone number" value="{{Auth::user()->phone}}">
                    @error('phone')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" rows="3" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address">{{Auth::user()->address}}</textarea>
                    @error('address')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="religion">Religion</label>
                    <input type="text" name="religion" id="" class="form-control @error('religion') is-invalid @enderror" placeholder="Enter your religion">
                    @error('religion')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="race">Race</label>
                    <input type="text" name="race" id="" class="form-control @error('race') is-invalid @enderror" placeholder="Enter your race">
                    @error('race')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="race">Marital Status</label>
                    <select name="marital_status" id="" class="form-control @error('marital_status') is-invalid @enderror">
                        <option value="">Select Material Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                    @error('marital_status')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" name="position"  id="" class="form-control @error('position') is-invalid @enderror" placeholder="Enter Position Name" value="{{$jobToApply->position}}">
                    @error('position')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Education</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="major[]"  id="" class="form-control @error('major.*') is-invalid @enderror" placeholder="Major">
                        </div>

                        <div class="col-md-3">
                            <input type="text" name="level[]"  id="" class="form-control @error('level.*') is-invalid @enderror" placeholder="Level">
                        </div>

                        <div class="col-md-5">
                            <input type="text" name="university[]"  id="" class="form-control @error('university.*') is-invalid @enderror" placeholder="University">
                        </div>

                        <button type="button" class="btn btn-success addMoreEdu"> + </button>
                    </div>
                </div>
                <div class="form-group eduParentDiv">

                </div>

                <div class="form-group">
                    <label for="">Experience</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="title[]"  id="" class="form-control @error('title.*') is-invalid @enderror" placeholder="Title">
                        </div>

                        <div class="col-md-3">
                            <input type="text" name="company[]"  id="" class="form-control @error('company.*') is-invalid @enderror" placeholder="Company">
                        </div>

                        <div class="col-md-5">
                            <input type="text" name="duration[]"  id="" class="form-control @error('duration.*') is-invalid @enderror" placeholder="Duration">
                        </div>
                         <button type="button" class="btn btn-success addMoreExp"> + </button>

                    </div>
                </div>
                <div class="form-group expParentDiv">

                </div>

                <div class="form-group">
                    <div class="input-group"></div>
                    <label for="">Skills</label>
                    <div class="row">
                        <div class="col-md-11">
                            <input type="text" name="name[]"  id="" class="form-control @error('name.*') is-invalid @enderror" placeholder="Skill name" >
                        </div>
                        <button type="button" class="btn btn-success addMoreSkill"> + </button>
                    </div>
                </div>
                <div class="form-group skillParentDiv">
                </div>

                <div class="form-group">
                    <label for="expected_salary">Salary (Expected)</label>
                    <input type="text" name="expected_salary" id="" class="form-control @error('expected_salary') is-invalid @enderror" value="{{$jobToApply->salary}}" placeholder="Enter your expected salary">
                    @error('expected_salary')
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>
            <br>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection





@section('script')
    <script>
        $(document).ready(function(){

            // Education
            $('.addMoreEdu').click(function(){
                $('.eduParentDiv').append('<div class="row mb-3"><div class="col-md-3"><input type="text" name="major[]"  id="" class="form-control @error('major.*') is-invalid @enderror" placeholder="Major"></div><div class="col-md-3"><input type="text" name="level[]"  id="" class="form-control @error('level.*') is-invalid @enderror" placeholder="Level"></div><div class="col-md-5"><input type="text" name="university[]"  id="" class="form-control @error('university.*') is-invalid @enderror" placeholder="University"></div><button type="button" class="btn btn-danger delEdu"> X </button></div>');
            });

            $('.eduParentDiv').on('click','.delEdu',function(){
                $(this).parent().remove();
            });

            // Experience
            $('.addMoreExp').click(function(){
                $('.expParentDiv').append(' <div class="row mb-3"><div class="col-md-3"><input type="text" name="title[]"  id="" class="form-control @error('title.*') is-invalid @enderror" placeholder="Title"></div><div class="col-md-3"><input type="text" name="company[]"  id="" class="form-control @error('company.*') is-invalid @enderror" placeholder="Company"></div><div class="col-md-5"><input type="text" name="duration[]"  id="" class="form-control @error('duration.*') is-invalid @enderror" placeholder="Duration"></div><button type="button" class="btn btn-danger delExp"> X </button></div>');
            });

            $('.expParentDiv').on('click','.delExp',function(){
                $(this).parent().remove();
            });

            // Skill
            $('.addMoreSkill').click(function(){
                $('.skillParentDiv').append('<div class="row mb-3"><div class="col-md-11"><input type="text" name="name[]"  id="" class="form-control @error('name.*') is-invalid @enderror" placeholder="Skill name" ></div><button type="button" class="btn btn-danger delSkill"> X </button></div> ');
            });

            $('.skillParentDiv').on('click','.delSkill',function(){
                $(this).parent().remove();
            });



        });

    </script>
@endsection
