package Tema_4_Parte2;

public class Ejercicio8 {
    public static void main(String[] args) {
        System.out.println(invertir(1234));
    }

    static int invertir(int n) {
        int inv = 0;
        while (n > 0) {
            inv = inv * 10 + n % 10;
            n /= 10;
        }
        return inv;
    }
}
