# Install


# Change hosting
1. ln -s public public_html
2. chmod 775 -R bootstrap/cache/ storage/
3. php7.4 artisan storage:link
4. php7.4 artisan config:clear
5. php7.4 artisan cache:clear
