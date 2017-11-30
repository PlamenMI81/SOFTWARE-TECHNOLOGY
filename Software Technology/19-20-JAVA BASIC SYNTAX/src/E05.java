import java.util.Scanner;

//05. Integer to Hex and Binary
public class E05 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int input = Integer.parseInt(scanner.nextLine());

        String num16 = Integer.toHexString(input).toUpperCase();
        String numBin = Integer.toBinaryString(input);

        System.out.println(num16);
        System.out.println(numBin);
    }
}
