# guide-webhooks - 自动部署博客，教程文档

## 操作步骤

1. 安装Git：`yum -y install git`
2. 开启php.ini配置模块中的 exec、shell_exec
3. 开启www：`www:x:1000:1000::/home/www:/sbin/nologin` = `bin/bash`
4. 切换 www 用户
5. 生产公钥：ssh-keygen -t rsa -C "你自己的邮箱.com" 确认3次
6. 配置公钥：https://github.com/settings/ssh/new 
7. 克隆站点：`git@github.com:fuzhengwei/guide-webhooks.git`
8. 配置 webhooks，在Github对应的代码库上


