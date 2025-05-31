FROM php:8.2-cli

# Install FFmpeg and NGINX
RUN apt-get update && \
    apt-get install -y ffmpeg nginx && \
    apt-get clean

# Create web root
RUN mkdir -p /var/www/html/output

# Copy files
COPY m3u8.php /var/www/html/m3u8.php
COPY default.conf /etc/nginx/sites-enabled/default

# Expose port for HTTP access
EXPOSE 80

# Set working directory
WORKDIR /var/www/html/output

# Start NGINX and run the PHP recorder
CMD service nginx start && php /var/www/html/m3u8.php
