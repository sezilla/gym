<?php
include("db_conn.php");

$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

if (isset($_GET['progvalue'])) {
  $program = $_GET['progvalue'];
}
// Number of rows per page
$rowsPerPage = 10;

// Current page, default to 1
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// Calculate the limit for the SQL query
$limitStart = ($currentPage - 1) * $rowsPerPage;

// Fetch data with LIMIT clause
$sql = "SELECT * FROM active LIMIT $limitStart, $rowsPerPage";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <title>Active Members</title>
    <link rel="icon" type="image/x-icon" href="images/jimicon.png" />
    <link rel="stylesheet" href="table.css" type="text/css">
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body class="bg-fixed bg-no-repeat bg-cover bg-center bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#f3f4f5] via-[#e0e8ed] to-[#d0dde6]">
  
  <div class="pr-12">
        <section
          class="shadow-inner gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
        >
        <!--SIDEBAR-->
        <aside>
          <div
            class="bg-slate-300 h-full flex w-[270px] flex-col pt-6 max-md:pl-5 px-2"
          >
            <!--jim logo-->
          <img
            src="images/jimlogo.png"
            />

            <nav
              class="items-start self-stretch flex flex-col w-full pl-7 mt-10 mb-96 pb-4 max-md:my-10"
            >
              <a href="adminDashboard.php">
                <div
                  class="items-start self-stretch flex w-full justify-between gap-5 pl-6 pr-16 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
                >
                  <img
                    loading="lazy"
                    src="images/dashboard1.svg"
                    class="aspect-square object-center self-stretch max-w-full"
                    alt="Dashboard Icon"
                  />

                  <h1
                    class="text-orange-950 text-lg font-medium self-center whitespace-nowrap my-auto"
                  >
                    Dashboard
                  </h1>
                </div>
              </a>
              <a href="register.php">
                <div
                  class="items-start  self-stretch flex w-full justify-between gap-5 pl-6 pr-20 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
                >
                  <img
                  loading="lazy"
                    src="images/Students.svg"
                    class="aspect-square object-center self-stretch max-w-full"
                    alt="Students Icon"
                  />

                  <h1
                    class="text-orange-950 text-lg font-medium self-center whitespace-nowrap my-auto"
                  >
                    Register
                  </h1>
                </div>
              </a>
              <a href="activemembers.php">
                <div
                  class="items-start bg-[#e0e8ed] self-stretch flex w-[235px]] justify-between gap-5 pl-6 pr-20 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
                >
                  <img
                  loading="lazy"
                    src="images/enrollees1.svg"
                    class="aspect-square object-center self-stretch max-w-full"
                    alt="Enrollees Icon"
                  />

                  <h1
                    class="text-orange-800 text-lg font-medium self-center whitespace-nowrap my-auto"
                  >
                    Active Members
                  </h1>
                </div>
              </a>
              <a href="inactivemembers.php">
                <div
                  class="items-start  self-stretch flex w-full justify-between gap-5 pl-6 pr-20 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
                >
                  <img
                    loading="lazy"
                    src="images/Requests.svg"
                    class="aspect-square object-center self-stretch max-w-full"
                    alt="Requests Icon"
                  />

                  <h1
                    class="text-orange-950 text-lg font-medium self-center whitespace-nowrap my-auto"
                  >
                    Inactive Members
                  </h1>
                </div>
              </a>

              

             
            </nav>
          </div>
        </aside>
          <main
            class="flex flex-col items-stretch w-[76%] ml-10 max-md:w-full max-md:ml-0"
          >
            <header
              class="flex flex-col items-stretch mt-8 mb-10 max-md:max-w-full max-md:mt-10"
            >
              <div
                class="flex w-full items-center justify-between gap-5 max-md:max-w-full max-md:flex-wrap"
              >
                <h1 class="text-orange-950 text-4xl font-bold my-auto">
                  Active Members
                </h1>
                <!--Admin Dropdown-->
              <div class="max-w-lg">
                <button
                  class="text-[#424242] bg-transparent hover:bg-transparent focus:ring-4 focus:ring-transparent font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                  type="button"
                  data-dropdown-toggle="dropdown"
                >
                  Account
                </button>

                <!-- Dropdown menu -->
                <div
                  class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4"
                  id="dropdown"
                >
                  <div class="px-4 py-3">
                    <span class="block text-sm">Bonnie Green</span>
                    <span
                      class="block text-sm font-medium text-gray-900 truncate"
                      >name@flowbite.com</span
                    >
                  </div>
                  <ul class="py-1" aria-labelledby="dropdown">
                    

                    <li>
                      <a
                        href="index.php"
                        class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                        >Sign out</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              </div>
            </header>
            
            <class="flex items-stretch justify-between gap-5">
              <div class="bg-zinc-100 rounded-[40px] w-[300px] h-[40px] shadow-md">
                <div class="items-stretch flex gap-4 rounded-3xl">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/75453035-f6ab-4cc0-b8e2-9e687ed98ce1?apiKey=949dc02d5acc420a9a54e7e811a36e3e&" 
                  class="aspect-square object-contain object-center w-8 overflow-hidden shrink-0-w-full ml-3 pl-2" alt="Search Icon" />
                  
                  <div class="text-stone-500  text-lg leading-7 self-center whitespace-nowrap mt-2 mb-1">
                    <input type = "search" class="bg-zinc-100" id = "getName" placeholder = "Search here..." autocomplete = "off">
                  </div>

                </div>
              <!-- </div>
              <div id="dropdown" class="items-center w-[125px] h-[40px] flex px-5 py-0.5 rounded-[40px] 
                border-2 border-solid border-stone-500">
              <div class="justify-center items-center flex w-[84px] max-w-full gap-4">
                <div class="text-stone-500 text-lg leading-7 my-auto">Sort</div>
                <button onclick="SORTdropdown()" id="dropbtn"
                  style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/b1f4b831-70b4-4724-832d-ea63cec558e5?apiKey=949dc02d5acc420a9a54e7e811a36e3e&')"
                  class="aspect-square object-contain object-center w-full overflow-hidden shrink-0 flex-1"></button>
              </div>
              <div id="sortDropdown" class="dropdown-content">
                <a href="activemembers.php?column=plan&order=asc">Ascending</a>
                <a href="activemembers.php?column=plan&order=desc">Descending</a>
                <a href="activemembers.php">Default</a>
              </div>  
            </div> -->
            </div>

            <p></p>
            <section
              class="shadow-lg bg-[#faf0eb] flex flex-col mt-10 mb-20 rounded-3xl max-md:max-w-full max-md:mt-10"
            >
            
        <div class="flex flex-col items-center">
            <section class="bg-gray-200 flex w-full max-w-full flex-col pb-8 
            rounded-3xl">
            <div class="self-center flex w-[100%] max-w-full max-md:flex-wrap justify-evenly mb-5">

            
            <table>
    <tr>
        <th class="text-orange-950 font-semibold leading-6">Full Name.</th>
        <th class="text-orange-950 font-semibold leading-6">Membership No.</th>
        <th class="text-orange-950 font-semibold leading-6">Contact No.</th>
        <th class="text-orange-950 font-semibold leading-6">Membership Plan</th>
        <th class="text-orange-950 font-semibold leading-6">Expiry</th>
        <th class="text-orange-950 font-semibold leading-6">Action</th>
    </tr>
    <tbody id="showdata"> 
    <?php 
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
                    $planText = "7 Month";
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
                      $planText = "a Year and 1 Month";
                      break;
                  case 14:
                      $days = 420;
                      $planText = "a Year and 2 Months";
                      break;
                  case 15:
                      $days = 450;
                      $planText = "a Year and 3 Months";
                      break;
                  case 16:
                      $days = 480;
                      $planText = "a Year and 4 Months";
                      break;
                  case 17:
                      $days = 510;
                      $planText = "a Year and 5 Months";
                      break;
                  case 18:
                      $days = 540;
                      $planText = "a Year and 6 Months";
                      break;
                  case 19:
                        $days = 570;
                        $planText = "a Year and 7 Month";
                        break;
                  case 20:
                        $days = 600;
                        $planText = "a Year and 8 Months";
                        break;
                  case 21:
                        $days = 630;
                        $planText = "a Year and 9 Months";
                        break;
                  case 22:
                        $days = 660;
                        $planText = "a Year and 10 Months";
                        break;
                  case 23:
                        $days = 690;
                        $planText = "a Year and 11 Months";
                        break;
                  case 24:
                        $days = 720;
                        $planText = "2 Years";
                        break;

              default:
                  $days = 0; // default case if plan is not 1, 2, or 3
                  $planText = "Unknown Plan";
          }

            // Calculate expiry date
            $createdate = new DateTime($row["createdate"]);
            $expiryDate = clone $createdate;
            $expiryDate->modify("+$days days");
            $expiryDateFormatted = $expiryDate->format('Y-m-d');

            $currentDate = new DateTime();
            $daysRemaining = $currentDate->diff($expiryDate)->days;

            // Check if expiry date is in the past
            $currentDate = new DateTime();
            if ($expiryDate < $currentDate) {
                // Insert into inactive table
                $fullname = $row["fullname"];
                $membershipno = $row["membershipno"];
                $contactno = $row["contactno"];
                $plan = $row["plan"];

                $insertQuery = "INSERT INTO inactive (fullname, membershipno, contactno) 
                                VALUES ('$fullname', '$membershipno', '$contactno')";
                mysqli_query($conn, $insertQuery);

                // Delete from active table
                $membershipNoToDelete = $row["membershipno"];
                $deleteQuery = "DELETE FROM active WHERE membershipno = '$membershipNoToDelete'";
                mysqli_query($conn, $deleteQuery);

            }
            
        ?>
        <?php 
          if (isset($_GET['order'])){
            $sql = "SELECT fullname, membershipno, contactno, plan from active ORDER BY plan $sort_order LIMIT $limitStart, $rowsPerPage";
          }
          else {
            $sql = "SELECT fullname, membershipno, contactno from active LIMIT $limitStart, $rowsPerPage";
          }
          
          //$sql = "SELECT fullname, student_num, ctrl_num, yr_sec, program, reqtype from inactive";
          
          $result = $conn-> query($sql);   ?>

        <tr>
            <td><?php echo htmlspecialchars($row["fullname"]); ?></td>
            <td><?php echo htmlspecialchars($row["membershipno"]); ?></td>
            <td><?php echo htmlspecialchars($row["contactno"]); ?></td>
            <td><?php echo htmlspecialchars($planText); ?></td>
            <td><?php echo htmlspecialchars($expiryDateFormatted); ?><br><small><?php echo $daysRemaining; ?> days remaining</small></td>
            <td>
                <button class='bg-stone-500 text-white text-sm leading-5 font-medium rounded-3xl px-4 py-2.5 mr-5'>
                    <a href="extend.php?updateid=<?php echo urlencode($row['membershipno']); ?>" class="text-white">Extend</a>
                </button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>



