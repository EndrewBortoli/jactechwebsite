<?php
@session_start();
@session_destroy();
echo '<script>window.location="../public/index.php"</script>';

?>

