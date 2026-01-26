package Tema_4_Parte2;

public class Ejercicio5 {
    public static void main(String[] args) {
        System.out.println(dniCorrecto(12345678, 'Z'));
    }

    static boolean dniCorrecto(int numero, char letra) {
        String letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        return letras.charAt(numero % 23) == letra;
    }
}
