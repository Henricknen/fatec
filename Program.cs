using System;

namespace palavras_ao_contrario
{
    class Program
    {


        //const int MAX = int.MaxValue;
        const int MAX = 20;

        // INICIO FUNÇÕES AUXILIARES DE PILHA

        static void Insere(char[] p, ref int t, char v)
        {
            p[t] = v;
            t = t + 1;
        }

        static char Remove(char[] p, ref int t)
        {
            t = t - 1;
            return (p[t]);
        }



        static bool EstaVazia(int t)
        {
            if (t == 0)
                return true;
            else
                return false;
        }

      


        static void Main(string[] args)
        {
            char[] pilha = new char[MAX];
            int topo = 0;
   
            int i = 0;
            string frase;
            string nova_frase = "";

            Console.WriteLine("Digite a frase: ");
            frase = Console.ReadLine();

            int tam = frase.Length;
            char caractere;
            bool ultimoChar = false;


            while (i < tam)
            {


                if (i == tam - 1)
                {

                    ultimoChar = true;
                }



                caractere = frase[i];

                if (caractere != ' ')
                {

                    Insere(pilha, ref topo, frase[i]);

                    i++;

                }

                if (ultimoChar || caractere == ' ')
                {

                    while (!EstaVazia(topo))
                    {

                        char c = Remove(pilha, ref topo);
                        nova_frase += c;
                    }
                    nova_frase += " ";

                    i++;

                }



            }

            Console.WriteLine(nova_frase);
            Console.ReadKey();




        }

    }
}
