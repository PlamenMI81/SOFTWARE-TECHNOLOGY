import java.util.HashMap;

public class E10 {
    public static void main(String args[]) {
        // create hash map
        HashMap<Integer, String> newmap = new HashMap<>();

        // populate hash map
        newmap.put(1, "tutorials");
        newmap.put(2, "point");
        newmap.put(3, "is best");

        // checking collection view of the map
        System.out.println("Collection view is: "+ newmap.values());
    }
}
