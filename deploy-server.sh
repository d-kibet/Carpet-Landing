#!/bin/bash
# Simple deployment script for servers WITHOUT Node.js/npm
# All assets are pre-built and committed to Git

echo "🚀 Starting deployment..."

# Pull latest changes (includes pre-built assets)
echo "📥 Pulling latest code from GitHub..."
git pull origin master

# Optimize Filament
echo "⚡ Optimizing Filament..."
php artisan filament:optimize

# Clear all caches
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Optimize for production
echo "⚙️ Optimizing for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ""
echo "✅ Deployment complete!"
echo ""
echo "📋 Next steps:"
echo "1. Hard refresh your browser (Ctrl+F5 or Cmd+Shift+R)"
echo "2. Test the admin login at /admin"
echo "3. Admin inputs should now show dark text on white background"
echo ""
echo "If using a CDN (Cloudflare, etc.), purge the CDN cache."
