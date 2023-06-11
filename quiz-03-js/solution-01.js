var A = (function () {
    function Person (name) {
        this.name = name;
    }
    var m = function () {
        return "Hello " + this.name;
    };

    Person.prototype.getGreeting = m;

    return Person;
})();

var tom = new A("Tom");
console.log(tom.getGreeting());
