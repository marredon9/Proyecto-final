package Tema_4_Parte2;

public class Ejercicio1 {
    public static void main(String[] args) {
        System.out.println(convertir(3661));
    }

    static String convertir(int segundos) {
        int h = segundos / 3600;
        int m = (segundos % 3600) / 60;
        int s = segundos % 60;

        return String.format("%02d:%02d:%02d", h, m, s);
    }
}
