function result(arr) {
    let obj={};
    for (let i = 0; i < arr.length-1; i++) {
        let currPair=arr[i].split(' ');
        let key=currPair[0];
        let value=currPair[1];
        obj[key]=value;
    }
    let searchKey=arr[arr.length-1];
    console.log(typeof obj[searchKey]!="undefined"? obj[searchKey]:'None');
}

result(['key value','key eulav','test tset','test']);