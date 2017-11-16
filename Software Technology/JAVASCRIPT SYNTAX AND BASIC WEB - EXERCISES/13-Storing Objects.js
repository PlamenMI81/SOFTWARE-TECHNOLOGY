function result(arr) {
    let arrResult=[];
    for (let i = 0; i < arr.length; i++) {
        let arguments=arr[i].split(" -> ");
        let name=arguments[0];
        let age=arguments[1];
        let grade=arguments[2];
        arrResult[i]=new Object({name,age,grade});
    }
    for (let item of arrResult.keys()) {
        console.log(`Name: ${arrResult[item].name}`);
        console.log(`Age: ${arrResult[item].age}`);
        console.log(`Grade: ${arrResult[item].grade}`);
    }
}
result(['Pesho -> 13 -> 6.00','Ivan -> 12 -> 5.57','Toni -> 13 -> 4.90']);