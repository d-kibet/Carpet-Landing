# Deployment Guide - Raha Express Carpet Wash

## Pre-Deployment Checklist

✅ Code formatted with Laravel Pint
✅ No debug statements (dd, dump, var_dump, console.log)
✅ .env.example updated with production values
✅ Production assets compiled
✅ Database migrations ready
✅ Storage link configured

## Server Requirements

- PHP 8.2 or higher
- MySQL 5.7+ or MariaDB 10.3+
- Composer 2.x
- Node.js 20.19+ or 22.12+ (for building assets)
- Web server (Apache/Nginx)

## Deployment Steps

### 1. Upload Files to Server

Upload all files except:
- `.env` (create new on server)
- `node_modules/`
- `vendor/`
- `storage/` (except .gitignore files)
- `.git/`

### 2. Set Up Environment

```bash
# Copy the example environment file
cp .env.example .env

# Edit .env with production values
nano .env
```

**Critical .env settings:**

```env
APP_NAME="Raha Express Carpet Wash"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=your_db_host
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_secure_password

FILESYSTEM_DISK=public
QUEUE_CONNECTION=database
CACHE_STORE=database
SESSION_DRIVER=database

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_smtp_username
MAIL_PASSWORD=your_smtp_password
MAIL_FROM_ADDRESS="info@rahaexpress.com"
MAIL_FROM_NAME="Raha Express Carpet Wash"
```

### 3. Install Dependencies

```bash
# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install Node dependencies (if building on server)
npm ci

# Build production assets
npm run build
```

### 4. Configure Application

```bash
# Generate application key
php artisan key:generate

# Create storage symlink
php artisan storage:link

# Run migrations
php artisan migrate --force

# Seed database (if needed)
php artisan db:seed --force

# Cache everything for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:cache-components
```

### 5. Set Directory Permissions

```bash
# Make storage and cache writable
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 6. Configure Web Server

#### Apache (.htaccess already included)

Point DocumentRoot to `/public` directory.

Example Apache VirtualHost:

```apache
<VirtualHost *:80>
    ServerName yourdomain.com
    DocumentRoot /var/www/c_landing/public

    <Directory /var/www/c_landing/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/rahaexpress-error.log
    CustomLog ${APACHE_LOG_DIR}/rahaexpress-access.log combined
</VirtualHost>
```

#### Nginx

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/c_landing/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### 7. Set Up SSL (Recommended)

```bash
# Install Certbot
sudo apt install certbot python3-certbot-apache

# For Apache
sudo certbot --apache -d yourdomain.com

# For Nginx
sudo certbot --nginx -d yourdomain.com
```

### 8. Set Up Cron Job for Scheduled Tasks

Add to crontab (`crontab -e`):

```cron
* * * * * cd /var/www/c_landing && php artisan schedule:run >> /dev/null 2>&1
```

### 9. Set Up Queue Worker (Optional)

If using queued jobs, set up a supervisor process:

```bash
sudo apt install supervisor

sudo nano /etc/supervisor/conf.d/rahaexpress-worker.conf
```

Add:

```ini
[program:rahaexpress-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/c_landing/artisan queue:work database --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/c_landing/storage/logs/worker.log
stopwaitsecs=3600
```

Then:

```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start rahaexpress-worker:*
```

## Post-Deployment

### 1. Create Admin User

```bash
php artisan tinker
```

Then in Tinker:

```php
$user = new App\Models\User();
$user->name = 'Admin';
$user->email = 'admin@rahaexpress.com';
$user->password = Hash::make('your_secure_password');
$user->save();
```

### 2. Configure Filament Admin Panel

Access your admin panel at: `https://yourdomain.com/admin`

Log in and configure:
- Site settings (logo, company info, contact details)
- Services and pricing
- Locations
- Gallery images
- Testimonials
- Before/After photos

### 3. Test Everything

- [ ] Homepage loads correctly
- [ ] All images display properly
- [ ] Services page shows all services
- [ ] Quote form submits successfully
- [ ] Admin panel accessible
- [ ] File uploads work (test with gallery/before-after)
- [ ] Email notifications work
- [ ] Mobile responsiveness

## Security Checklist

- [ ] APP_DEBUG=false in production
- [ ] Strong APP_KEY generated
- [ ] Database credentials secure
- [ ] SSL certificate installed
- [ ] .env file not accessible (should be outside public directory)
- [ ] storage/ and bootstrap/cache/ writable by web server
- [ ] Regular backups configured
- [ ] Strong admin passwords

## Updating the Application

```bash
# Pull latest code
git pull origin main

# Update dependencies
composer install --optimize-autoloader --no-dev
npm ci && npm run build

# Run migrations
php artisan migrate --force

# Clear and recache
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:cache-components

# Restart queue workers (if using)
php artisan queue:restart
```

## Troubleshooting

### Images not displaying
```bash
php artisan storage:link
chmod -R 775 storage/app/public
```

### 500 errors
```bash
# Check permissions
chmod -R 775 storage bootstrap/cache

# Check logs
tail -f storage/logs/laravel.log
```

### Changes not reflecting
```bash
# Clear all caches
php artisan optimize:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```

## Support

For issues or questions, check:
- Laravel logs: `storage/logs/laravel.log`
- Web server error logs
- PHP error logs

## Backup Strategy

Recommended backups:
1. **Database**: Daily automated backups
2. **Uploaded files**: `storage/app/public/` directory
3. **.env file**: Store securely offline
4. **Code**: Keep in version control (Git)

## Performance Optimization

Already included:
- ✅ OPcache enabled (configure in php.ini)
- ✅ Config caching
- ✅ Route caching
- ✅ View caching
- ✅ Database indexes
- ✅ Asset minification (Vite)
- ✅ Image optimization recommended for uploads

Consider adding:
- CDN for static assets
- Redis for caching (if high traffic)
- Database query optimization
- Image compression on upload
