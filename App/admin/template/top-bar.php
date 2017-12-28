<?php
    $user = $_SESSION['username'];
?>
<td><h2>Project Management</h2></td>
<td align="right">
    <a href="index.php">Home</a>
</td>
<td align="right">
    <span><?php echo $user; ?></span>
    <a href="/WebTechProject/logOut.php">Logout</a>
</td>