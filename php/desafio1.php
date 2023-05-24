function solution($inputArray) {
    $result = $inputArray[0] * $inputArray[1];
    $i = 1;
    while($i < count($inputArray) - 1) {
        if($result <= $inputArray[$i] * $inputArray[$i + 1]){
            $result = $inputArray[$i] * $inputArray[$i + 1];
        }
        $i++;
    }
    return $result;
}
