package Tema_4_Parte2;

public class Ejercicio6 {
    public static void main(String[] args) {
        System.out.println(mcd(12, 18));
        System.out.println(mcm(12, 18));
    }

    static int mcd(int a, int b) {
        while (b != 0) {
            int r = a % b;
            a = b;
            b = r;
        }
        return a;
    }

    static int mcm(int a, int b) {
        return (a * b) / mcd(a, b);
    }
}
