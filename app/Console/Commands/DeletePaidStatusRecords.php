<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use DB;

class DeletePaidStatusRecords extends Command
{
    protected $signature = 'delete:paid-status-records';
    protected $description = 'Delete records with status PAID older than 2 days';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $twoDaysAgo = Carbon::now()->subDays(2);

        DB::table('mahapola_statuses')
            ->where('status', 'PAID')
            ->where('updated_at', '<', $twoDaysAgo)
            ->delete();

        $this->info('Deleted records older than 2 days with status PAID');
    }
}
