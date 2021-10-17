<?php 
function runtime_prettier($length = 0){
    if($length == 0 || !is_numeric($length)){
        return 'No runtime data';
    } else if($length == 1){
        return $length . 'minute';
    } else if($length > 1 && $length < 60){
        return $length . 'minutes';
    } else{
        $hours = intval($length/60);
        $minutes = $length%60;
        
        return $hours . ( ($hours == 1) ? ' hour ' : ' hours ') . $minutes . ( ($minutes == 1) ? ' minute ' : ' minutes');
    }
}

function check_old_movie($year_apparition){
    $currentYear = 2021;
    $difference = $currentYear - $year_apparition;

    if($difference <= 40){
        return 'False ' ;
    } else{
        return 'Old movie : ' . $difference . ' years';
    }

    
}