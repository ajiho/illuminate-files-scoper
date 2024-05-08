# illuminate-files-scoper


当您安装`illuminate/*`下面的所有系列组件时,它会自动给laravel提供的helpers助手添加一个命名空间


# 安装

```bash
composer require ajiho/illuminate-files-scoper
```


# 具体用例

当您在非laravel框架中想使用以下强大的组件时,可能会因为方法同名导致您框架的方法被laravel提供的helpers助手覆盖
导致功能失效。

- [illuminate/database](https://github.com/illuminate/database)
- [illuminate/view](https://github.com/illuminate/view)


