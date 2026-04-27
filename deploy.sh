#!/bin/bash
# Universal deploy zip creator
# Creates a clean zip file excluding unnecessary files and directories.
# Includes the latest database backup from storage/backups/ if present.
#
# Usage (run from the project root):
#   ./deploy.sh                 # project name derived from current directory
#   ./deploy.sh my-project      # override project name

# Derive project name: first arg if given, otherwise slugify cwd basename
if [ -n "$1" ]; then
  PROJECT_NAME="$1"
else
  PROJECT_NAME=$(basename "$PWD" | tr '[:upper:]' '[:lower:]' | tr ' ' '-')
fi

# European date + time format: DD-MM-YY--HH-MM
TIMESTAMP=$(date +%d-%m-%y--%H-%M)

FILENAME="${PROJECT_NAME}-${TIMESTAMP}.zip"

# Find the latest .sql backup
LATEST_BACKUP=$(ls -t storage/backups/*.sql 2>/dev/null | head -1)

echo "Creating deploy zip: $FILENAME"
echo ""

zip -r "$FILENAME" . \
  -x ".git/*" \
  -x "node_modules/*" \
  -x "vendor/*" \
  -x "storage/logs/*" \
  -x "storage/runtime/*" \
  -x "storage/backups/*" \
  -x "storage/composer-backups/*" \
  -x "storage/config-deltas/*" \
  -x "web/cpresources/*" \
  -x "web/imager/*" \
  -x ".ddev/*" \
  -x ".vscode/*" \
  -x ".DS_Store" \
  -x "*.zip" \
  -x ".env" \
  -x ".gitignore" \
  -x "deploy.sh"

# Add the latest database backup if one exists
if [ -n "$LATEST_BACKUP" ]; then
  zip "$FILENAME" "$LATEST_BACKUP"
  echo ""
  echo "Included database backup: $LATEST_BACKUP"
else
  echo ""
  echo "Warning: No .sql backup found in storage/backups/"
fi

echo ""
echo "Done! Created $FILENAME ($(du -h "$FILENAME" | cut -f1))"
echo ""
echo "After uploading:"
echo "  1. Run 'composer install' to restore vendor/"
echo "  2. Import the .sql backup into the database"
