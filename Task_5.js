function sequence(x, y){
	if(x <= y)  return "Parameter x harus leih besar dari y !";

	const result = [];
	let number = y;

	while(number > 1){
		result.push(number);
		number =(number * number) % x;
		x++;
		y++;
	}
	result.push(number);
	console.log(`array: ${result}`);
	return `count: ${result.length}`;
}

console.log(sequence(5,3));
console.log(sequence(16,5));
console.log(sequence(3,5));