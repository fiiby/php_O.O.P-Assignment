1. Abstract Classes
- Description:
An abstract class in PHP is a class that cannot be instantiated on its own. It serves as a blueprint for other classes, providing abstract methods that must be implemented by its subclasses. An abstract class can have both abstract and concrete (regular) methods.

- When to Use:
When you want to define a common base class that outlines methods that subclasses must implement.
When some methods have shared functionality but the implementation of others should be deferred to child classes. 
------------------------
2- Interfaces
- Description:
An interface in PHP defines a contract for classes to follow. It only includes method declarations without any implementation. A class that implements an interface must define all the methods declared in the interface.

- Significance:
Interfaces are useful for defining the structure of a class without specifying how it should behave.
They allow for multiple inheritance since a class can implement multiple interfaces. 

- difference between classes and interfaces:
    - Class:
    1- can have a properties
    2- can have a methods
    3-can be instantited
    4- can inherit from other classes
    5- the purpose of classes is provides a blueprint for creating objects
    
    - Interfaces:
    1- can not have properties
    2- contains only method declarations
    3- ca not be instantiated 
    4- can  extend other interfaces.
    - it must be implemented by multiple classes.
    the purpose of interface is defines a contract for methods that classes must implement.
-----------------------------------
3- Namespaces:
A namespace in PHP are used to avoid name collisions between classes, functions, and constants. They allow developers to group logically related classes under a common name. This is especially useful in large applications where different libraries may define classes with the same name.

- Importance:
Helps to prevent conflicts between classes with the same name.
Makes the code more modular and organized. 
--------------------------------------
4- Concept of Iterables:
An iterable is any data structure that can be looped over with the foreach loop or any other iterator. The term "iterable" refers to an abstraction that can be used to access elements one by one. In PHP, arrays and objects that implement the Traversable interface (like Iterator and IteratorAggregate) are examples of iterables.

PHP provides built-in support for iterables, allowing you to create custom data structures that can be traversed, such as collections, linked lists, or trees.

- Key Interfaces Related to Iterables:
Iterator Interface: Defines methods to traverse objects (e.g., current(), next(), key(), valid(), and rewind()).
IteratorAggregate Interface: Requires a single method getIterator(), which returns an object implementing Iterator. This is useful when an object needs to delegate the iteration to another object.
From PHP 7.1 onwards, iterable is also a pseudo-type, which means it can represent both arrays and objects that implement Traversable. You can use the iterable keyword in function signatures to accept any iterable data structure.

- Applications of Iterables
Iterables are commonly used in:

Custom Data Structures: To create collections, queues, or stacks that can be iterated over using foreach.
Lazy Loading: For loading data only when needed in large datasets.
Database Result Sets: To iterate over records without loading them all at once.
 
 --------------------------------------
 5-Traits:
 A trait in PHP is a mechanism for code reuse in single inheritance languages like PHP. Traits allow developers to reuse methods across different classes without requiring a class to extend another. They are essentially sets of methods that can be "included" in multiple classes.

- Difference from Classes and Interfaces:
Unlike classes, traits cannot be instantiated on their own.
Unlike interfaces, traits can contain both concrete and abstract methods.
-----------------------------------------
6-Static Properties and Methods:
- Description:
- Static properties and methods in PHP belong to the class itself rather than any specific instance. This means you can access static members without creating an object of the class.

- Use Cases:
- Static methods and properties are useful when the functionality should be independent of an instance.

- Common examples include utility functions, counters, and settings shared across all instances.
----------------------------------------
