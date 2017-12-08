import java.util.*;
//09. Most Frequent Number -> 80%
public class E09 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        HashMap<Integer,Integer> nums=new HashMap<>();
        int[] numArr = Arrays
                .stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        for (Integer element : numArr) {
            if (nums.containsKey(element)) {
                nums.put(element, nums.get(element) + 1);
            } else {
                nums.put(element, 1);
            }
        }
        Integer key = Collections.max(nums.entrySet(), Map.Entry.comparingByValue()).getKey();
        System.out.println(key);
    }
}
