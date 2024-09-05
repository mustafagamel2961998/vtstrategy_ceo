<?php

namespace App\Jobs;

use App\Models\Ceo\Consaltation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class PostponedConsaltaionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $PostPonedConsaltaions = Consaltation::where('status','postponed')->whereDay('date_time',Carbon::now())->get();
        foreach ($PostPonedConsaltaions as $PostPonedConsaltaion){
            $PostPonedConsaltaion->update([
                'status'=>'pending',
            ]);
        }
    }
}
