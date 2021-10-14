#! bin/bash
sudo rm -rf /var/www/html/wp-content/themes/clockwork_demo && \
sudo rm -rf /var/www/html/wp-content/plugins/clockwork_demo && \
cp -R $(pwd)/wp-content/themes/clockwork_demo /var/www/html/wp-content/themes/ && \
cp -R $(pwd)/wp-content/plugins/clockwork_demo /var/www/html/wp-content/plugins/