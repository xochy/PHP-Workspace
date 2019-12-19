//*Declaración de una variable
var a = 10;

//*Declaración de una variable dentro de una función
function f(){
    var message = "Hello, world!"

    return message;
}

//*Accediendo a variables dentro de otras funciones
function g(){
    var a = 10;
    return function h(){
        var b = a + 1;
        return b;
    }
}

var h = g();
h(); //?Retorna 11