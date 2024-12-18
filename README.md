# yansongda/pay issue 1031

- https://github.com/yansongda/pay/issues/1031


# 安装步骤

```bash
wget https://github.com/dunglas/frankenphp/releases/download/v1.3.3/frankenphp-linux-x86_64
chmod +x frankenphp-linux-x86_64
mv frankenphp-linux-x86_64 /usr/local/bin

composer install -vvv
```

# 以 `octane` 模式启动服务

```bash
php artisan octane:frankenphp --port 6070 --host 0.0.0.0 --admin-port 6071
```

# 复现方式

访问 http://127.0.0.1:6070/ 后 刷新两次即可

