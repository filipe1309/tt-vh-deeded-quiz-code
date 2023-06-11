# A bit of JavaScript

```js
var A=(function()){
    function Person(name) {
        this.name=name;
    }
    var m=function(){
    return "Hello " + this.name;
    };

    Person.prototype.getGreeting=m;

    return Person;
})();
```

## How would you call the code above to have it return "Hello Tom"?

[Solution](./solution-01.js)
