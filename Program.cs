int x;
string nome;

const int YY = 10;

x = 10 + 5;
bool a = x > 10;
Console.WriteLine(x);
Console.WriteLine(a);
int y;
Console.Write("Digite um numero: ");
x = Convert.ToInt32(Console.ReadLine());
Console.Write("Digite um numero: ");
y = Convert.ToInt32(Console.ReadLine());
if (x>y)
    Console.WriteLine("x maior que y");
else if (x == y)
    Console.WriteLine("x é igual a y");
else
{
    Console.WriteLine("x menor q y");
    Console.WriteLine("uso das chaves");
}

int i=1;
while(i<=5)
{
    Console.WriteLine(i);
    i = i + 1;
}

for (i=1; i<=5; i=i+1)
    Console.WriteLine(i);

int[] b = new int[5];
b[0]=10;
b[1]=20;
b[2]=30;
for(i=0;i<=4;i++)
    Console.WriteLine(b[i]);

int soma(int x, ref int y) {
    x = 30;
    y = 40;
    return x + y;
}

int a2 = 10, b2 = 20, z;
z = soma(a2, ref b2);
Console.WriteLine("a2: " + a2 + " - b2: " + b2 + " - soma: " + z);


Tipo c;     // declaração
c = new Tipo();     // iniçialização
c.codigo = 1;
c.nome = "Luis henrique";
Console.WriteLine(c.codigo + " " + c.nome);

class Tipo {
    public int codigo;
    public string nome;

}
