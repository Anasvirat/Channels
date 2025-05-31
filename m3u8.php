<?php
set_time_limit(0);

// M3U8 stream URL
$m3u8_url = "http://exm3u.extraott.com:80/live/2249871453/1991220000/401627870.m3u8";

// Output TS file
$output_file = "starsports1tamil.ts";

echo "Recording from $m3u8_url to $output_file...\n";

// FFmpeg command to record
$ffmpeg_cmd = "ffmpeg -i \"$m3u8_url\" -c copy -f mpegts -y \"$output_file\"";
passthru($ffmpeg_cmd);
?>
