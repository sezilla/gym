<?php
include("db_conn.php");

// Get sorting parameters from GET request and sanitize them
$sort_column = 'plan'; // Default sort column
$sort_order = 'ASC'; // Default sort order

if (isset($_GET['sort_column']) && isset($_GET['sort_order'])) {
    $sort_column = $_GET['sort_column'];
    $sort_order = $_GET['sort_order'];
}

// Validate sort column and sort order
$valid_columns = ['plan', 'expire'];
if (!in_array($sort_column, $valid_columns)) {
    $sort_column = 'plan';
}

if ($sort_order != 'ASC' && $sort_order != 'DESC') {
    $sort_order = 'ASC';
}

// Number of rows per page
$rowsPerPage = 10;

// Current page, default to 1
$currentPage = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate the limit for the SQL query
$limitStart = ($currentPage - 1) * $rowsPerPage;

$sql = "SELECT * FROM active ORDER BY $sort_column $sort_order LIMIT $limitStart, $rowsPerPage";
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
                <h1 class="text-orange-950 text-4xl font-bold my-auto tooltip">
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

              <span>Total number of ACTIVE members in the gym.</span>
        


            </header>





            <div class="flex items-stretch justify-between gap-10 px-5"> 
              <div class="bg-zinc-100 rounded-[40px] w-[300px] h-[40px] shadow-md">
                <div class="items-stretch flex gap-4 rounded-3xl">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/75453035-f6ab-4cc0-b8e2-9e687ed98ce1?apiKey=949dc02d5acc420a9a54e7e811a36e3e&" 
                  class="aspect-square object-contain object-center w-8 overflow-hidden shrink-0-w-full ml-3 pl-2" alt="Search Icon" />
                  
                  <div class="text-stone-500  text-lg leading-7 self-center whitespace-nowrap mt-2 mb-1">
                    <input type = "search" class="bg-zinc-100" id = "getName" placeholder = "Search here..." autocomplete = "off">
                  </div>


                  <div class="flex px-80">
                  <div 
                id="dropdown" 
                class="items-center w-[125px] h-[40px] flex px-5 py-0.5 rounded-[40px] 
                  border-2 border-solid border-stone-500">
              <div 
                class="justify-center items-center flex w-[84px] max-w-full gap-4">
                  <div 
                class="text-stone-500 text-lg leading-7 my-auto">Plan</div>
                <button 
                  type="button"
                  data-dropdown-toggle="sortplan" 
                  id="dropbtn"
                  style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/b1f4b831-70b4-4724-832d-ea63cec558e5?apiKey=949dc02d5acc420a9a54e7e811a36e3e&')"
                  class="aspect-square object-contain object-center w-full overflow-hidden shrink-0 flex-1"></button>
                  </div>
</div>

              <div class="flex px-5">
                  <div 
                id="dropdown" 
                class="items-center w-[140px] h-[40px] flex px-5 py-0.5 rounded-[40px] 
                  border-2 border-solid border-stone-500">
              <div 
                class="justify-center items-center flex w-[120px] max-w-full gap-4">
                  <div 
                class="text-stone-500 text-lg leading-7 my-auto">Expiry</div>
                <button 
                  type="button"
                  data-dropdown-toggle="sortexpiry" 
                  id="dropbtn"
                  style="background-image: url('https://cdn.builder.io/api/v1/image/assets/TEMP/b1f4b831-70b4-4724-832d-ea63cec558e5?apiKey=949dc02d5acc420a9a54e7e811a36e3e&')"
                  class="aspect-square object-contain object-center w-full overflow-hidden shrink-0 flex-1"></button>
                  </div>
                  </div>
</div>
                </div>
               </div>

              
