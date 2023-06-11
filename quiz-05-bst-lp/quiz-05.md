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

The solution utilizes recursive traversal to calculate the sum of values in 
each branch of the tree. The longest branch is determined by comparing the sums 
of the branch values.

The longestBranch method takes a tree node and a sum as parameters. 
The sum keeps track of the values in the current branch. When the tree node is 
null, the method returns the sum of the current branch's values. Otherwise, 
the method recursively calls itself on the right and left nodes of the current 
node. Before the recursive calls, the current branch's sum is incremented by 
the value of the current node. The longest branch is determined by comparing 
the sums of the right and left branches.

