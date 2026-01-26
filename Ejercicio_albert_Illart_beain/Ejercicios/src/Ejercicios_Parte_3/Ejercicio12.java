package Ejercicios_Parte_3;

public class Ejercicio12 {
    public static void main(String[] args) {
        int[][] m = {
                { 3, 1, 3 },
                { 2, 4, 5 },
                { 6, 7, 8 }
        };

        for (int i = 0; i < m.length; i++) {
            int minFila = m[i][0];
            int col = 0;

            for (int j = 1; j < m[0].length; j++) {
                if (m[i][j] < minFila) {
                    minFila = m[i][j];
                    col = j;
                }
            }

            boolean puntoSilla = true;
            for (int k = 0; k < m.length; k++) {
                if (m[k][col] > minFila) {
                    puntoSilla = false;
                }
            }

            if (puntoSilla) {
                System.out.println("Punto de silla: " + minFila);
            }
        }
    }
}
