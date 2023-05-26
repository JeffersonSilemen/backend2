def solution(statues):
    i = 0;
    while(i < len(statues)-1):
        if(statues[i+1] < statues[i]):
            statues.append(statues[i]);
            statues.pop(i);
        else:
            i += 1;
    i= 0;
    result = 0;    
    while(i < len(statues)-1):
        if(statues[i+1] - statues[i] == 1):
            i += 1;
        else:
            result += statues[i+1] - statues[i] - 1;
            i += 1;
    return result;     
