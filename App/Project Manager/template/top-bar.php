<?php
session_start();
$user = $_SESSION['username'];
?>
<td><h2>Project Management</h2></td>
<td align="right">
    <?php echo $user?>
</td>
<td align="right" width="50">
    <a href="/WebTechProject/logOut.php">Logout</a>
    </td>