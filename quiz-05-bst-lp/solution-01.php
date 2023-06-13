<?php

class BinaryTreeNode
{
    public function __construct(
        public int $nodeValue,
        public ?BinaryTreeNode $rightNode = null,
        public ?BinaryTreeNode $leftNode = null
    ) {
    }

    private function calculateSum(BinaryTreeNode $tree = null, int $sum = 0, int $len = 0): array
    {
        if ($tree == null) {
            return ['len' => $len, 'sum' => $sum];
        }

        // recur for left and right subtree with increased length and sum
        $left = $this->calculateSum($tree->leftNode, $sum + $tree->nodeValue, $len + 1);
        $right = $this->calculateSum($tree->rightNode, $sum + $tree->nodeValue, $len + 1);

        // compare de length of the left and right subtree and choose the largest one
        return ($left['len'] > $right['len']) ? $left : $right;
    }

    // Function to calculate the sum of nodes present in the longest path of the binary tree
    public function longestBranch(BinaryTreeNode $tree = null): int
    {
        if ($tree == null) {
            return 0;
        }

        $result = $this->calculateSum($tree, 0, 0);

        return $result['sum'];
    }
}

// Explanation of the solution
/* 
The idea is to recursively traverse the given binary tree and for each node, 
find the length of the longest path in the left and right subtree. And then,
compare the left and right subtree and choose the largest one. 
Finally, return the sum of nodes present in the longest path as an Array.
*/

// Example

//       8
//      / \
//     3   10
//    / \   \
//   1   6   14
//        \
//         7
// Longest branch: 8 -> 3 -> 6 -> 7 = 24

$tree = new BinaryTreeNode(
    8,
    new BinaryTreeNode(
        3,
        new BinaryTreeNode(1),
        new BinaryTreeNode(
            6,
            null,
            new BinaryTreeNode(7)
        )
    ),
    new BinaryTreeNode(
        10,
        null,
        new BinaryTreeNode(14)
    )
);


echo $tree->longestBranch($tree) . PHP_EOL; //  24

$tree = new BinaryTreeNode(
    4,
    new BinaryTreeNode(
        2,
        new BinaryTreeNode(7),
        new BinaryTreeNode(
            1,
            new BinaryTreeNode(6),
            null
        )
    ),
    new BinaryTreeNode(
        5,
        new BinaryTreeNode(2),
        new BinaryTreeNode(3)
    )
);


echo $tree->longestBranch($tree) . PHP_EOL; //  13