<!--END SHOWDATA-->

    </section>

<!--PREVIOUS & NEXT PAGE BUTTON-->
<div class="flex justify-center mt-4 mb-4">
    <?php
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM active"));
    $totalPages = ceil($totalRows / $rowsPerPage);

    // Previous page button
    if ($currentPage > 1) {
        echo "<a href='activemembers.php?page=" . ($currentPage - 1) . "' class='mx-2 px-4 py-2 bg-stone-500 text-white rounded-3xl'>Previous</a>";
    }

    // Page numbers
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a href='activemembers.php?page=$i' class='mx-2 px-4 py-2 bg-stone-500 text-white rounded-3xl'>$i</a>";
    }

    // Next page button
    if ($currentPage < $totalPages) {
        echo "<a href='activemembers.php?page=" . ($currentPage + 1) . "' class='mx-2 px-4 py-2 bg-stone-500 text-white rounded-3xl'>Next</a>";
    }
    ?>
</div>
<!--PAGE BUTTON END-->

    <script src="table.js"></script>
    <script>
  $(document).ready(function(){
   $('#getName').on("keyup", function(){
     var getName = $(this).val();
     $.ajax({
       method:'POST',
       url:'searchajax2.php',
       data:{name:getName},
       success:function(response)
       {
            $("#showdata").html(response);
       } 
     });
   });
  });

        function SORTdropdown() {
            document.getElementById("sortDropdown").classList.toggle("show");
          }

          function YLdropdown() {
            document.getElementById("ylDropdown").classList.toggle("show");
          }

          function PROGRAMdropdown() {
            document.getElementById("programDropdown").classList.toggle("show");
          }

          // Close the dropdown menu if the user clicks outside of it
          window.onclick = function (event) {
            if (!event.target.matches('#dropbtn')) {
              var dropdowns = document.getElementsByClassName("dropdown-content");
              var i;
              for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
                }
              }
            }
          }
</script>
</body>
</html>