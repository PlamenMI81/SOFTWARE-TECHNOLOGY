function result(arr) {
    let obj={};
    for (let i = 0; i < arr.length-1; i++) {
        let currPair=arr[i].split(' ');
        let key=currPair[0];
        let value=currPair[1];
        //next check key is exist in obj
        //if yes - add value to array
        if(key in obj){
            obj[key].push(value);
        //if no - create key and array for store value    
        }else{
            obj[key]=new Array(value);
        }
    }
    let searchKey=arr[arr.length-1];
    if(typeof obj[searchKey]!="undefined"){
        for (let value of obj[searchKey]) {
            console.log(value);
        }
    }else{
        console.log('None');
    }
}
result(['key value','key eulav','test tset','2']);