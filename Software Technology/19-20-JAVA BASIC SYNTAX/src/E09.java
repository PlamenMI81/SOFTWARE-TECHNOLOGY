import java.util.*;
import java.util.function.BinaryOperator;

//09. Most Frequent Number
public class E09 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int[] numArr = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

    }
}
