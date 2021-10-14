#! /bin/bash
sudo rm -rf /var/www/html/wp-content/plugins/ && \
cp -R $(pwd)/wp-content/plugins /var/www/html/wp-content/