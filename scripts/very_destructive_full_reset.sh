#! /bin/bash
sudo rm -rf /var/www/html/wp-content && \
cp -R $(pwd)/wp-content /var/www/html/