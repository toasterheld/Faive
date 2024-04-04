<?php
    require_once "../database/import.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faive | Das Familien-HQ</title>
    <link rel="icon" href="../assets/logos/faive_transparent.ico">
    <link rel="stylesheet" href="../css/import.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Benutzername</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>E-Mail</th>
                <th>Rolle</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = $db->query("SELECT * FROM users ORDER BY uid");
                while($row = $query->fetch_array()) {
                    echo("<tr>");
                    echo("<td>" . $row["uid"] . "</td>");
                    echo("<td>" . $row["username"] . "</td>");
                    echo("<td>" . $row["first_name"] . "</td>");
                    echo("<td>" . $row["last_name"] . "</td>");
                    echo("<td>" . $row["email"] . "</td>");
                    echo("<td>" . getRoleById($row["uid"]) . "</td>");
                    echo("</tr>");
                }
            ?>
        </tbody>
    </table>
</body>
</html>