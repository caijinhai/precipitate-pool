## 单例模式
* 理解
> 对象只实例化一次

* 目的
> 方便访问的是同一个对象的实例

* 实现
```
class Singleton {
	private static $instance = null;

	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}
```
