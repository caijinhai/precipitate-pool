### 面试

投递方式：邮箱内推
公司：腾讯
岗位：游戏后端开发

腾讯一面：

先自我介绍下。

1. TCP三次握手，四次挥手，简要说明一下？
四次挥手没有答上来，记忆不太清楚
https://baijiahao.baidu.com/s?id=1596016296668694374&wfr=spider&for=pc

2. 说说请求从浏览器到后端的整个过程？
浏览器发起请求 --> nginx --> nginx server --> php fastcgi --> php worker --> php 程序处理

3. nginx 如何请求转发（/a/b/.* --> /a/b）
location /a/b/(.*)$ {
	rewrite ...
}

Location -- rewrite
https://segmentfault.com/a/1190000002797606

4. 问用的PHP几？然后说用的PHP7.0，问有没有用PHP5几版本，有何改动？
我就说了个性能有很大提高，有一些新特性，具体忘记了。

5. 画一下php Yii框架结构
https://www.yiichina.com/doc/guide/2.0/images/application-structure.png

6. Yii类的加载？
sql_autoload_register()

7. PHP ip2long 实现？
没能完全实现。。。注意是用二进制进行位运算
https://www.cnblogs.com/zhouzme/p/5758430.html

8. mysql innodb & myisam 区别？
innodb: 事物支持，行级锁
myisam: 表级锁
忘记说两种索引的区别了，纯粹忘说了，他也没问，我就没说。

9. 如何查看sql的允许时间？
explain 
https://www.cnblogs.com/yycc/p/7338894.html

10. 如何查找最近三小时运行的sql语句？
当时只说了个information_schema库中有，具体不记得。
有一下几种：
https://www.cnblogs.com/jhin-wxy/p/8965888.html

11. 一个表中有两个字段A，B， A与B的关系是多对一，查询B与相对于的A的count数？
我当时写了个复杂的join, 连表查的，后来说优化一下用Having关键字，其实也停简单的。
select B, count(A) as c from temp group by B Having c >= 1;

12. redis用过吗？
说了下redis 的五种数据结构，string, list, hash, set, zset

13. redis string操作是线程安全的吗？
当时就说了不知道，不敢说
redis是单线程，string的操作应该是线程安全的。

14. linux 如何查看cpu信息？
cat /proc/cpuinfo, htop, top
https://www.cnblogs.com/emanlee/p/3587571.html

15. 四核CPU机器，CPU最大能达到多大？
400%， 这个在平时看到好像有超过100%的，就说了个400%
https://www.cnblogs.com/duhuo/p/6065921.html

实际上这个只是在top命令看时显示的是总数，htop看时就不会这样的。

16. 最后一个问题，有两个文件，文件中分别有两列，打印出两个文件中的一列相同的行？
当时用awk命令尝试写了一下，没写出来...

回来瞎写了一下：

#!/bin/bash
# 1
a 123
b 122

# 2
a 1111
c 1222

# 若第一列相同则输出
awk '{a[$1]++;if(a[$1]<2){b[$1]=$0}else{b[$1]=b[$1]" "$0}} END { for(c in a) if(a[c] > 1) print b[c]}' a.txt b.txt | awk '{print $1, $2, $4}'


一面感觉只答好了60%左右