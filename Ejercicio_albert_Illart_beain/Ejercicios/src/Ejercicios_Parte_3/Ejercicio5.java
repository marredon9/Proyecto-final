package Ejercicios_Parte_3;

public class Ejercicio5 {
    public static void main(String[] args) {
        int[][] a = { { 1, 2 }, { 3, 4 } };
        int[][] b = { { 1, 2 }, { 3, 4 } };

        boolean iguales = true;

        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 2; j++) {
                if (a[i][j] != b[i][j]) {
                    iguales = false;
                }
            }
        }

        if (iguales) {
            System.out.println("Las matrices son iguales");
        } else {
            System.out.println("Las matrices no son iguales");
        }
    }
}
