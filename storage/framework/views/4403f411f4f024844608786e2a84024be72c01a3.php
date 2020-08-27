<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="<?php echo e(url("verify/$user->email/$user->verifyToken")); ?>">click here</a> to verify your account
</body>
</html><?php /**PATH /var/www/html/meditation/resources/views/auth/verifyuser.blade.php ENDPATH**/ ?>