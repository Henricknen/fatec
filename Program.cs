const int MAX = 20;

void Insere(int[] p, ref int t, int v)        /* fução de inserir */
{
    p[t] = v;
    t = t + 1;
}

int Remove(int[] p, ref int t)            /* função de remover */
{
    t = t - 1;
    return (p[t]);
}

bool EstaVazia(int t)
{
    if (t == 0)
        return true;
    else
        return false;
}

bool EstaCheia(int t)
{
    if (t == MAX)
        return true;
    else
        return false;
}

int n, r;                                  /* principal */
int[] pilha = new int[MAX];
int topo =0;

Console.Write("Digite um numero: ");
n = int.Parse(Console.ReadLine());
while (n != 0) {
    Insere(pilha, ref topo, n%2);
    n = n / 2;
}
/* while (EstaVazia(topo) == false) */
while (!EstaVazia(topo)) {      /* vai repetir enquanto nao estiver vazia */
    r = Remove(pilha, ref topo);
    Console.Write(r);
}

