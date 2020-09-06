<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollaborativeFiltering extends Model
{
    public function filterJobs($modal,$columnNameToFilter,$targetId)
    {
        return $modal::where($columnNameToFilter,'=',$targetId)->inRandomOrder()->get();
    }

}



?>
