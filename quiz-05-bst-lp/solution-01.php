<?php

class BinaryTreeNode
{
    public function __construct(
        public int $nodeValue,
        public ?BinaryTreeNode $rightNode = null,
        public ?BinaryTreeNode $leftNode = null
    ) {
    }

    public function longestBranch(BinaryTreeNode $tree = null, int $sum = 0): int
    {
        if ($tree == null) {
            return $sum;
        }
        return max(
            $this->longestBranch($tree->rightNode, $sum + $tree->nodeValue),
            $this->longestBranch($tree->leftNode, $sum + $tree->nodeValue)
        );
    }
}

// Example
$tree = new BinaryTreeNode(
    1,
    new BinaryTreeNode(
        2,
        new BinaryTreeNode(4),
        new BinaryTreeNode(
            5,
            new BinaryTreeNode(8),
            null
        )
    ),
    new BinaryTreeNode(
        3,
        new BinaryTreeNode(6),
        new BinaryTreeNode(7)
    )
);

//       1
//      / \
//     2   3
//    / \ / \
//   4  5 6  7
//     /
//    8
// Longest branch: 1 -> 2 -> 5 -> 8 = 16

echo $tree->longestBranch($tree);
