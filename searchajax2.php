<?php 
  include("db_conn.php");
  if (isset($_POST['name']))
   $name = $_POST['name'];
  
   $sql = "SELECT * FROM enrollees WHERE stud_num LIKE '{$name}%' OR last_n LIKE '{$name}%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr><td>". $row["stud_num"]."</td>
       <td>". $row["year_lvl"]."</td>
       <td>". $row["program"]."</td>
       <td>". $row["last_n"]."</td>
       <td>". $row["contactno"]."</td>
       <td>". $row["email"]."</td>
       <td>
                  <button class='bg-stone-500 text-white text-sm leading-5 font-medium rounded-3xl px-4 py-2.5 mr-5'>View</button>
                        </td>
       <td></tr>";
   }
    echo $data;
 ?>

