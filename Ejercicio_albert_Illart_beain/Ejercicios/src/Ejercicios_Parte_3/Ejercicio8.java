package Ejercicios_Parte_3;

public class Ejercicio8 {
    public static void main(String[] args) {
        int[][] matriz = new int[6][6];

        for (int i = 0; i < 6; i++) {
            for (int j = 0; j < 6; j++) {
                matriz[i][j] = i + 1;
                System.out.print(matriz[i][j] + " ");
            }
            System.out.println();
        }
    }
}

