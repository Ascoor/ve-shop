#!/bin/bash

set -e

echo "🚀 Ve-Shop Project Launcher"
echo "-----------------------------"

# 1. Backend
echo ""
echo "==== [BACKEND: ve-shop-backend] ===="
cd ve-shop-backend

echo "1. Installing PHP dependencies..."
composer install
npm install


echo "2. Installing backend npm dependencies..."
if [ -f package.json ]; then
  npm install
  echo "3. Running npm cache clean..."
  npm cache clean --force
fi

echo "4. Migrating database (if needed)..."
echo "5. Clearing Laravel cache/config..."
php artisan migrate --force
php artisan cache:clear
php artisan config:clear
php artisan route:clear 

echo "6. Generating Laravel key..."
php artisan key:generate

echo "7. Starting Laravel server on :8000 ..."
# Run Laravel server in background
php artisan serve --host=127.0.0.1 --port=8000 > ../laravel-server.log 2>&1 &
BACKEND_PID=$!
cd ..

# 2. Frontend
echo ""
echo "==== [FRONTEND: ve-shop-frontend] ===="
cd ve-shop-frontend

echo "1. Installing frontend npm dependencies..."
npm install

echo "2. Cleaning npm cache..."
npm cache clean --force

echo "3. Starting frontend dev server on :5173 ..."
npm run dev > ../frontend-server.log 2>&1 &
FRONTEND_PID=$!
cd ..

sleep 2

echo ""
echo "✅ All done! Both servers are running:"
echo "  - Laravel backend: http://127.0.0.1:8000"
echo "  - Frontend (Vite): http://127.0.0.1:5173"
echo ""
echo "📝 Logs:"
echo "  - Backend: tail -f laravel-server.log"
echo "  - Frontend: tail -f frontend-server.log"
echo ""
echo "To stop servers, run:"
echo "  kill $BACKEND_PID $FRONTEND_PID"
echo ""
echo "✨ Enjoy developing Ve-Shop!"
