// Čísla
let number = 5.7564654654;

console.log(number);
console.log(number.toString());

console.log(parseFloat(number.toFixed(2)));
console.log(parseInt(number.toFixed(2)));
console.log(number.toPrecision(2));

console.log(Number.MAX_SAFE_INTEGER + 1);

// Řetězce
const text = 'Ahoj světe!';
let text2 = 'ahoj světe!';
let text3 = 'test';

let longText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis magna eu ex sodales cursus. Proin nisl quam, ultrices vitae dapibus a, elementum a nunc. Vestibulum condimentum sagittis justo a vulputate. Fusce aliquam augue a pretium ultricies. Proin eleifend rutrum nibh, nec accumsan ex rutrum sed. Nunc est odio, posuere id justo ac, mattis fermentum dolor. Integer congue ullamcorper arcu ac ipsum tincidunt. Duis vitae mauris id metus facilisis molestie laoreet vel magna. Nam id nunc augue.';

console.log(text);

console.log(text.length);

console.log(text.toLowerCase() == text2.toLowerCase());
console.log(text.charAt(6));

let indexOfIpsum = longText.indexOf('ipsum');
console.log(indexOfIpsum);
console.log(longText.lastIndexOf('ipsum'));
console.log(longText.charAt(indexOfIpsum));

console.log(longText.slice(150, 155));
console.log(longText);

console.log(text3.concat(text2));
console.log(text3 + text2);
console.log(text3);

let textArray = longText.split(' ');
console.log(textArray);
console.log(textArray[13]);

// Pole
let array = [];
let array2 = [5, 6, 7];

array.push(1);
array.push(2);

console.log(array);
console.log(array2.join(' '));
console.log(array.concat(array2));
console.log(array, array2);

// prace ve tride slide 21
let codingSchool = 'Praha Coding School';
let codingSchool2 = codingSchool.replace('Coding', 'CODING');
console.log(codingSchool, codingSchool2);

console.log(codingSchool.split(' ').reverse().join(' '));

// deklarace a definice proměnných + undefined datový typ

let someVariable; // deklarace

console.log(someVariable, someVariable != undefined);

someVariable = 'some text'; // definice

console.log(someVariable, someVariable != undefined);

// rozníl mezi striktním srovnáním a srovnáním hodnotou
console.log('----- Srovnání -----');
console.log(5 == '5'); // srovnání hodnotou
console.log(5 === '5'); // striktní srovnání - typem i hodnotou
console.log(5 === 5); // striktní srovnání - typem i hodnotou
console.log(5 === 5.0); // striktní srovnání - typem i hodnotou

// srovnání proměnných
console.log('----- Srovnání - proměnné -----');
let numericValue = 5;
let stringValue = '5';
console.log(numericValue === stringValue); // striktní srovnání - typem i hodnotou

// logická negace
console.log('----- Negace -----');
console.log(!(5 >= 10));

// funkce
console.log('----- Funkce a podmíněné bloky -----');
function sum(numberOne, numberTwo) {
    let sum = numberOne + numberTwo;

    return sum;
}

let numberOne = 5;
let numberTwo = 7;

console.log(sum(numberOne, numberTwo), numberOne, numberTwo);

function isOdd(number) {
    if(number === 0) {
        console.log('číslo je nula');
    } else if (number % 2 === 1) {
        console.log('číslo je liché');
    } else {
        console.log('číslo je sudé');
    }
}

isOdd(5);
isOdd(10);
isOdd(0);

function dayOfWeek(engShorthand) {
    switch(engShorthand) {
        case 'mo':
            console.log('pondělí');
            break;
        case 'tu':
            console.log('úterý');
            break;
        case 'we':
            console.log('středa');
            break;
        case 'th':
            console.log('čtvrtek');
            break;
        case 'fr':
            console.log('pátek');
            break;
        case 'sa':
            console.log('sobota');
            break;
        case 'su':
            console.log('neděle');
            break;
        default:
            console.log('neznámý kód dne');
    }
}

dayOfWeek('sa');

function switchMultipleCases(value) {
    switch (value) {
        case 1:
        case 2:
        case 3:
            console.log('první operace');
            break;
        case 4:
            console.log('druhá operace')
            break;
        default:
            console.log('výchozí operace');
    }
}

switchMultipleCases(2);
switchMultipleCases(4);
switchMultipleCases(10);

const day = "Sobota";

// Template string - interpolace proměnné do řetězce
console.log(`Testovací řetězec ${day}`);

// Práce s datumy
console.log('----- Datumy -----');
const myDate = new Date(1700504115000);

// 1700504115

console.log(myDate.toString());

console.log(myDate.toLocaleDateString());
console.log(myDate.toLocaleTimeString());
console.log(myDate.toLocaleString());

