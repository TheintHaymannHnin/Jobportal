<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Carbon\Carbon;

class change_approve_date extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:change_approve_date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will change approve date automatically';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {  
        
        $user = User::where('status','accepted')
        ->where('approve_date','<',Carbon::now())->update([
            'status'=> null,
            'approve_date'=>null
        ]);
        // echo $user->name;
        echo "All user are rejected because of their expired date";
        
    }
}
