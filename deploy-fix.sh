#!/bin/bash
# Deployment script for admin login CSS fix
# Run this on your hosted server

echo "🚀 Starting deployment of admin login fix..."

# Pull latest changes from GitHub
echo "📥 Pulling latest code from GitHub..."
git pull origin master

# Install any new dependencies (just in case)
echo "📦 Installing dependencies..."
npm install

# Rebuild assets with new CSS
echo "🔨 Building production assets..."
npm run build

# Optimize Filament
echo "⚡ Optimizing Filament..."
php artisan filament:optimize

# Clear all caches
echo "🧹 Clearing caches..."
php artisan view:clear
php artisan config:clear
php artisan route:clear
php artisan cache:clear

# Optimize for production
echo "⚙️ Optimizing for production..."
php artisan optimize

echo "✅ Deployment complete!"
echo ""
echo "📋 Next steps:"
echo "1. Hard refresh your browser (Ctrl+F5 or Cmd+Shift+R)"
echo "2. Clear browser cache completely if needed"
echo "3. Try the admin login at /admin"
echo ""
echo "If you're using a CDN (like Cloudflare), you may need to purge the CDN cache as well."
