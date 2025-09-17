FROM php:8.1-cli

# 設定工作目錄
WORKDIR /app

# 複製專案
COPY . /app

# 安裝 Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# 安裝依賴（如果有 composer.json）
RUN composer install --no-dev --optimize-autoloader

# 啟動內建 server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
