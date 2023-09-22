<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
    <form action="<?='/save'?>" method="post">
    <label>Student ID: </label>
    <input type="hidden" name="id" value="<?=isset($u['id']) ? $u['id'] : '' ?>">
    <input type="text" name="studentID" placeholder=""  value="<?=isset($u['studentID']) ? $u['studentID'] : '' ?>" >
    <br><br>
    <label>Full Name: </label>
    <input type="text" name="fullname" placeholder=""  value="<?=isset($u['fullname']) ? $u['fullname'] : '' ?>">
    <br><br>
    <label>Year Level: </label>
    <input type="text" name="yearLevel" placeholder=""  value="<?=isset($u['yearLevel']) ? $u['yearLevel'] : '' ?>">
    <br><br>
    <label>Program: </label>
    <input type="text" name="program" placeholder=""     value="<?=isset($u['program']) ? $u['program'] : '' ?>">
     <br><br>
    <input type="submit" name="submit" value="save">
    </form>
    <br><br>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Full Name</th>
            <th>Year Level</th>
            <th>Program</th>
            <th>Action</th>
        </tr>
        <?php foreach ($d as $i): ?>
        <tr>
            <th><?=$i['studentID']?></th>
            <th><?=$i['fullname']?></th>
            <th><?=$i['yearLevel']?></th>
            <th><?=$i['program']?></th>
            <th>
                <a href="/update/<?=$i['id']?>">edit</a>
                <a href="/delete/<?=$i['id']?>">delete</a>
            </th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>