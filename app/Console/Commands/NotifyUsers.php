<?php

namespace App\Console\Commands;

use App\Mail\ContractReminder;
use App\Mail\PaymentReminder;
use App\Models\Contract;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class NotifyUsers extends Command
{

    protected $signature = 'users:notify';


    protected $description = 'Command description';

    public function handle()
    {
        $cons = Contract::all();
        foreach($cons as $con) {
            $date=new DateTime($con->end);
            $diffInDays = $date->diff(Carbon::now())->days;
            if($diffInDays<=2){
                Mail::to($con->email)->send(new ContractReminder());
                Mail::to($con->user->email)->send(new ContractReminder());
            }
        }

        $payms = Payment::all();
        foreach($payms as $pay) {
            $date=new DateTime($pay->date);
            $diffInDays = $date->diff(Carbon::now())->days;
            if($diffInDays<=2){
                Mail::to($pay->rent)->send(new PaymentReminder());
            }
        }
    }
}
