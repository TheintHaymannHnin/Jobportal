@extends('client.layouts.client')
@section('index')
{{-- <div class="overlay"></div> --}}
<div class="container m-5">
    <div class="card m-5 ">
        <div class="card-header bg-success" >
            <h2>CV Form </h2>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="">Father Name</label>
                        <input type="text" name="father_name" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="">Mother Name</label>
                        <input type="text" name="mother_name" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <select name="gender" id="" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="nrc">NRC</label>
                        <input type="text" name="nrc" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="religion">Religion</label>
                        <input type="text" name="religion" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="race">Race</label>
                        <input type="text" name="race" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <select name="material_status" id="" class="form-control">
                            <option value="">Select Material Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" name="applied_position"  id="" class="form-control" placeholder="Enter Position Name" >
                    
                </div>
                <div class="form-group">
                    <label for="">Education</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="edication_major"  id="" class="form-control" placeholder="Major"> 
                        </div>
                        
                        <div class="col-md-3">
                            <input type="text" name="education_level"  id="" class="form-control" placeholder="Level"> 
                        </div>
                        
                        <div class="col-md-3">
                            <input type="text" name="education_university"  id="" class="form-control" placeholder="University"> 
                        </div>
                        
                        <div class="col-md-3">
                            <button> + </button>
                        </div> 
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Experience</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="past_experience_1_title"  id="" class="form-control" placeholder="Title"> 
                        </div>
                        
                        <div class="col-md-3">
                            <input type="text" name="past_experience_1_company"  id="" class="form-control" placeholder="Company"> 
                        </div>
                        
                        <div class="col-md-3">
                            <input type="text" name="past_experience_1_duration"  id="" class="form-control" placeholder="Duration"> 
                        </div>
                        
                        <div class="col-md-3">
                            <button> + </button>
                        </div> 
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group"></div>
                    <label for="">Skills</label>
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" name="other_qualifications"  id="" class="form-control" placeholder="None" >
                        </div>
                        <div class="col-md-3">
                            <button class="addSkill"> + </button>
                        </div> 
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" name="other_qualifications"  id="" class="form-control" placeholder="None" >
                        </div>
                        <div class="col-md-3">
                            <button class="delSkill"> -</button>
                        </div> 
                    </div>
                    
                    
                </div>
                    <div class="form-group parentDiv">
                    </div>
            </div>
            
        </div>
        
    </div>
</form>
</div>
</div>
</div>
</section>
@section('script')
<script>
$(document).ready(function(){
    $('.addSkill').click(function(){
        $('.parentDiv').append('<div class="form-group">
                    <div class="input-group"></div>
                    <label for="">Skills</label>
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" name="other_qualifications"  id="" class="form-control" placeholder="None" >
                        </div>
                        <div class="col-md-3">
                            <button class="addSkill"> + </button>
                        </div> 
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" name="other_qualifications"  id="" class="form-control" placeholder="None" >
                        </div>
                        <div class="col-md-3">
                            <button class="delSkill"> -</button>
                        </div> 
                    </div>')






    });
    $('.parentDiv').on('click','delSkill',function(){
        $(this).parent().remove();
    });

    alert('yes');

});

</script>
@endsection
