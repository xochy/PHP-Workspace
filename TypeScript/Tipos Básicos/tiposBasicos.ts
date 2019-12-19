//*BOOLEAN
let isDone: boolean = false;

//*NUMERO
let decimal: number = 6;
let hex    : number = 0xf00d;
let binary : number = 0b1010;
let octal  : number = 0o744;

//*CADENA
let color: string = "blue";
color = 'red';

let fullname: string = `Xochy Chavez`;
let age     : number = 29;
let sentence: string = `Hello, my name is ${ fullname }.

I'll be ${ age + 1 } years old next month`;

//*La sentencia anterior es lo mismo que:
let newSentence: string = "Hello, my name is " + fullname + ".\n\n" + 
                            "I'll be " + (age + 1) + " years old next month";

//*ARRAY
//*Primera forma de declarar un array
let list1: number[] = [1, 2, 3];

//*Segunda forma
let list2: Array<number> = [1, 2, 3];

//*TUPLA
//*Declara una tuple type
let x: [string, number];

//*Se inicializa
x = ["hello", 10];

//?Se inicializa incorrectamente
x = [10, "hello"]; //!Error

//*Acceder a un elemento con indice conocido
console.log(x[0].substring(1)); //*OK
console.log(x[1].substring(1)); //!Error: 'number' no tiene 'substring'

//?El acceso a un elemento fuera del conjunto de indices conocidos falla con un error
x[3] = "world"; //!Error, la propiedad '3' no existe en el tipo '[string, number]'
console.log(x[5].toString()); //!Error, la propiedad '5' no existe en el tipo '[string, number]'

//*ENUM
enum Color {Red, Green, Blue}
let c: Color = Color.Green;

//*CUALQUIER
let notSure: any = 4;
notSure = "Maybe string instead";
notSure = false;

notSure = 5;
notSure.ifItExist(); //*Okay, ifItExist puede existir en tiempo de ejecución
notSure.toFixed(); //*Okay, toFixed existe (pero el compilador no revisa)

let prettySure: Object = 4;
prettySure.toFixed(); //!Error: la propiedad 'toFixed' no existe en el tipo 'Object'

//*Uso de any en array cuando no se conocen todos los tipos de datos
let list3: any[] = [1, true, "free"];
list3[1] = 100; 

//*NULO
function warnUser(): void{
    console.log("This is my warning message");
}

let unusable: void = undefined;
unusable = null; //*OK si '--strictNullChecks' no se ha dado

//?No mucho mas se puede asignar a estas variables
let u = undefined = undefined;
let n = null = null;
