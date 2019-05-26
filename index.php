<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>AITC Backend</title>
    </head>
    <body style="margin: 0; padding: 0;">
        <div class="" style="display: flex;flex-direction: column;justify-content: center; width: 100%; height: 100vh;">
            <p style="text-align: center; margin-bottom: 5px">
                <?php include './db_connection.php'; ?>
            </p>
            <p style="text-align: center">
                <?php echo 'AITC Backend ' . date('d-M-Y h:i') ?>
            </p>
        </div>
    </body>
</html>
