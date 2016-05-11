<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DateTime;
use \DateTimeZone;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class QuestionsController extends Controller
{
    public function store()
    {
        //Do something with post data
        //echo $_POST['username'];
        //echo $_POST['date'];
        //return "Post Request \n";
         $date = '4/26/2016';
        $endTime = '02:22';
        $startTime = '01:22';
        $return1 = $this->formatSoapDT($date,$startTime);
        $return2 = $this->formatSoapDT($date,$endTime);
        return $return1;
        //echo $return2;
    }
    public function index()
    {
        return "Get Request to QuestionsController";
    }
    private function formatSoapDT($date, $time)
    {
        // Concat the date and time
        $dt = $date.$time;
        // return date("Y-m-d H:i:s", $dt);
        $d = new DateTime($dt, new DateTimeZone("America/New_York"));
        $dtiso = $d->format('d/M/y g:i A');
        return $dtiso;
    }
}
