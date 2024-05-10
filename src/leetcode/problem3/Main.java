package leetcode.problem3;

import java.util.Arrays;
import java.util.HashMap;

public class Main {
    public static void main(String[] args) {
        int t1 = (new Solution()).lengthOfLongestSubstring("pwwkew");
        int t2 = (new Solution2()).lengthOfLongestSubstring("pwwkew");
        System.out.println(t1);
        System.out.println(t2);
    }
}

class Solution {
    public int lengthOfLongestSubstring(String s) {
        HashMap<Character, Integer> map = new HashMap<>();
        int start = 0;
        int max = 0;

        for (int i = 0; i < s.length(); i++) {
            Character ch = s.charAt(i);
            Integer last = map.get(ch);
            if (last == null || last < start) {
                max = Math.max(max, i - start + 1);
            } else {
                start = last + 1;
            }
            map.put(ch, i);
        }

        return max;
    }
}

class Solution2 {
    public int lengthOfLongestSubstring(String s) {
        int start = 0;
        int max = 0;
        int[] letters = new int[128];
        Arrays.fill(letters, -1);

        for (int i = 0; i < s.length(); i++) {
            char ch = s.charAt(i);
            if (letters[ch] >= start) {
                start = letters[ch] + 1;
            }
            letters[ch] = i;
            max = Math.max(max, i - start + 1);
        }

        return max;
    }
}
