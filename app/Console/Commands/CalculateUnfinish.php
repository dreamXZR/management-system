<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\RegisterTable;

class CalculateUnfinish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'property:calculate-unfinish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '规定时间内未完成的来访记录';

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
     * @return mixed
     */
    public function handle(RegisterTable $register)
    {
        //$this->info("start...");
        $register->calculateRegister();
        $this->info("success!");
    }
}
