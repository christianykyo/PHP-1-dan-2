<?php
    $name = "Chris";
    function show_name() {
        global $name;
        echo "My name is ".$name. ".";
    }
    show_name();
?>