int x;      // declaração de 'inteiro'
int y;

string nome;        // declarção de 'string'

const int yy = 10;      // constante 'não pode' ser alterada

x = 10 + 5;
bool a = x > 10;
Console.WriteLine(x);
Console.WriteLine(a);

Console.WriteLine("Digite um numero: ");
x = Convert.ToInt32(Console.ReadLine());      // numero digitado será tribuido a variável 'x' e 'Convert.ToInt32' converte 'string' em 'int'

Console.WriteLine("Digite um numero: ");
y = Convert.ToInt32(Console.ReadLine()); 

if(x > y) {
    Console.WriteLine("V é maior que y");
} else if(x == y) { 
    Console.WriteLine("x é igual a y");
} else {
    Console.WriteLine("Y é igual a x");
}



// using System;

// class Revisao_C# {
//     static void main() {
//         Console.WriteLine("Ola mundo");
//     }
// }