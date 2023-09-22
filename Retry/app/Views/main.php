<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <form action="/save" method="post">
        <label>Name</label>
        <input type="text" name="Name" placeholder="Name" value="<?= $pain['Name'] ?>">
        <br>
        <label>Age</label>
        <input type="text" name="Age" placeholder="Age" value="<?= $pain['Age'] ?>">
        <br>
        <label>Year</label>
        <input type="text" name="Year" placeholder="Year" value="<?= $pain['Year'] ?>">
        <br>
        <label>Grade</label>
        <input type="text" name="Grade" placeholder="Grade" value="<?= $pain['Grade'] ?>">
        <br>
        <input type="submit" value="save">
    </form>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Year</th>
            <th>Grade</th>
            <th>Action</th>
        </tr>
        <?php foreach ($main as $B): ?>
        <tr>
            <td><?=$B['Name']?></td>
            <td><?=$B['Age']?></td>
            <td><?=$B['Year']?></td>
            <td><?=$B['Grade']?></td>
            <td><a href="/delete/<?= $B['id']?>">delete</a> || <a href="/update/<?= $B['id']?>">edit</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>