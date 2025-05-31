# Use official PHP CLI image
FROM php:8.2-cli

# Install FFmpeg
RUN apt-get update && \
    apt-get install -y ffmpeg && \
    apt-get clean

# Copy the PHP script to the container
COPY m3u8.php /app/m3u8.php

# Set working directory
WORKDIR /app

# Run the PHP script when the container starts
CMD ["php", "m3u8.php"]
