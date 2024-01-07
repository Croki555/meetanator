<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $currentDate = new DateTime();
        $month = $currentDate->format('n');
        $year = $currentDate->format('Y');

        $nextDate = new DateTime();
        $nextDate->modify('first day of +1 month');
        $nextMonth = $nextDate->format('n');
        $nextYear = $nextDate->format('Y');
        $nameMonth = [
            '1' => 'Январь',
            '2' => 'Февраль',
            '3' => 'Март',
            '4' => 'Апрель',
            '5' => 'Май',
            '6' => 'Июнь',
            '7' => 'Июль',
            '8' => 'Август',
            '9' => 'Сентябрь',
            '10' => 'Октябрь',
            '11' => 'Ноябрь',
            '12' => 'Декабрь',
        ];
        return view('home', [
            'nameMonth' => $nameMonth,
            'month' => $month,
            'nextMonth' =>$nextMonth
        ]);
    }
}
