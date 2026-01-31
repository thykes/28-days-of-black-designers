#!/bin/bash

echo "🚀 Starting Post-Deploy Automation..."

# Define paths (Relative to project root)
BASE_PATH=$(pwd)

# 1. Cache Nuke
echo "💣 Nuking Cache & Media..."
rm -rf "$BASE_PATH/site/cache"/*
rm -rf "$BASE_PATH/media"/*
echo "   ✅ Cache cleared."

# 2. Permissions Fix
echo "🔧 Fixing Permissions..."
# Standard directories
for dir in content site assets media; do
    if [ -d "$BASE_PATH/$dir" ]; then
        find "$BASE_PATH/$dir" -type d -exec chmod 755 {} \;
        find "$BASE_PATH/$dir" -type f -exec chmod 644 {} \;
    fi
done
echo "   ✅ Permissions reset (Dirs: 755, Files: 644)."

# 3. Asset Check
echo "🎨 Verifying Assets..."
CSS_FILE="$BASE_PATH/assets/css/index.css" # Adjust if your main css is elsewhere
JS_FILE="$BASE_PATH/assets/js/index.js" # Adjust match

if [ -f "$CSS_FILE" ] && [ -s "$CSS_FILE" ]; then
    echo "   ✅ CSS found and not empty."
else
    echo "   ⚠️  WARNING: CSS file missing or empty!"
fi

if [ -f "$JS_FILE" ] && [ -s "$JS_FILE" ]; then
    echo "   ✅ JS found and not empty."
else
    echo "   ⚠️  WARNING: JS file missing or empty (Check if using one)!"
fi

echo "✨ Deployment tasks complete."
