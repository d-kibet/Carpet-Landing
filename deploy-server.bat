@echo off
REM Simple deployment script for servers WITHOUT Node.js/npm
REM All assets are pre-built and committed to Git

echo Starting deployment...
echo.

REM Pull latest changes (includes pre-built assets)
echo Pulling latest code from GitHub...
git pull origin master
echo.

REM Optimize Filament
echo Optimizing Filament...
php artisan filament:optimize
echo.

REM Clear all caches
echo Clearing caches...
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
echo.

REM Optimize for production
echo Optimizing for production...
php artisan config:cache
php artisan route:cache
php artisan view:cache
echo.

echo ========================================
echo Deployment complete!
echo ========================================
echo.
echo Next steps:
echo 1. Hard refresh your browser (Ctrl+F5)
echo 2. Test the admin login at /admin
echo 3. Admin inputs should now show dark text
echo.
echo If using a CDN, purge the CDN cache.
pause
