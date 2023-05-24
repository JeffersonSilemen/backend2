def solution(inputArray):
    i = 1
    result = inputArray[0] * inputArray[1]
    while (i < len(inputArray)-1):
        if(result <= inputArray[i] * inputArray[i+1]):
            result = inputArray[i] * inputArray[i+1]
        i += 1
    return result    
