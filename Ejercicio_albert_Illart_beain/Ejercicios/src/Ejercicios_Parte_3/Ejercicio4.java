package Ejercicios_Parte_3;

public class Ejercicio4 {
    public static void main(String[] args) {
        int[][] matriz = {
            {1,2,3},
            {4,5,6}
        };

        int[][] traspuesta = new int[3][2];

        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 3; j++) {
                traspuesta[j][i] = matriz[i][j];
            }
        }

        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 2; j++) {
                System.out.print(traspuesta[i][j] + " ");
            }
            System.out.println();
        }
    }
}