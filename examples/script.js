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

dayOfWeek('jghgkjgkjhgkjhgkjghj');

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