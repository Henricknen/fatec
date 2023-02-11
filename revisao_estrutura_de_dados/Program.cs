int x;      // declaração de 'inteiro'
int y;

string nome;        // declarção de 'string'

const int yy = 10;      // constante 'não pode' ser alterada

Console.WriteLine("-------bool----------------");
x = 10 + 5;
bool a = x > 10;
Console.WriteLine(x);
Console.WriteLine(a);

Console.WriteLine("-------maior ou menor-----------------");
Console.WriteLine("Digite um numero X: ");

x = Convert.ToInt32(Console.ReadLine());      // numero digitado será tribuido a variável 'x' e 'Convert.ToInt32' converte 'string' em 'int'

Console.WriteLine("Digite um numero Y: ");
y = Convert.ToInt32(Console.ReadLine()); 

if(x > y) {
    Console.WriteLine("x é maior que y");
} else if(x == y) { 
    Console.WriteLine("x é igual a y");
} else {
    Console.WriteLine("y é maior a x");
}

Console.WriteLine("-------while-----------------");
int i = 1;      //declarção
while(i <= 5) {     // comando de repetição 'while'
    Console.WriteLine(i);
    i = i + 1;
}

Console.WriteLine("-------for-----------------");

for (i = 1; i <= 5; i = i + 1) {
    Console.WriteLine(i);
}

Console.WriteLine("-------vetor-----------------");

int[] b = new int[5];

b[0] = 10;
b[1] = 20;
b[2] = 30;

for(i = 0; i <= 4; i++) 
    Console.WriteLine(b[i]);




// using System;

// class Revisao_C# {
//     static void main() {
//         Console.WriteLine("Ola mundo");
//     }
// }