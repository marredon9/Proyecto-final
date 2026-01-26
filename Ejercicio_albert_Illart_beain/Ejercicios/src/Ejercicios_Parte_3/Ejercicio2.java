package Ejercicios_Parte_3;

import java.util.Scanner;

public class Ejercicio2 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[][] matriz = new int[4][4];

        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                matriz[i][j] = (int)(Math.random() * 9) + 1;
                System.out.print(matriz[i][j] + " ");
            }
            System.out.println();
        }

        System.out.print("Introduce un numero N: ");
        int n = sc.nextInt();

        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                System.out.print((matriz[i][j] - n) + " ");
            }
            System.out.println();
        }
        sc.close();
    }
}
