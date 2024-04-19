<?php
    if (isset($_POST['szamol'])) {
        $v = $_POST['sebesseg'];
        $A = $_POST['keresztMetszet'];
        $w = $A * $v;
        echo "<p>Az adott keresztmetszeten át áramló folyadék térfogata: $w m3.</p>";
    }
?>