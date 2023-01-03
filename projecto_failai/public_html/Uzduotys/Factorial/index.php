<?php

include "Main.php";

try {
    Main::run();
} catch (Exception $e) {
    echo 'Taip jau buna' . $e->getMessage();
}
