<html>

    <body>
    <?php
        include_once 'functions/func.php';
        print_info($query ="select name, price, image from menu where category = 1");
    ?>
    </body>
</html>