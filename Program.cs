string op = "0", op2;

while (op != "3")
{
    Console.Clear();
    Console.WriteLine("menu principal");
    Console.WriteLine("1 - Funções sem Vetor");
    Console.WriteLine("2 - Funções com Vetor");
    Console.WriteLine("3 - Sair");
    Console.Write("Digite uma opção: ");
    op = Console.ReadLine();

    if (op == "1") 
    {
            Console.Write("Numero inicia: l");
            int n1;
            n1 = int.Parse(Console.ReadLine());

            Console.Write("Numero final: l");
            int n2;
            n2 = int.Parse(Console.ReadLine());

            Console.WriteLine("menu 2");
            Console.WriteLine("1 - Crescente");
            Console.WriteLine("2 - Decrescente: ");
            Console.WriteLine("3 - Imparares: ");
            Console.Write("4 - Somatorio: ");
            Console.Write("Opção desejada: : ");
            op2 = Console.ReadLine();
    }
    Console.ReadKey
}