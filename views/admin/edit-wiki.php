

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if ($wiki) : ?>
        <form action="editStatus" method="POST">
           <?php var_dump($wiki) ?>
            <input type="hidden" name="id" value="<?php echo $wiki['id'] ?>">
            <input type="number" name="status" id="" value="<?php echo $wiki['status'] ?>">
            <button type="submit">save</button>
        </form>
    <?php endif; ?>
    






</body>
</html>