<?php
// you dont have to rewrite all the data stored in demo_session1.php
// you just have to start a session and you can call the variables using the inbuilt $_SESSION variable
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions2</title>
</head>
<body>
    
<?php
echo "My full name is : " . $_SESSION["fullName"] . "<br>";
echo "My password is : " . $_SESSION["user_password"] . "<br>";
echo "My email is : " . $_SESSION["user_email"] . "<br>";

print_r($_SESSION); // this line of code prints all the variables in the first file


?>
</body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  //foreach (filter_list() as $id =>$filter) {
    //echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  //}
  ?>
</table>

</body>
</html>
--->
