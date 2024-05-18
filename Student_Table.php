<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of Students</title>
</head>
<body>
    <table>
        <tr>
            <th>Student Number</th>
            <th>Year Level</th>
            <th>Program</th>
            <th>Full Name</th>
            <th>Sex</th> 
            <th>Date of Birth</th>
            <th>Civil Status</th>
            <th>Contact Number</th>
            <th>E-mail Address</th>
            <th>Religion</th>
            <th>Address</th>
            <th>Elementary</th>
            <th>Junior High</th>
            <th>Senior High</th>
            <th>Vocational</th>
            <th>College for Transferees</th>

        </tr>
        <?php 
            include("db_conn.php");
            $sql = "SELECT stud_num, year_lvl, program, first_n, mid_n, last_n, sex, bday, civstatus, contactno, email, religion, addresss, elem_school, jh_school, sh_school, vocational, college_trans from student";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0) {
                while ($row =  $result-> fetch_assoc()){
                    echo "<tr>
                    <td>". $row["stud_num"]."</td>
                    <td>". $row["year_lvl"]."</td>
                    <td>". $row["program"]."</td>
                    <td>". $row["last_n"] .", ". $row["first_n"] ." ". $row["mid_n"]."</td>
                    <td>". $row["sex"]."</td>
                    <td>". $row["bday"]."</td>
                    <td>". $row["civstatus"]."</td>
                    <td>". $row["contactno"]."</td>
                    <td>". $row["email"]."</td>
                    <td>". $row["religion"]."</td>
                    <td>". $row["addresss"]."</td>
                    <td>". $row["elem_school"]."</td>
                    <td>". $row["jh_school"]."</td>
                    <td>". $row["sh_school"]."</td>
                    <td>". $row["vocational"]."</td>
                    <td>". $row["college_trans"]."</td>
                    </tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 results";
            }

            $conn-> close();
            ?>
    </table>

         
    
</body>
</html>