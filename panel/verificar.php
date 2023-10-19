<?php
@session_start();
if (@$_SESSION['id'] == ""){
    echo '<script>window.location="../public/index.php"</script>';
    exit();

}
?>

