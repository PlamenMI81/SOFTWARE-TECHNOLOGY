import java.util.Arrays;
import java.util.Scanner;

//07. Max Sequence of Equal Elements
public class E07 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int[] numArr = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        int len = 1;
        int bestStart = 0;
        int bestLen = 1;
        for (int i = 1; i <= numArr.length - 1; i++) {
            if (numArr[i] == numArr[i - 1]) {
                len++;
            } else {
                len = 1;
            }
            if (len > bestLen) {
                bestStart = numArr[i];
                bestLen = len;
            }
        }
        for (int i = 1; i <= bestLen; i++) {
            if (i != bestLen)
                System.out.printf("%s ", bestStart);
            else
                System.out.printf("%s", bestStart);
        }
    }
}
