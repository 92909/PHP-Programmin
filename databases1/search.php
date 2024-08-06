<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usersearch = $_POST["usersearch"];
    
        try {
            require_once "../includes/dbh.inc.php";
    
            $query = "SELECT * FROM comments WHERE username = :usersearch;";
    
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":usersearch", $usersearch);
            $stmt-> execute();

            $results = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    
            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
            die("Query Failed " . $e->getMessage());
        }
    }
    else {
        header("Location: ../includes/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background-color: black;
        }
        .divClass{
            background-color: white;
            width: 300px;
        }
    </style>
    
</head>
<body>
    <h3>Search Results.</h3>
    <!-- <script>alert("Are you sure about this?")</script> -->
    <?php
        if (empty($results)) {
            echo "There were no results";
        }
        else {
            foreach ($results as $row) {
                echo "<div class= 'divClass'>";
                echo "<h4>". htmlspecialchars($row["username"]). "</h4>";
                echo "<p>". htmlspecialchars($row["comments"]). "</p>";
                echo "<p>". htmlspecialchars($row["commented_at"]) . "</p>". "<br>";
                //echo "<br>";
                echo "</div>";
            }
        }
    ?>
</body>
</html>