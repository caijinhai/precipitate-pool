## 简历
---------
### 个人信息
- 蔡金海/男/1995
- 本科/武汉工程大学
- 工作年限：2年
- 联系方式：15927471480/cjh123honey@gmail.com
- Github：http://github.com/caijinhai
- 求职岗位：软件开发工程师（PHP/Go/SRE）

### 技能清单
以下均为我熟练使用的技能
- 编程语言：PHP/Go
- Web框架：Laravel/Yii/ThinkPHP/Gin
- 数据库：MySQL/Redis/Mongodb
- 版本管理：Git
- 容器化工具：Docker/Kubernetes
- 运维自动化工具：Shell/Ansible

### 工作经历
#### 群硕软件（2017年3月～2019年3月）

##### 1. vivo智能手机全国终端与会员运营平台
> `项目简介`：公司自研SCRM产品级SaaS平台，为vivo智能手机部署全平台并定基于平台制研发智慧门店与智慧导购产品，统一管控vivo全国35个省级代理，平台接入并运营vivo全国70+省级微信公众号，初期上线即运营全国2500万vivo粉丝，平均日活260万+，通过业务强管控全国20万+一线导购，打通工厂、品牌、渠道、终端门店与顾客的闭环，增强会员互动，为vivo智能手机2017到2018年度的“存量用户运营”战略级转型提供平台支撑并取得相当好的效果
> `技术栈`：Vue + Angularjs + Yii + MongoDB
> `职责`：做为核心开发人员，参与项目完整实施与交付过程
>- 手机端 (vue) 和 PC (Augularjs) 端页面开发
>- mongodb js脚本开发，数据聚合处理，业务统计报表开发
>- 对接vivo开发人员，实现 CAS 单点登录方案集成
>- 开发vivo服务号订阅号红包支付功能和微信群发功能以及生成业务统计报表

##### 2. vivo智能手机多级分销管控平台级营销系统
> `项目简介`：vivo智能手机下一代平台级营销系统，打通工厂与省代间所有分销、营销、人事与仓库等业务，集成工厂ERP、BPM、PLM，迁移多种形态的已有分销数据，最终实现全国统一的分销系统，统管工厂与各级代理到终端业务员的所有销售业务，提高管理效率。目前系统一期已经接近尾声，所有开发与测试完毕，临近试点省代上线与推广。平台采用微服务架构，使用多种开源技术，快速迭代交付
> `技术栈`：Java Spring Boot + K8S + Istio微服务设计
> `系统架构`：
> | 名称 | 技术 |
> | ------- | -------------------------------------------------------- |
> | 数据库     | Percona XtraDB Cluster |
| 缓存服务     | Redis master slave |
| 代码部署托管  | Gitlab |
| 镜像仓库    | Harbor |
| CI/CD   | Jenkins　+　K8S + Istio |
| 日志监控    | Fluentd + Elasticsearch + Kibana |
| 性能监控    | Prometheus + Grafana |
| 对象存储    | Ceph |
| 运维工具    | Ansible |
> `职责`：做为核心开发人员，从最初架构搭建准备一直做到临近一期上线
> - 构建websocket消息推送模块，协作构建job模块
> - test,stage,uat等基础环境架构搭建
> - 日常开发运维support，完善技术文档及说明
> - 构建整套环境体系Ansible自动化安装部署
> - 其他技术尝试： Kafka/Zookeeper/Clickhouse/Sharding-jdbc/naftis

##### 3. 公司产品级平台-群脉SCRM - 私有化
> `项目简介`：把将群脉SCRM平台架构快速复制到本地机房，由全云依赖改成完全本地服务器私有化部署，为拒绝采用云平台的传统企业提供了私有机房快速实施SCRM平台的可能性
> `技术栈`： 整个平台架构及Devops过程
> `职责`：做为核心开发人员，参与完整实施过程
> - 熟悉群脉 Devops 构建，和系统架构设计,并成功在私有机房构建整套架构
> - - Kubernetes集群服务部署（frontend + backend + grpc services）
> - - 日志监控系统（journalbeat + logstash + elasticsearch + kibana）
> - - 性能监控系统（telegraf + influxdb + grafana）
> - 负责服务docker化，服务涉及mongodb/redis/grpc/consul/rocketmq等
> - Research 并成功实践 Haproxy + Keepalive 高可用方案，确保K8s集群高可用

##### 4. 基于Serverless的国外品牌运营Demo项目
> `项目简介`：基于Serverless的国外品牌运营Demo项目
> `技术栈`：Vue + Nodejs + Golang + MongoDB + Serverless Framework + AWS(S3, CloudFront, Cognito, Lambda Functions)
> `职责`：做为开发组长，参与完整研究与实施过程，并带领组员快速用Golang实施基于AWS的函数式无服务后台API
> - 用go开发api对应的lambda function，部署在AWS上面，给Unity App调用
> - 后端nodejs服务的构建及serverless lambda function 构建及部署
> - 以swagger构建了整个项目的API文档
> - 以vuepress构建了整个项目的技术文档Guidance
> - 其他技术探索： graphQL


#### 敦煌网（2016年7月～2016年10月）（实习）
##### 1. PHP项目开发
> `技术栈`：PHP + Yaf + Zend
> `职责`：
> - 根据技术部门自己的需求，基于禅道系统，进行二次开发
> - 熟悉EDM(邮件营销)，基于用户浏览商品通过邮件给用户发送推荐
### 自我评价
* 善于学习，认真踏实，性格开朗，有较强的责任心、进取心；
* 经历了从单一后端语言开发到多后端语言开发的思想转变；
* 经历了从选择喜欢的语言到选择适合的语言的思想转变；
* 开拓了从开发到运维到架构的全局观；

### 致谢
感谢您花时间阅读我的简历，期待能有机会和您共事。


