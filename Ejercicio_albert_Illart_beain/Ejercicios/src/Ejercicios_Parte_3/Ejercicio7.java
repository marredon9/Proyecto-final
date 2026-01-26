package Ejercicios_Parte_3;

public class Ejercicio7 {
    public static void main(String[] args) {
        int[][] matriz = {
                { 1, 2, 3 },
                { 4, 5, 6 }
        };

        int i = 0;
        int j = 1;

        for (int col = 0; col < matriz[0].length; col++) {
            int aux = matriz[i][col];
            matriz[i][col] = matriz[j][col];
            matriz[j][col] = aux;
        }

        for (int f = 0; f < matriz.length; f++) {
            for (int c = 0; c < matriz[0].length; c++) {
                System.out.print(matriz[f][c] + " ");
            }
            System.out.println();
        }
    }
}
