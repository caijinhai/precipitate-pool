## 工厂模式
* 理解
> 将new创建类的实例的方式交给工厂来完成

* 目的
> 实现解藕

* 实现
```
class Student {
	public function work() {
		return 'learning';
	}
}


use Student;
class Factory {
	public static function createStudent() {
		return new Student();
	}
}


use Factory;
class ClassRoom {
	public function toDo() {
		$student = Factory::createStudent();
		$student->work();
	}
}
```


## 抽象工厂
```
# toDo
```


## 高级工厂
```
# toDo
```