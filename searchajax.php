<?php 
  include("db_conn.php");
  if (isset($_POST['name']))
   $name = $_POST['name'];
  
   $sql = "SELECT * FROM inactive WHERE membershipno LIKE '{$name}%' OR fullname LIKE '{$name}%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr><td>". $row["fullname"]."</td>
       <td>". $row["membershipno"]."</td>
       <td>". $row["contactno"]."</td>
       <td>
                  <button class='bg-stone-500 text-white text-sm leading-5 font-medium rounded-3xl px-4 py-2.5 mr-5'>View</button>
                        </td>
       <td></tr>";
   }
    echo $data;
 ?>

