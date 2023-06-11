# Tracing

You have been provided with the following code in no specific language:
Pre: both inputs are positive integers


```kt
fun f(first: Integer, second: Integer) : Integer {
    if (first == 0) {
        return second;
    } else {
        return f(first-1, second+1);
    }
}
```

## Please give an exact definition of what this code does

The code above is a recursive function that adds two numbers by decrementing the first number and incrementing the second number until the first number is equal to 0.

## Rewrite this code in PHP while making it more readable

[Solution](./solution-01.php)
