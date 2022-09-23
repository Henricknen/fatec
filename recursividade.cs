using Sytem;

class Calc {
    public int soma(params int[]n) {
        int s = 0;
        for(int i = 0; i < n,length; i++) {
            s += n[i];
        }
        return s;
    }

    public double soma(params double[n]) {
        double s = 0;
        for(int i = 0; i <n.length; i++) {
            s += n[i];
        }
        return s;
    }

    public fat(int n) {
        int res;
        if(n <= 1) {
            res = 1;
        } else {
            res = n * fat(n - 1);       /* operação de fatorial */
        }
        return res;
    }

}

class Recursividade Main() {
    Calc calc = new Calc();

    var res = calc.fat(5);

    Console.WriteLine(res);
}
