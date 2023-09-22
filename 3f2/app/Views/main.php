<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form action="<?=base_url('save')?>" method="post">
        <label>StudentID</label>
        <input type="text" name="StudentID" placeholder="StudentID">
        <br>
        <label>FullName</label>
        <input type="text" name="FullName" placeholder="FullName">
        <br>
        <label>YearLevel</label>
        <input type="text" name="YearLevel" placeholder="YearLevel">
        <br>
        <label>Program</label>
        <input type="text" name="Program" placeholder="Program">
        <br>
        <input type="submit" value="save">
    </form>
    <table border="1">
        <tr>
            <th>stud_id</th>
            <th>name</th>
            <th>yr</th>
            <th>program</th>
        </tr>
        <?php foreach ($main as $B): ?>
        <tr>
            <th><?=$B['StudentID']?></th>
            <th><?=$B['FullName']?></th>
            <th><?=$B['YearLevel']?></th>
            <th><?=$B['Program']?></th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>