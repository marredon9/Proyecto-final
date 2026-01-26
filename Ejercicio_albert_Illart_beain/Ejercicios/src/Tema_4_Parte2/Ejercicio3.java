package Tema_4_Parte2;

public class Ejercicio3 {
    public static void main(String[] args) {
        System.out.println(suma(5));
    }

    static int suma(int n) {
        int s = 0;
        for (int i = 1; i <= n; i++) {
            s += i;
        }
        return s;
    }
}
