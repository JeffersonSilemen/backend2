function solution(inputArray) {
	var result = inputArray[0] * inputArray[1];
    var i = 1
    while(i < inputArray.length){
        if(inputArray[i+1] != null) {
            if(result <= inputArray[i] * inputArray[i+1]){
                result = inputArray[i] * inputArray[i+1]
            }
        }
        i++
    }
    return result
}
