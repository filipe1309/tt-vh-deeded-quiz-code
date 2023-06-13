# Longest Branch

Suppose that we define a node in binary a tree as follows

```php
class BinaryTreeNode {
    private int $nodeValue;
    private ?BinaryTreeNode $rightNode;
    private ?BinaryTreeNode $leftNode;
  
    public function __construct(int $nodeValue, BinaryTreeNode $rightNode = null, BinaryTreeNode $leftNode = null) 
    {
        $this->nodeValue = $nodeValue;
        $this->rightNode = $rightNode;
        $this->leftNode = $leftNode;
    }
}
```

Definitions:
The length of the branch - number of nodes from root to leaf
Sum of values in a branch - the sum of nodeValues in the branch

The goal of this question is to find the sum of the values of all nodes in longest branch.

Specific requirements:
1. Either recursion or iteration can be used
2. If a recursion is used the use of global variables is not allowed

//Note: To implement, any language can be used. If using a different syntax, please convert the function definition to the syntax appropriate to the language used

```php
function longestBranch(tree?: TreeNode): number{}
```

## Please implement a solution to Longest Branch

[Solution](./solution-01.php)

## Please explain your solution

The idea is to recursively traverse the given binary tree and for each node, 
find the length of the longest path in the left and right subtree. And then,
compare the left and right subtree and choose the largest one. 
Finally, return the sum of nodes present in the longest path as an Array.
