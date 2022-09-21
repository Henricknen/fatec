
void crescente(int nI, int nF)
{
    if (nI<=nF)
    {
        Console.WriteLine(nI);
        crescente(nI+1, nF);
    }
}

void decrescente(int nI, int nF)
{
    if (nI<=nF)
    {
        decrescente(nI+1, nF);
        Console.WriteLine(nI);
    }
}

void impares(int nI, int nF)
{
    if (nI<=nF)
    {
        if (nI % 2 != 0)
            Console.WriteLine(nI);
        impares(nI+2, nF);
    }
}

int somatorio (int nI, int nF)
{
    if (nI < nF)
        return nI + somatorio(nI+1, nF);
    else
        return nI;
}



string op = "0", op2;
while (op != "3")
{
    Console.Clear();
    Console.WriteLine("MENU PRINCIPAL");
    Console.WriteLine("1 - Funções sem vetor");
    Console.WriteLine("2 - Função com vetor");
    Console.WriteLine("3 - Sair");
    Console.Write("Opção Desejada: ");
    op = Console.ReadLine();
    if (op == "1")
    {
        Console.Write("Número Inicial: ");
        int n1 = int.Parse(Console.ReadLine());
        Console.Write("Número Final: ");
        int n2 = int.Parse(Console.ReadLine());
        Console.WriteLine("MENU 2");
        Console.WriteLine("1 - Crescente");
        Console.WriteLine("2 - Decrescente");
        Console.WriteLine("3 - Ímpares");
        Console.WriteLine("4 - Somatório");
        Console.Write("Opção Desejada: ");
        op2 = Console.ReadLine();
        if (op2 == "1")
            crescente(n1,n2);
        else if (op2 == "2")
            decrescente(n1, n2);
        else if (op2 == "3")
            impares(n1,n2);
        else if (op2 == "4")
            Console.WriteLine(somatorio(n1, n2));
    }
    Console.ReadKey();
}