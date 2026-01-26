package Tema_4_Parte2;

public class Ejercicio7 {
    public static void main(String[] args) {
        System.out.println(esBisiesto(2024));
    }

    static boolean esBisiesto(int anio) {
        return (anio % 4 == 0 && anio % 100 != 0) || anio % 400 == 0;
    }
}
