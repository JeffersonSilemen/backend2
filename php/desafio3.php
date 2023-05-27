function solution($statues) {
    $i = 0;
    while($i < count($statues) - 1){
        if($statues[$i+1] < $statues[$i]){
            array_push($statues, $statues[$i]);
            array_splice($statues, $i, 1);
        }else {
            $i++;
        }
    }
    $i = 0;
    $result = 0;
    while($i < count($statues) - 1){
        if($statues[$i+1] - $statues[$i] == 1){
            $i++;
        }else {
            $result = $result + ($statues[$i+1] - $statues[$i] - 1);
            $i++;
        }
    }
    return $result;
}