// Logické operátory
console.log('----- Logické operátory -----');
const a = 5;
const b = 7
const c = 2;
const d = 7;

console.log(a < b);

console.log('- A (&&) -');
console.log(a < b && b < c);
console.log(a < b && b < c && b === d);
console.log(a < b && b > c && b === d);

console.log('- NEBO (||) -');
console.log(a < b || b < c);
console.log(a < b || b < c || b === d);
console.log(a < b || b > c || b === d);

console.log(a > b || b < c);
console.log(a > b || b < c || b === d);
console.log(a > b || b > c || b === d);

console.log('- kombinace -');
console.log(a > b || b > c && b !== d);

//                      celá závorka se vyhodnotí na false
console.log(a > b || (b > c && b !== d));

// použití negace - např. validace formulářů
// pole1 !== '' || pole2 !== '' || pole3 !== ''
// !(pole1 === '' && pole2 === '' && pole3 === '')

console.log('----- Inkrementace/Dekrementace -----');
let cislo = 5;

console.log(cislo++);
console.log(cislo);
console.log(cislo--);
console.log(cislo); // 5
console.log(++cislo); // 6

//            6     6 -> 7    7
console.log(cislo, cislo++, cislo);
//            7        8      8
console.log(cislo, ++cislo, cislo);

console.log('----- Operátor mocniny -----');
console.log(4 ** 2);
console.log(4 ** 3);

console.log('----- Cykly -----');
let cars = ['Škoda', 'Peugeot', 'Mercedes', 'Seat'];

console.log('for');
for (let i = 0; i < cars.length; i++) {
    console.log(cars[i]);
    // < id="car-${i}">jmeno auta</>
}

console.log('for - in');
for (let carIndex in cars) {
    console.log(cars[carIndex]);
}

console.log('for - of');
for (let car of cars) {
    console.log(car);
}

console.log('----- Iterace nad objektem -----');
const car = {
    brand: 'Škoda',
    model: 'Octavia',
    engineType: 'TSI1.4',
}

for (let carKey in car) {
    console.log(carKey, car[carKey]);
}

// toto skončí chybou, protože náš objekt nemá nedifnovyný iterátor (funkci, které by objekt prošla)
// for (let carValue of car) {
//     console.log(carValue);
// }

console.log(car.model);

console.log('while cyklus');

let carInArray = 'Mercedes';
while(carInArray !== 'Mercedes') {
    console.log(`Auto: ${carInArray}`);
    carInArray = cars.pop();
}

do {
    console.log(`Auto v do-while: ${carInArray}`);
    carInArray = cars.pop();
} while (carInArray !== 'Mercedes')

console.log('----- Break v cyklech -----');


cars = ['Škoda', 'Peugeot', 'Mercedes', 'Seat'];


for (let car of cars) {
    console.log(`Auto - for-of: ${car}`);
    if (car === 'Mercedes') {
        break;
    }
}

console.log('----- Continue v cyklech -----');
for (let car of cars) {
    if (car === 'Mercedes') {
        continue;
    }
    console.log(`Auto - for-of: ${car}`);
}

console.log(cars);

console.log('----- forEach cyklus -----');

console.log('----- forEach cyklus -> anonymní šipková fce -----');
cars.forEach((car, index, array) => {
    console.log(car, index, array);
    if (car === 'Peugeot') {
        array[index] = 'Opel';
    }
});

console.log('----- forEach cyklus -> anonymní klasická fce -----');
cars.forEach(function (car, index, array) {
    console.log(car, index, array);
    if (car === 'Peugeot') {
        array[index] = 'Opel';
    }
});

console.log('----- forEach cyklus -> pojmenovaná fce -----');
function carsCallback(car, index, array) {
    console.log(car, index, array);
    if (car === 'Opel') {
        array[index] = 'Peugeot';
    }
}

cars.forEach(carsCallback);

console.log(cars);

console.log('----- klasická fce -----');
function mojeFunkce(zprava) {
    console.log(zprava);
}

console.log('----- šipková fce -----');
const mojeFunkce2 = (zprava) => {
    console.log(zprava);
}

mojeFunkce('test');
mojeFunkce2('test 2');

console.log('----- array.map -----');

const modifiedCars = cars.map((car) => {
    return car.toLocaleUpperCase();
});

const modifiedCars2 = cars.map((car) => car.toLocaleLowerCase());

console.log(modifiedCars, modifiedCars2, cars);

console.log('----- array.filter -----');
const filteredCars = cars.filter((car) => {
    return car !== 'Mercedes';
});

const filteredCars2 = cars.filter((car) => car !== 'Seat');


console.log(filteredCars, filteredCars2, cars);
