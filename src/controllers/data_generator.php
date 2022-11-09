<?php

function getDayTemplateByOdds($regularRate, $extraRate, $lazyRate) {
    
    $regularDayTemplate = [
        "time1" => "08:00:00",
        "time2" => "12:00:00",
        "time3" => "13:00:00",
        "time4" => "17:00:00",
        "worked" => DAILY_TIME
    ];
    
    $extraDayTemplate = [
        "time1" => "08:00:00",
        "time2" => "12:00:00",
        "time3" => "13:00:00",
        "time4" => "18:00:00",
        "worked" => DAILY_TIME + 3600
    ];
    
    $lazyDayTemplate = [
        "time1" => "08:30:00",
        "time2" => "12:00:00",
        "time3" => "13:00:00",
        "time4" => "17:00:00",
        "worked" => DAILY_TIME - 1800
    ];

    $value = rand(0, 100);

    if ($value <= $regularRate) return $regularDayTemplate;
    if ($value <= $regularRate + $extraRate) return $extraDayTemplate;
    return $lazyDayTemplate;

}

print_r(getDayTemplateByOdds(10,20,70));