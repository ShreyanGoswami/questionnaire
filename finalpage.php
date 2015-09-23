<html>
    <head>
        <title>Done!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="Welcome.html">
        <div align="center">
            <font size=40>Your personality is :</font>
            <?php
        session_start();

        echo '<font size="40">'.$_SESSION['p']."</font>"; ?>
        </div>
            
        <div>
                <input type="submit" name="back" value="Home"/>
        </div>
        </form>
    </body>
</html>


