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

    function check_old_movie($appearance = 0){
        $year = date('Y');
        if($year - 40 > $appearance && $appearance){
            $old_movie = $year - $appearance;
            return '<span class="badge bg-warning">Old movie: ' .  $old_movie . ' years</span> ';
        }else{
            return false;
        }
    }


    function find_movie_by_id($item){
        if(!isset($_GET['movie_id'])) return false;
    
        if($item['id'] === intval($_GET['movie_id'])){
            return true;
        }else{
            return false;
        }
    }

    // function find_movie_by_title($item){
    //     if(stripos($item['title'], $_GET['s']) === false){
    //         return false;
    //     }else{
    //         return true;
    //     }
    // }

    


