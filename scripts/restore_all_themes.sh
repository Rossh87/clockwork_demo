#! bin/bash
sudo rm -rf /var/www/html/wp-content/themes/ && \
cp -R $(pwd)/wp-content/themes /var/www/html/wp-content/