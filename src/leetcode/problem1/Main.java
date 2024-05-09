package leetcode.problem1;

import java.util.Arrays;
import java.util.HashMap;

public class Main {
    public static void main(String[] args) {
        Solution solution = new Solution();
        int[] answer1 = solution.twoSum(new int[]{2, 7, 11, 15}, 9);
        int[] answer2 = solution.twoSum(new int[]{3, 2, 4}, 6);
        int[] answer3 = solution.twoSum(new int[]{3, 3}, 6);

        System.out.println(Arrays.toString(answer1));
        System.out.println(Arrays.toString(answer2));
        System.out.println(Arrays.toString(answer3));
    }
}

/**
 * 1. Two Sum
 * @link <a href="https://leetcode.com/problems/two-sum">Link to problem</a>
 */
class Solution {
    public int[] twoSum(int[] nums, int target) {
        int a = -1, b = -1;
        HashMap<Integer, Integer> map = new HashMap<>();

        for (int i = 0; i < nums.length; i++) {
            int diff = target - nums[i];
            if (map.containsKey(diff)) {
                a = map.get(diff);
                b = i;
            }
            map.put(nums[i], i);
        }

        return new int[]{a, b};
    }
}
