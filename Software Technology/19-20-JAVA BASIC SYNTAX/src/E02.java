import java.util.Scanner;

//02. Boolean Variable
public class E02 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String input=scanner.nextLine();
        if (input.equals("True")){
            System.out.println("Yes");
        }else{
            System.out.println("No");
        }
    }
}
