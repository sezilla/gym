<?php 
include("db_conn.php");

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $sql = "SELECT * FROM active WHERE membershipno LIKE '{$name}%' OR fullname LIKE '{$name}%'";
    $query = mysqli_query($conn, $sql);
    $data = '';

    while ($row = mysqli_fetch_assoc($query)) { 
        // Determine the number of days and the plan display text based on the plan
        switch ($row["plan"]) {
            case 1:
                $days = 30;
                $planText = "1 Month";
                break;
            case 2:
                $days = 60;
                $planText = "2 Months";
                break;
            case 3:
                $days = 90;
                $planText = "3 Months";
                break;
            case 4:
                $days = 120;
                $planText = "4 Months";
                break;
            case 5:
                $days = 150;
                $planText = "5 Months";
                break;
            case 6:
                $days = 180;
                $planText = "6 Months";
                break;
            case 7:
                $days = 210;
                $planText = "7 Months";
                break;
            case 8:
                $days = 240;
                $planText = "8 Months";
                break;
            case 9:
                $days = 270;
                $planText = "9 Months";
                break;
            case 10:
                $days = 300;
                $planText = "10 Months";
                break;
            case 11:
                $days = 330;
                $planText = "11 Months";
                break;
            case 12:
                $days = 360;
                $planText = "1 Year";
                break;
            case 13:
                $days = 390;
                $planText = "1 Year and 1 Month";
                break;
            case 14:
                $days = 420;
                $planText = "1 Year and 2 Months";
                break;
            case 15:
                $days = 450;
                $planText = "1 Year and 3 Months";
                break;
            case 16:
                $days = 480;
                $planText = "1 Year and 4 Months";
                break;
            case 17:
                $days = 510;
                $planText = "1 Year and 5 Months";
                break;
            case 18:
                $days = 540;
                $planText = "1 Year and 6 Months";
                break;
            case 19:
                $days = 570;
                $planText = "1 Year and 7 Months";
                break;
            case 20:
                $days = 600;
                $planText = "1 Year and 8 Months";
                break;
            case 21:
                $days = 630;
                $planText = "1 Year and 9 Months";
                break;
            case 22:
                $days = 660;
                $planText = "1 Year and 10 Months";
                break;
            case 23:
                $days = 690;
                $planText = "1 Year and 11 Months";
                break;
            case 24:
                $days = 720;
                $planText = "2 Years";
                break;
            default:
                $days = 0;
                $planText = "Unknown Plan";
        }

        // Calculate expiry date
        $createdate = new DateTime($row["createdate"]);
        $expiryDate = clone $createdate;
        $expiryDate->modify("+$days days");
        $expiryDateFormatted = $expiryDate->format('Y-m-d');

        $currentDate = new DateTime();
        $daysRemaining = $currentDate->diff($expiryDate)->days;

        // Append data to the $data string
        $data .= "<tr>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["membershipno"] . "</td>
                    <td>" . $row["contactno"] . "</td>
                    <td>" . $planText . "</td>
                    <td>" . $expiryDateFormatted . "<br><small>" . $daysRemaining . " days remaining</small></td>
                    <td>
                        <button class='bg-stone-500 text-white text-sm leading-5 font-medium rounded-3xl px-4 py-2.5 mr-5'>View</button>
                    </td>
                  </tr>";
    }

    echo $data;
}
?>
