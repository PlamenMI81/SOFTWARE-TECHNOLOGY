import java.util.Scanner;

//03. Reverse Characters
public class E03 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String word="";
        for (int i = 0; i <3 ; i++) {
            word=word+scanner.nextLine();
        }
        word=new StringBuilder(word).reverse().toString();
        System.out.println(word);
    }
}
