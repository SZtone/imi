# imi-demo

## 使用说明

* 本 Demo 命名空间为 `ImiApp\`，你可以自行修改为自己项目的名称
* 修改完所有文件中的命名空间后，记得重新更新`composer`文件

运行服务`bin/imi server/start`

命令行工具`bin/imi 工具名称`

命令行帮助`bin/imi -h`

## 目录结构

```
├─.runtime          —— 运行时有文件生成在这
├─ApiServer         —— api 服务器
│  ├─config         —— api 服务器配置目录
│  └─Controller     —— 控制器
├─bin               —— 项目可执行文件
├─config            —— 项目配置
├─logs              —— 日志
├─Modules           —— 模块
   └─Test           —— 模块名
       ├─Model      —— 模块-模型
       └─Service    —— 模块-服务层（你也可以自定义其他名字，没有硬性规定）
```

## 代码仓库

码云：https://gitee.com/yurunsoft/IMI

Github：https://github.com/Yurunsoft/IMI

## 文档手册

https://doc.imiphp.com/
