<!DOCTYPE php>
<html>
<head>
<link rel="stylesheet" href="css/main.css"> 
<title>Page Title</title>
<body>
    <ul>
        <li><a href="mijnprojecten.php">PROJECTEN</a></li>
        <li><a href="talen.php">PROGRAMMEERTAAL</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="overmij.php">Over Mij</a></li>

      </ul>

    <div class="overlay">
        <h1>Beschikbaarheid</h1>
        <p>Op deze dagen ben ik telefonisch beschikbaar op het nummer:
            0626075765</p>
        <?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=portfolio","root", "");
        $query = $db->prepare ("SELECT * FROM times");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        foreach ($result as &$data) {
            echo "<td>" . $data ["dag"] . " ";
            echo "<td>" . $data ["tijd"] . "<br>";
            echo "</tr>";
        }
        echo "</table>";
    } catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
    ?>
    


    </div>

</body>
</html>