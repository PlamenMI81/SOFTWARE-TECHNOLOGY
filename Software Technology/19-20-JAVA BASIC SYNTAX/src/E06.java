import java.util.Arrays;
import java.util.Scanner;

//06. Compare Char Arrays
public class E06 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String first=scanner.nextLine();
        String second=scanner.nextLine();
        first=first.replaceAll(" ","");
        second=second.replaceAll(" ","");
        String[] words=new String[2];
        words[0]=first;
        words[1]=second;
        Arrays.sort(words);
        for (String word:words) {
            System.out.println(word);
        }
    }
}
