<?php
    if (isset($_POST['submit'])) {
        if (empty($name)) {
            echo "<p class='error'> ¡Agrega tu nombre! </p>";
        }
    }
?>