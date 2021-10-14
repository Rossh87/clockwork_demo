#! /bin/bash
sudo rm -rf /var/www/html/wp-content && \
mkir /var/www/html/wp-content && \
cp $(pwd)/wp-content/. /var/www/html/wp-content/