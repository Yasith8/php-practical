<html>

<head>
    <title>Employee Form</title>
</head>

<body>
    <form action="insert.php" method="post">
        <label>Name: <input type="text" name="name"> </label><br/><br/>
        <label>NIC: <input type="text" name="nic"></label><br/><br/>
        <label>City :</label>
        <select name="city">
            <option>Colombo</option>
            <option>Galle</option>
            <option>Kandy</option>
            <option>Jaffna</option>
        </select><br/><br/>
        <input type="submit"/>
    </form>
</body>

</html>