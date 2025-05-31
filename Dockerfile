FROM php:8.2-cli

# Install FFmpeg
RUN apt-get update && \
    apt-get install -y ffmpeg && \
    apt-get clean

# Copy PHP script
COPY m3u8.php /app/m3u8.php

# Set working directory
WORKDIR /app

# Run PHP script when container starts
CMD ["php", "m3u8.php"]
