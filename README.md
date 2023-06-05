# 基于PHP与Laravel的多人博客论坛

## 特别鸣谢

1. learnku.com

2. @summerblue

## Quick Start

1.   安装composer依赖

     ```
     composer install
     ```

2.   启动Sail容器

     ```
     ./vendor/bin/sail up
     ```

3.   配置相应数据库配置，具体配置参照项目 `.env.example` 文件，修改完毕后将其改为 `.env` 文件

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
     
5.   执行如下命令，安装依赖，监听前端页面变化并动态更新网页

     ```
     npm install
     npm run watch-poll
     ```

6.   访问 `localhost:80` 地址
