<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jarowinkler extends Model
{
    public function JaroWinklerWithAllIsNotNull($jobModal,$jobName,$categoryId,$locationId)
    {
        return $jobModal::where('name','like','%'.$jobName.'%')
        ->where('category_id','=',$categoryId)
        ->where('company_id','=',$locationId)
        ->paginate(5);
    }

    public function JaroWinklerWithSalary($jobModal,$min_salary,$max_salary,$jobName,$categoryId,$locationId)
    {
        return $jobModal::where('salary','>=',$min_salary)
        ->where('salary','<=',$max_salary)
        ->where('name','like','%'.$jobName.'%')
        ->where('category_id','=',$categoryId)
        ->where('company_id','=',$locationId)
        ->paginate(5);
    }
}


?>
