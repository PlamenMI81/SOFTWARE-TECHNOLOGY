import java.util.Scanner;

//04. Vowel or Digit
public class E04 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String charecter=scanner.nextLine().toLowerCase();
        if (vowel(charecter)){
            System.out.println("vowel");
        }
        else if (digit(charecter)){
            System.out.println("digit");
        }
        else
            System.out.println("other");
    }

    private static boolean digit(String charecter) {
        String vowels="0123456789";
        return vowels.contains(charecter);
    }

    private static boolean vowel(String charecter) {
        String vowels="aouei";
        return vowels.contains(charecter);
    }
}
