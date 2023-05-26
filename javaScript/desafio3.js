function solution(statues) {
    let i = 0;
    while (i < statues.length - 1){
        if (statues[i+1] < statues[i]){
            statues.push(statues[i]);
            statues.splice(i, 1);
        }else {
            i++;
        }
    }
    i = 0;
    var result = 0;
    while (i < statues.length - 1){
        if(statues[i+1] - statues[i] == 1){
            i++;
        }else{
            result = result + (statues[i+1]-statues[i]-1)
            i++;
        }
    }
    return result;
}
