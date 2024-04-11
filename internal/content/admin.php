<?php
    require_once "../database/import.php";
    require_once "../internal/sidebar.php";
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faive | Das Familien-HQ</title>
    <link rel="icon" href="../assets/logos/faive_transparent.ico">
    <link rel="stylesheet" href="../css/import.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../js/Admin.js"></script>
</head>
<body>
    <div class="admin_container">
        <div class="admin_content">
            <table>
                <thead>
                    <tr>
                        <th><input id="Master_Checkbox" type="checkbox"></th>
                        <th>ID</th>
                        <th>Benutzername</th>
                        <th>Vorname</th>
                        <th>Nachname</th>
                        <th>Rolle</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = $db->query("SELECT * FROM users ORDER BY uid");
                        while($row = $query->fetch_array()) {
                            echo("<tr>");
                            echo("<td><input class='checkbox' type='checkbox'></td>");
                            echo("<td><input value='" . $row["uid"] . "' disabled></td>");
                            echo("<td>" . $row["username"] . " <p> " . $row["email"] . " </p></td>");
                            echo("<td>" . $row["first_name"] . "</td>");
                            echo("<td>" . $row["last_name"] . "</td>");
                            echo("<td>" . getRoleById($row["uid"]) . "</td>");
                            echo("<td><div class='editBox'><span class='material-symbols-outlined'>more_horiz</span></div></td>");
                            echo("</tr>");
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>