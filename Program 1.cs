using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio14
{
    internal class Program
    {

        const int MAX = 20;

        static void Insere(int[] q, ref int f, int v)
        {
            q[f] = v;
            f = f + 1;
        }

        static int Remove(int[] q, ref int i)
        {
            int v = q[i];
            i = i + 1;
            return (v);
        }
    

        static void Main(string[] args)
        {

            int[] fila = new int[MAX];
            string continuar = "S";
            int fim = 0;
            int inicio = 0;
            while (continuar != "n")
            {
                Console.WriteLine("Digite um número:");
                Insere(fila, ref fim, int.Parse(Console.ReadLine()));

                Console.WriteLine("Deseja continuar inserindo números? (s/n)");
                continuar = Console.ReadLine().ToLower();
            }
            int maior = 0, menor = 0;
            float media = 0;
            int contador = 0;
            for(int i =0; i < fim; i++)
            {
                int numero = Remove(fila, ref inicio);
                media += numero;
                contador++;
                if(i == 0)
                {
                    maior = numero;
                    menor = numero;
                }else
                {
                    if(numero > maior)
                    {
                        maior = numero;
                    }
                    else if(numero < menor)
                    {
                        menor = numero;
                    }
                }
            }
            media /= contador;
            Console.WriteLine("\n@-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-@");
            Console.WriteLine("O maior valor digitado foi: " + maior);
            Console.WriteLine("O menor valor digitado foi: " + menor);
            Console.WriteLine("A média dos valores digitados: " + media);
            Console.WriteLine("\n@-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-@");
            Console.ReadKey();


        }
    }
}
