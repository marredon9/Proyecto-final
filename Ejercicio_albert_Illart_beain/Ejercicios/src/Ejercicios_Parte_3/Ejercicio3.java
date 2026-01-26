package Ejercicios_Parte_3;

public class Ejercicio3 {
    public static void main(String[] args) {
        int[][] matriz = {
                { 1, 2, 3 },
                { 4, 5, 6 },
                { 7, 8, 9 }
        };

        int[] diagP = new int[3];
        int[] diagS = new int[3];

        for (int i = 0; i < 3; i++) {
            diagP[i] = matriz[i][i];
            diagS[i] = matriz[i][2 - i];
        }

        System.out.println("Diagonal principal:");
        for (int i = 0; i < 3; i++) {
            System.out.print(diagP[i] + " ");
        }

        System.out.println("\nDiagonal secundaria:");
        for (int i = 0; i < 3; i++) {
            System.out.print(diagS[i] + " ");
        }
    }
}
