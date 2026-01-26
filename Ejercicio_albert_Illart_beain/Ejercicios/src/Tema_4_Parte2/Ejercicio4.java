package Tema_4_Parte2;

public class Ejercicio4 {
    public static void main(String[] args) {
        System.out.println(esCapicua(12321));
    }

    static boolean esCapicua(int n) {
        int original = n;
        int invertido = 0;

        while (n > 0) {
            invertido = invertido * 10 + n % 10;
            n /= 10;
        }

        return original == invertido;
    }
}
