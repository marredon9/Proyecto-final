package Ejercicios_Parte_3;

import java.util.Scanner;

public class Ejercicio14 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        char[][] tablero = {
                { ' ', ' ', ' ' },
                { ' ', ' ', ' ' },
                { ' ', ' ', ' ' }
        };

        boolean fin = false;

        while (!fin) {
            mostrar(tablero);

            System.out.print("Fila (0-2): ");
            int f = sc.nextInt();
            System.out.print("Columna (0-2): ");
            int c = sc.nextInt();

            if (tablero[f][c] == ' ') {
                tablero[f][c] = 'X';
            } else {
                System.out.println("Casilla ocupada");
                continue;
            }

            if (ganador(tablero, 'X')) {
                mostrar(tablero);
                System.out.println("Has ganado");
                break;
            }

            if (lleno(tablero)) {
                mostrar(tablero);
                System.out.println("Empate");
                break;
            }

            int fo, co;
            do {
                fo = (int) (Math.random() * 3);
                co = (int) (Math.random() * 3);
            } while (tablero[fo][co] != ' ');

            tablero[fo][co] = 'O';

            if (ganador(tablero, 'O')) {
                mostrar(tablero);
                System.out.println("Gana el ordenador");
                break;
            }
        }
        sc.close();
    }

    static void mostrar(char[][] t) {
        System.out.println("---------");
        for (int i = 0; i < 3; i++) {
            System.out.println(t[i][0] + "|" + t[i][1] + "|" + t[i][2]);
        }
        System.out.println("---------");
    }

    static boolean ganador(char[][] t, char j) {
        for (int i = 0; i < 3; i++) {
            if (t[i][0] == j && t[i][1] == j && t[i][2] == j)
                return true;
            if (t[0][i] == j && t[1][i] == j && t[2][i] == j)
                return true;
        }

        if (t[0][0] == j && t[1][1] == j && t[2][2] == j)
            return true;
        if (t[0][2] == j && t[1][1] == j && t[2][0] == j)
            return true;

        return false;
    }

    static boolean lleno(char[][] t) {
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                if (t[i][j] == ' ')
                    return false;
            }
        }
        return true;
    }
}
