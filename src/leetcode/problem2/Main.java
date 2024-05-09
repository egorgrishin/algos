package leetcode.problem2;

public class Main {
    public static void main(String[] args) {
        ListNode l1 = new ListNode(2, new ListNode(4, new ListNode(3)));
        ListNode l2 = new ListNode(5, new ListNode(6, new ListNode(4)));
        ListNode l3 = (new Solution()).addTwoNumbers(l1, l2);

        System.out.println(l3);
    }
}

class ListNode {
    int val;
    ListNode next;

    ListNode(int val) {
        this.val = val;
    }

    ListNode(int val, ListNode next) {
        this.val = val;
        this.next = next;
    }
}

class Solution {
    public ListNode addTwoNumbers(ListNode l1, ListNode l2) {
        int sum = l1.val + l2.val;
        l1 = l1.next;
        l2 = l2.next;
        int append = sum / 10;
        sum %= 10;

        ListNode node = new ListNode(sum);
        ListNode last = node;

        while (l1 != null || l2 != null) {
            sum = 0;
            if (l1 != null) {
                sum += l1.val;
                l1 = l1.next;
            }
            if (l2 != null) {
                sum += l2.val;
                l2 = l2.next;
            }
            sum += append;
            append = sum / 10;
            sum %= 10;

            last.next = new ListNode(sum);
            last = last.next;
        }

        if (append > 0) {
            last.next = new ListNode(append);
        }

        return node;
    }
}
