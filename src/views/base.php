<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Escola App</title>
        <link rel="stylesheet" href=<?php echo "http://" . $_SERVER['HTTP_HOST'] . '/src/styles/index.css' ?>>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    </head>
    <body>

        <script>
            setTimeout(() => {
                document.getElementById('flash').remove();
            }, 3000);
        </script>
    </body>
</html>