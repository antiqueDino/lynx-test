<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetPostByTag extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get post by tag name';

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
        $tag = $this->ask('Which tag post do you want?');
        $this->line('You asked for posts with tags: '.$tag);
        return 0;
    }
}
