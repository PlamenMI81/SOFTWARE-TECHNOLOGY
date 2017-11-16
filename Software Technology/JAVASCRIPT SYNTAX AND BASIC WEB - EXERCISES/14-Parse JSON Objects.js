function result(arr) {
    let obj=arr.map(JSON.parse);
    for (let item of obj.keys()) {
        console.log(`Name: ${obj[item].name}`);
        console.log(`Age: ${obj[item].age}`);
        console.log(`Date: ${obj[item].date}`);
    }

}
result(['{"name":"Gosho","age":10,"date":"19/06/2005"}','{"name":"Tosho","age":11,"date":"04/04/2005"}']);