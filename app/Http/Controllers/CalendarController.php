<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class CalendarController extends Controller
{
    public function index(){
        $today = Carbon::now();
        $year = $today->year;
        $month = $today->month;

        $firstDay = Carbon::create($year, $month, 1);
        $daysInMonth = $firstDay->daysInMonth;
        $startDay = $firstDay->dayOfWeek;

        return view('pages.calendar', compact(
            'year','month','daysInMonth','starDay'
        ));
    }
}
