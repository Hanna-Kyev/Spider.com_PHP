
    <h1>Contacts</h1>
    <?php
            if(isset($_REQUEST['username'])){
                echo "<h2>Hi, ".$_REQUEST["username"]."!</h2>";
            }
    ?>
            <form method="POST"  action="<?php echo $_SERVER['REQUEST_URI'];?>">
                <lable>Name</lable>
                <input name="username">
                <input type="submit">
            </form>
