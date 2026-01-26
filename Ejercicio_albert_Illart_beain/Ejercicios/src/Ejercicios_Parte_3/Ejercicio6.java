package Ejercicios_Parte_3;

public class Ejercicio6 {
    public static void main(String[] args) {
        int[][] matriz = {
                { 3, 5, 1 },
                { 9, 2, 8 }
        };

        int max = matriz[0][0];
        int min = matriz[0][0];
        int filaMax = 0, colMax = 0;
        int filaMin = 0, colMin = 0;

        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[0].length; j++) {
                if (matriz[i][j] > max) {
                    max = matriz[i][j];
                    filaMax = i;
                    colMax = j;
                }
                if (matriz[i][j] < min) {
                    min = matriz[i][j];
                    filaMin = i;
                    colMin = j;
                }
            }
        }

        System.out.println("Maximo: " + max + " en (" + filaMax + "," + colMax + ")");
        System.out.println("Minimo: " + min + " en (" + filaMin + "," + colMin + ")");
    }
}
