#!/bin/bash
echo "🚀 Starting deployment..."

# Install dependencies
composer install --no-dev --optimize-autoloader

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

echo "✅ Deployment completed!"