#!/bin/bash

# Baca nilai variabel AUTOMATIC_BUILD dari file .env
AUTOMATIC_BUILD=$(grep -E "^AUTOMATIC_BUILD=" .env | cut -d'=' -f2)

if [ "$AUTOMATIC_BUILD" = "yes" ]; then
    # Jalankan NIXPACKS_BUILD_CMD
    $NIXPACKS_BUILD_CMD
fi

# Langkah-langkah lain untuk deploy
