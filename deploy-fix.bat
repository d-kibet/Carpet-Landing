@echo off
REM Deployment script for admin login CSS fix
REM Run this on your hosted server (Windows)

echo Starting deployment of admin login fix...
echo.

REM Pull latest changes from GitHub
echo Pulling latest code from GitHub...
git pull origin master
echo.

REM Install any new dependencies
echo Installing dependencies...
call npm install
echo.

REM Rebuild assets with new CSS
echo Building production assets...
call npm run build
echo.

REM Optimize Filament
echo Optimizing Filament...
php artisan filament:optimize
echo.

REM Clear all caches
echo Clearing caches...
php artisan view:clear
php artisan config:clear
php artisan route:clear
php artisan cache:clear
echo.

REM Optimize for production
echo Optimizing for production...
php artisan optimize
echo.

echo ========================================
echo Deployment complete!
echo ========================================
echo.
echo Next steps:
echo 1. Hard refresh your browser (Ctrl+F5)
echo 2. Clear browser cache completely if needed
echo 3. Try the admin login at /admin
echo.
echo If using a CDN, purge the CDN cache as well.
pause
