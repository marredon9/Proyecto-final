package Tema_4_Parte2;

public class Ejercicio2 {
    public static void main(String[] args) {
        System.out.println(mayor(3, 7, 5));
        System.out.println(menor(3, 7, 5));
    }

    static int mayor(int a, int b, int c) {
        return Math.max(a, Math.max(b, c));
    }

    static int menor(int a, int b, int c) {
        return Math.min(a, Math.min(b, c));
    }
}
