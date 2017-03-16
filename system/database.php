<?php
$database = mysqli_connect("127.0.0.1", "root", "usbw", "quotes", 3307); //This connects to the database
if (!$database) {
    exit("Failed to connect");
}
