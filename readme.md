
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## 学习 Laravel
参考标准文档部署网站
- [https://laravel.com/docs/5.4](https://laravel.com/docs/5.4).

>  创建项目 5.4版本的一个laravel项目
```
composer create-project --prefer-dist laravel/laravel blog "5.4.*"
```
>  启动网站服务
```
php artisan serve
```
>  网页上访问本地网站地址
```
http://localhost:8000:
```
>  Nginx服务重写规则配置
```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```
> .env配置测试环境和数据库

多用户表登录实现，[参考地址](http://laravelacademy.org/post/5925.html).
> 默认认证
```
php artisan make:auth
```
认证的路由也一并生成好了，查看路由文件routes/web.php，会发现该文件已经被更新