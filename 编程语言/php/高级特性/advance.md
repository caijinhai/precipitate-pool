## php advance
* ArrayAccess
```
ArrayAccess {
/* 方法 */
abstract public boolean offsetExists ( mixed $offset )
abstract public mixed offsetGet ( mixed $offset )
abstract public void offsetSet ( mixed $offset , mixed $value )
abstract public void offsetUnset ( mixed $offset )
}
```

* Reflection
```
ReflectionClass
ReflectionFunction
...
```


* Spl Class
```
SplDoublyLinkedList — The SplDoublyLinkedList class
SplStack — The SplStack class
SplQueue — The SplQueue class
SplHeap — The SplHeap class
SplMaxHeap — The SplMaxHeap class
SplMinHeap — The SplMinHeap class
SplPriorityQueue — The SplPriorityQueue class
SplFixedArray — The SplFixedArray class
SplObjectStorage — The SplObjectStorage class
```

* 魔术方法
```
序列化：
__sleep()
__wakeup()

类实例化：
__construct()
__destruct()

类被当成字符串调用：
__toString()

调用不存在的属性时：
__set()
__get()

调用不存在的方法时：
__call()
__callStatic()

以调用函数的方式调用一个对象：
__invoke()

克隆对象时：
__clone()
```