<?php

namespace App\Console\Commands;
use Goutte\Client;
use GuzzleHttp\Request;
use Illuminate\Console\Command;
use Sunra\PhpSimple\HtmlDomParser;
class scrappe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrappe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       return 0;
    }
}
