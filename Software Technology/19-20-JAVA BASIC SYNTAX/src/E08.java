import java.util.Arrays;
import java.util.Scanner;

//07. Max Sequence of Equal Elements
public class E08 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int[] numArr = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        int start = 0;
        int bestStart = 0;
        int len = 1;
        int bestLen = 1;
        for (int i = 1; i < numArr.length; i++) {
            if (numArr[i] > numArr[i - 1]) {
                len++;
                if (len > bestLen) {
                    bestStart = start;
                    bestLen = len;
                }
            } else {
                len = 1;
                start = i;
            }
        }
        for (int i = bestStart; i < bestStart + bestLen; i++) {
            System.out.print(numArr[i] + " ");
        }
    }
}
