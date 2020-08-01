<html>

    <head>
    <meta charset="utf-8">
    <title></title>
    </head>

    <body>

        <form action="index.php" method="post">
            <P>Name:</p>
            <input type="text" name="name">
            <input type="submit" onclick="saveInfo();">
        </form>

        <p id="text"></P>

        <?php
            $fileName = "./data.txt";
            $newData = $_POST["name"] . "\n";
            file_put_contents($fileName, $newData, FILE_APPEND);

            echo $_newData;
        ?>

        <script type="text/javascript">
            function saveInfo() {
                alert("name saved to database!");
                window.location.href = "https://www.walmart.com/";
            }
        </script>

    </body>

</html>