</div>




              
          

              <!-- Dropdown menu -->
              <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="sortplan">
                  <div class="dropdown-content">
                      <ul class="py-1" aria-labelledby="dropdown">
                          <li>
                              <a href="?sort_column=plan&sort_order=ASC" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Ascending</a>
                          </li>
                          <li>
                              <a href="?sort_column=plan&sort_order=DESC" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Descending</a>
                          </li>
                      </ul>
                  </div>  
              </div>


              <!-- Dropdown menu -->
              <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="sortexpiry">
                  <div class="dropdown-content">
                      <ul class="py-1" aria-labelledby="dropdown">
                          <li>
                              <a href="?sort_column=expire&sort_order=ASC" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Ascending</a>
                          </li>
                          <li>
                              <a href="?sort_column=expire&sort_order=DESC" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Descending</a>
                          </li>
                      </ul>
                  </div>  
              </div>



              



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
            case 1: $days = 30; $planText = "1 Month"; break;
            case 2: $days = 60; $planText = "2 Months"; break;
            case 3: $days = 90; $planText = "3 Months"; break;
            case 4: $days = 120; $planText = "4 Months"; break;
            case 5: $days = 150; $planText = "5 Months"; break;
            case 6: $days = 180; $planText = "6 Months"; break;
            case 7: $days = 210; $planText = "7 Months"; break;
            case 8: $days = 240; $planText = "8 Months"; break;
            case 9: $days = 270; $planText = "9 Months"; break;
            case 10: $days = 300; $planText = "10 Months"; break;
            case 11: $days = 330; $planText = "11 Months"; break;
            case 12: $days = 360; $planText = "1 Year"; break;
            case 13: $days = 390; $planText = "1 Year and 1 Month"; break;
            case 14: $days = 420; $planText = "1 Year and 2 Months"; break;
            case 15: $days = 450; $planText = "1 Year and 3 Months"; break;
            case 16: $days = 480; $planText = "1 Year and 4 Months"; break;
            case 17: $days = 510; $planText = "1 Year and 5 Months"; break;
            case 18: $days = 540; $planText = "1 Year and 6 Months"; break;
            case 19: $days = 570; $planText = "1 Year and 7 Months"; break;
            case 20: $days = 600; $planText = "1 Year and 8 Months"; break;
            case 21: $days = 630; $planText = "1 Year and 9 Months"; break;
            case 22: $days = 660; $planText = "1 Year and 10 Months"; break;
            case 23: $days = 690; $planText = "1 Year and 11 Months"; break;
            case 24: $days = 720; $planText = "2 Years"; break;
            case 25: $days = 750; $planText = "2 Years and 1 Month"; break;
            case 26: $days = 780; $planText = "2 Years and 2 Months"; break;
            case 27: $days = 810; $planText = "2 Years and 3 Months"; break;
            case 28: $days = 840; $planText = "2 Years and 4 Months"; break;
            case 29: $days = 870; $planText = "2 Years and 5 Months"; break;
            case 30: $days = 900; $planText = "2 Years and 6 Months"; break;
            case 31: $days = 930; $planText = "2 Years and 7 Months"; break;
            case 32: $days = 960; $planText = "2 Years and 8 Months"; break;
            case 33: $days = 990; $planText = "2 Years and 9 Months"; break;
            case 34: $days = 1020; $planText = "2 Years and 10 Months"; break;
            case 35: $days = 1050; $planText = "2 Years and 11 Months"; break;
            case 36: $days = 1080; $planText = "3 Years"; break;
            case 37: $days = 1110; $planText = "3 Years and 1 Month"; break;
            case 38: $days = 1140; $planText = "3 Years and 2 Months"; break;
            case 39: $days = 1170; $planText = "3 Years and 3 Months"; break;
            case 40: $days = 1200; $planText = "3 Years and 4 Months"; break;
            case 41: $days = 1230; $planText = "3 Years and 5 Months"; break;
            case 42: $days = 1260; $planText = "3 Years and 6 Months"; break;
            case 43: $days = 1290; $planText = "3 Years and 7 Months"; break;
            case 44: $days = 1320; $planText = "3 Years and 8 Months"; break;
            case 45: $days = 1350; $planText = "3 Years and 9 Months"; break;
            case 46: $days = 1380; $planText = "3 Years and 10 Months"; break;
            case 47: $days = 1410; $planText = "3 Years and 11 Months"; break;
            case 48: $days = 1440; $planText = "4 Years"; break;
            case 49: $days = 1470; $planText = "4 Years and 1 Month"; break;
            case 50: $days = 1500; $planText = "4 Years and 2 Months"; break;
            case 51: $days = 1530; $planText = "4 Years and 3 Months"; break;
            case 52: $days = 1560; $planText = "4 Years and 4 Months"; break;
            case 53: $days = 1590; $planText = "4 Years and 5 Months"; break;
            case 54: $days = 1620; $planText = "4 Years and 6 Months"; break;
            case 55: $days = 1650; $planText = "4 Years and 7 Months"; break;
            case 56: $days = 1680; $planText = "4 Years and 8 Months"; break;
            case 57: $days = 1710; $planText = "4 Years and 9 Months"; break;
            case 58: $days = 1740; $planText = "4 Years and 10 Months"; break;
            case 59: $days = 1770; $planText = "4 Years and 11 Months"; break;
            case 60: $days = 1800; $planText = "5 Years"; break;
            case 61: $days = 1830; $planText = "5 Years and 1 Month"; break;
            case 62: $days = 1860; $planText = "5 Years and 2 Months"; break;
            case 63: $days = 1890; $planText = "5 Years and 3 Months"; break;
            case 64: $days = 1920; $planText = "5 Years and 4 Months"; break;
            case 65: $days = 1950; $planText = "5 Years and 5 Months"; break;
            case 66: $days = 1980; $planText = "5 Years and 6 Months"; break;
            case 67: $days = 2010; $planText = "5 Years and 7 Months"; break;
            case 68: $days = 2040; $planText = "5 Years and 8 Months"; break;
            case 69: $days = 2070; $planText = "5 Years and 9 Months"; break;
            case 70: $days = 2100; $planText = "5 Years and 10 Months"; break;
            case 71: $days = 2130; $planText = "5 Years and 11 Months"; break;
            case 72: $days = 2160; $planText = "6 Years"; break;
            case 73: $days = 2190; $planText = "6 Years and 1 Month"; break;
            case 74: $days = 2220; $planText = "6 Years and 2 Months"; break;
            case 75: $days = 2250; $planText = "6 Years and 3 Months"; break;
            case 76: $days = 2280; $planText = "6 Years and 4 Months"; break;
            case 77: $days = 2310; $planText = "6 Years and 5 Months"; break;
            case 78: $days = 2340; $planText = "6 Years and 6 Months"; break;
            case 79: $days = 2370; $planText = "6 Years and 7 Months"; break;
            case 80: $days = 2400; $planText = "6 Years and 8 Months"; break;
            case 81: $days = 2430; $planText = "6 Years and 9 Months"; break;
            case 82: $days = 2460; $planText = "6 Years and 10 Months"; break;
            case 83: $days = 2490; $planText = "6 Years and 11 Months"; break;
            case 84: $days = 2520; $planText = "7 Years"; break;
            case 85: $days = 2550; $planText = "7 Years and 1 Month"; break;
            case 86: $days = 2580; $planText = "7 Years and 2 Months"; break;
            case 87: $days = 2610; $planText = "7 Years and 3 Months"; break;
            case 88: $days = 2640; $planText = "7 Years and 4 Months"; break;
            case 89: $days = 2670; $planText = "7 Years and 5 Months"; break;
            case 90: $days = 2700; $planText = "7 Years and 6 Months"; break;
            case 91: $days = 2730; $planText = "7 Years and 7 Months"; break;
            case 92: $days = 2760; $planText = "7 Years and 8 Months"; break;
            case 93: $days = 2790; $planText = "7 Years and 9 Months"; break;
            case 94: $days = 2820; $planText = "7 Years and 10 Months"; break;
            case 95: $days = 2850; $planText = "7 Years and 11 Months"; break;
            case 96: $days = 2880; $planText = "8 Years"; break;
            case 97: $days = 2910; $planText = "8 Years and 1 Month"; break;
            case 98: $days = 2940; $planText = "8 Years and 2 Months"; break;
            case 99: $days = 2970; $planText = "8 Years and 3 Months"; break;
            case 100: $days = 3000; $planText = "8 Years and 4 Months"; break;
            case 101: $days = 3030; $planText = "8 Years and 5 Months"; break;
            case 102: $days = 3060; $planText = "8 Years and 6 Months"; break;
            case 103: $days = 3090; $planText = "8 Years and 7 Months"; break;
            case 104: $days = 3120; $planText = "8 Years and 8 Months"; break;
            case 105: $days = 3150; $planText = "8 Years and 9 Months"; break;
            case 106: $days = 3180; $planText = "8 Years and 10 Months"; break;
            case 107: $days = 3210; $planText = "8 Years and 11 Months"; break;
            case 108: $days = 3240; $planText = "9 Years"; break;
            case 109: $days = 3270; $planText = "9 Years and 1 Month"; break;
            case 110: $days = 3300; $planText = "9 Years and 2 Months"; break;
            case 111: $days = 3330; $planText = "9 Years and 3 Months"; break;
            case 112: $days = 3360; $planText = "9 Years and 4 Months"; break;
            case 113: $days = 3390; $planText = "9 Years and 5 Months"; break;
            case 114: $days = 3420; $planText = "9 Years and 6 Months"; break;
            case 115: $days = 3450; $planText = "9 Years and 7 Months"; break;
            case 116: $days = 3480; $planText = "9 Years and 8 Months"; break;
            case 117: $days = 3510; $planText = "9 Years and 9 Months"; break;
            case 118: $days = 3540; $planText = "9 Years and 10 Months"; break;
            case 119: $days = 3570; $planText = "9 Years and 11 Months"; break;
            case 120: $days = 3600; $planText = "10 Years"; break;
            default: $days = 0; $planText = "Unknown Plan";
        }
    
    
    
        // Calculate expiry date
        $createdate = new DateTime($row["createdate"]);
        $expiryDate = clone $createdate;
        $expiryDate->modify("+$days days");
        $expiryDateFormatted = $expiryDate->format('m-d-Y');
    
        $currentDate = new DateTime();
        $daysRemaining = $currentDate->diff($expiryDate)->days;
    
        // Update 'expire' column if needed
        if ($daysRemaining != $row['expire']) {
            $updateQuery = "UPDATE active SET expire = ? WHERE membershipno = ?";
            $stmt = $conn->prepare($updateQuery);
            $stmt->bind_param('ii', $daysRemaining, $row['membershipno']);
            $stmt->execute();
            $stmt->close();
        }
    
        // Check if expiry date is in the past
        if ($expiryDate < $currentDate) {
            // Insert into inactive table
            $fullname = $row["fullname"];
            $membershipno = $row["membershipno"];
            $contactno = $row["contactno"];
            $plan = $row["plan"];
            $expire = $row["expire"];
    
            $insertQuery = "INSERT INTO inactive (fullname, membershipno, contactno) 
                            VALUES ('$fullname', '$membershipno', '$contactno')";
            mysqli_query($conn, $insertQuery);
    
            // Delete from active table
            $deleteQuery = "DELETE FROM active WHERE membershipno = '$membershipno'";
            mysqli_query($conn, $deleteQuery);
        }
        ?>
    
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
            <td>
                <button class='bg-stone-500 text-white text-sm leading-5 font-medium rounded-3xl px-4 py-2.5 mr-5'>
                    <a href="cancel.php?removeid=<?php echo urlencode($row['membershipno']); ?>" class="text-white">Cancel</a>
                </button>
            <td>
                <button class='bg-stone-500 text-white text-sm leading-5 font-medium rounded-3xl px-4 py-2.5 mr-5'>
                    <a href="adjust.php?adjustid=<?php echo urlencode($row['membershipno']); ?>" class="text-white">Adjust</a>
                </button>
            </td>
        </tr>
        <?php 
    }
    ?>
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
        echo "<a href='activemembers.php?page=" . ($currentPage - 1) . "&sort_column=$sort_column&sort_order=$sort_order' class='mx-2 px-4 py-2 bg-stone-500 text-white rounded-3xl'>Previous</a>";
    }

    // Page numbers
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a href='activemembers.php?page=$i&sort_column=$sort_column&sort_order=$sort_order' class='mx-2 px-4 py-2 bg-stone-500 text-white rounded-3xl'>$i</a>";
    }

    // Next page button
    if ($currentPage < $totalPages) {
        echo "<a href='activemembers.php?page=" . ($currentPage + 1) . "&sort_column=$sort_column&sort_order=$sort_order' class='mx-2 px-4 py-2 bg-stone-500 text-white rounded-3xl'>Next</a>";
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














        function sortexpiry() {
            document.getElementById("sortexpiry").toggle("show");
          }

          function sortplan() {
            document.getElementById("sortplan").toggle("show");
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