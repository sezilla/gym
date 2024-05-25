<?php
include "db_conn.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sort_column = 'plan'; // Default sort column
$sort_order = 'ASC'; // Default sort order

if (isset($_GET['sort_column']) && isset($_GET['sort_order'])) {
    $sort_column = $_GET['sort_column'];
    $sort_order = $_GET['sort_order'];
}

// Validate sort column and sort order
$valid_columns = [ 'plan', 'expire'];
if (!in_array($sort_column, $valid_columns)) {
    $sort_column = 'plan';
}

if ($sort_order != 'ASC' && $sort_order != 'DESC') {
    $sort_order = 'ASC';
}

$sql = "SELECT * FROM active ORDER BY $sort_column $sort_order";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sort Table Columns</title>
</head>
<body>
    <h2>Sort Table Columns</h2>
    <table border="1">
        <tr>
            <th>
                fullname
            </th>
            <th>
                membershipno
            </th>
            <th>
                contact
            </th>
            <th>
                Plan
                <a href="?sort_column=plan&sort_order=ASC">
                    <button>Sort Asc</button>
                </a>
                <a href="?sort_column=plan&sort_order=DESC">
                    <button>Sort Desc</button>
                </a>
            </th>
            <th>
                Expire
                <a href="?sort_column=expire&sort_order=ASC">
                    <button>Sort Asc</button>
                </a>
                <a href="?sort_column=expire&sort_order=DESC">
                    <button>Sort Desc</button>
                </a>
            </th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["fullname"]. "</td>
                        <td>" . $row["membershipno"]. "</td>
                        <td>" . $row["contactno"]. "</td>
                        <td>" . $row["plan"]. "</td>
                        <td>" . $row["expire"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No results found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
