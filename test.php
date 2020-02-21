<?php
// See the password_hash() example to see where this came from.
$hash = '$2y$10$o1ir38nwQhVNwDzG.e5ER.ypv5i9vzF6mVmeygC/gv3lulvMHhTKe';

if (password_verify('boy', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
