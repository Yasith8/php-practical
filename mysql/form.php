<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <form action="insert.php" method="post">
        Name: <input type="text" name="username"><br/> 
        NIC: <input type="text" name="nic"><br/>
        City :
        <select name="city">
            <option value="Colombo">Colombo</option>
            <option value="Kandy">Kandy</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Galle">Galle</option>
        </select>
        <button>Submit</button>
    </form>
</body>

</html>