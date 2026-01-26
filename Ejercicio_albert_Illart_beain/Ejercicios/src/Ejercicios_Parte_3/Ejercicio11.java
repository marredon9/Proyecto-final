package Ejercicios_Parte_3;

public class Ejercicio11 {
    public static void main(String[] args) {
        int[][] a = { { 1, 2 }, { 3, 4 } };
        int[][] b = { { 5, 6 }, { 7, 8 } };
        int[][] suma = new int[2][2];

        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 2; j++) {
                suma[i][j] = a[i][j] + b[i][j];
                System.out.print(suma[i][j] + " ");
            }
            System.out.println();
        }
    }
}
