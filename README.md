# 基于PHP与Laravel的多人博客论坛

## 特别鸣谢

1. learnku.com

2. @summerblue

## Quick Start

1.   安装Sail容器（需要使用Docker）

     具体安装参照：https://learnku.com/docs/laravel-development-environment/9.x/building-the-sail-environment-under-macos/12319#cca348

2.   启动Sail容器

     ```
     ./vendor/bin/sail up
     ```

3.   配置相应数据库配置，具体配置参照项目 `.env` 文件

     ```
     DB_CONNECTION=mysql
     DB_HOST=
     DB_PORT=3306
     DB_DATABASE=laravel
     DB_USERNAME=sail
     DB_PASSWORD=password
     ```

     -   若出现无法连接数据库问题，将本地数据库IP地址改为真实IP地址
         -   如：127.0.0.1改为192.168.xx.xx

4.   执行自动生成数据命令

     ```
     php artisan migrate:refresh --seed  
     ```

5.   访问 `localhost:80` 地址
