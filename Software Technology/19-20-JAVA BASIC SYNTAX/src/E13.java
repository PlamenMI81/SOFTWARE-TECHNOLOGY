import java.util.Scanner;

//13. Reverse String
public class E13 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String input=scanner.nextLine();
        String reversed=new StringBuilder(input).reverse().toString();
        System.out.println(reversed);
    }
}
