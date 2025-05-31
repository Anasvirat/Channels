<?php
// Unlimited script runtime
set_time_limit(0);

// Path to FFmpeg (if not in system path, give full path like C:\\ffmpeg\\bin\\ffmpeg.exe)
$ffmpeg = "ffmpeg";

// Hardcoded M3U8 URL
$m3u8_url = "http://exm3u.extraott.com:80/live/2249871453/1991220000/401627870.m3u8"; // <--- replace this with your actual .m3u8 URL

// Output file name
$output_file = "StarSports1Tamil.ts";

// FFmpeg command to continuously dump stream into a .ts file
$cmd = "$ffmpeg -i \"$m3u8_url\" -c copy -f mpegts -y \"$output_file\"";

// Show message
echo "Streaming from $m3u8_url to $output_file...\n";

// Run the command and keep it running until the PHP script is closed
passthru($cmd);
?>
