<?php
include("db_conn.php");

// Number of rows per page
$rowsPerPage = 10;

// Current page, default to 1
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;

// Calculate the limit for the SQL query
$limitStart = ($currentPage - 1) * $rowsPerPage;

// Fetch data with LIMIT clause
}

$response = array('success' => false, 'message' => '');

$membershipno = $_GET['updateid'] ?? null;

if(isset($_POST["submit"])){
    $renewDuration = $_POST['plan'];
    $expiryDate = date('Y-m-d', strtotime("+$renewDuration months"));
    $renewDate = date('Y-m-d');

    // Fetch the fullname and contactno based on membershipno
    $query = "SELECT fullname, contactno FROM active WHERE membershipno = $membershipno";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullname = $row['fullname'];
        $contactno = $row['contactno'];
    } else {
        $response['message'] = "Member not found.";
    }

    $addplan = $_POST['plan'];

    // Fetch current plan from 'active' table
    $fetchPlanQuery = "SELECT plan FROM active WHERE membershipno = $membershipno";
    $fetchPlanResult = mysqli_query($conn, $fetchPlanQuery);

    if ($fetchPlanResult && mysqli_num_rows($fetchPlanResult) > 0) {
        $row = mysqli_fetch_assoc($fetchPlanResult);
        $currentPlan = $row['plan'];

        // Add the value of 'membershipplan'
        $newPlan = $addplan + $currentPlan;

        // Update the 'plan' in the 'active' table
        $updatePlanQuery = "UPDATE active SET plan = $newPlan WHERE membershipno = $membershipno";
        mysqli_query($conn, $updatePlanQuery);

        $response['success'] = true;
        $response['message'] = "Membership plan extended successfully.";
    } else {
        $response['message'] = "Active member not found.";
    }
}

if ($membershipno) {
    $fetchMemberQuery = "SELECT * FROM active WHERE membershipno = $membershipno";
    $fetchMemberResult = $conn->query($fetchMemberQuery);

    if ($fetchMemberResult->num_rows > 0) {
        $memberDetails = $fetchMemberResult->fetch_assoc();
    } else {
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <title>Extend</title>
    <link rel="icon" type="image/x-icon" href="images/jimicon.png" />
    <link rel="stylesheet" href="table.css" type="text/css">
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body class="bg-fixed bg-no-repeat bg-cover bg-center bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#f3f4f5] via-[#e0e8ed] to-[#d0dde6]">
  
<div class="pr-12">
    <section class="shadow-inner gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
        <!--SIDEBAR-->
        <aside>
            <div class="bg-slate-300 h-full flex w-[270px] flex-col pt-6 max-md:pl-5 px-2">
                <!--jim logo-->
                <img src="images/jimlogo.png" />
                <nav class="items-start self-stretch flex flex-col w-full pl-7 mt-10 mb-96 pb-4 max-md:my-10">
                    <a href="adminDashboard.php">
                        <div class="items-start self-stretch flex w-full justify-between gap-5 pl-6 pr-16 py-4 rounded-[40px_0px_0px_40px] max-md:px-5">
                            <img loading="lazy" src="images/dashboard1.svg" class="aspect-square object-center self-stretch max-w-full" alt="Dashboard Icon" />
                            <h1 class="text-orange-950 text-lg font-medium self-center whitespace-nowrap my-auto">Dashboard</h1>
                        </div>
                    </a>
                    <a href="register.php">
                        <div class="items-start self-stretch flex w-full justify-between gap-5 pl-6 pr-16 py-4 rounded-[40px_0px_0px_40px] max-md:px-5">
                            <img loading="lazy" src="images/Students.svg" class="aspect-square object-center self-stretch max-w-full" alt="Students Icon" />
                            <h1 class="text-orange-950 text-lg font-medium self-center whitespace-nowrap my-auto">Register</h1>
                        </div>
                    </a>
                    <a href="activemembers.php">
                        <div class="items-start bg-[#e0e8ed] self-stretch flex w-[235px]] justify-between gap-5 pl-6 pr-20 py-4 rounded-[40px_0px_0px_40px] max-md:px-5">
                            <img loading="lazy" src="images/enrollees1.svg" class="aspect-square object-center self-stretch max-w-full" alt="Enrollees Icon" />
                            <h1 class="text-orange-800 text-lg font-medium self-center whitespace-nowrap my-auto">Active Members</h1>
                        </div>
                    </a>
                    <a href="inactivemembers.php">
                        <div class="items-start self-stretch flex w-full justify-between gap-5 pl-6 pr-20 py-4 rounded-[40px_0px_0px_40px] max-md:px-5">
                            <img loading="lazy" src="images/Requests.svg" class="aspect-square object-center self-stretch max-w-full" alt="Requests Icon" />
                            <h1 class="text-orange-950 text-lg font-medium self-center whitespace-nowrap my-auto">Inactive Members</h1>
                        </div>
                    </a>
                </nav>
            </div>
        </aside>
        
        <main class="flex flex-col items-stretch w-[76%] ml-10 max-md:w-full max-md:ml-0">
            <header class="flex flex-col items-stretch mt-8 mb-10 max-md:max-w-full max-md:mt-10">
                <div class="flex w-full items-center justify-between gap-5 max-md:max-w-full max-md:flex-wrap">
                    <h1 class="text-orange-950 text-4xl font-bold my-auto">Extend</h1>
                    <!--Admin Dropdown-->
                    <div class="max-w-lg">
                        <button class="text-[#424242] bg-transparent hover:bg-transparent focus:ring-4 focus:ring-transparent font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">Account</button>
                        <!-- Dropdown menu -->
                        <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm">Bonnie Green</span>
                                <span class="block text-sm font-medium text-gray-900 truncate">name@flowbite.com</span>
                            </div>
                            <ul class="py-1" aria-labelledby="dropdown">
                                <li><a href="index.html" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <?php if ($response['success']) : ?>
                <div class="bg-green-200 text-green-800 p-4 rounded-lg mb-6">
                    <?php echo $response['message']; ?>
                </div>
            <?php elseif (!empty($response['message'])) : ?>
                <div class="bg-red-200 text-red-800 p-4 rounded-lg mb-6">
                    <?php echo $response['message']; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="" enctype="multipart/form-data">
                <div class="mt-8 flex flex-wrap max-md:gap-5 justify-between max-md:justify-center">
                    <div class="flex flex-col max-md:w-full">
                        <label for="plan" class="text-slate-800 text-lg font-medium mb-1">Extend Membership Plan (in months)</label>
                        <input type="number" name="plan" id="plan" required class="border-2 border-gray-300 p-2 rounded-lg focus:outline-none focus:border-blue-500 max-md:w-full">
                    </div>
                </div>
                <div class="mt-10 flex justify-end">
                    <button type="submit" name="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Extend</button>
                </div>
            </form>
            
            <div class="mt-10">
                <h2 class="text-2xl font-bold">Member Details</h2>
                <p><strong>Membership Number:</strong> <?php echo $memberDetails['membershipno'] ?? ''; ?></p>
                <p><strong>Full Name:</strong> <?php echo $memberDetails['fullname'] ?? ''; ?></p>
                <p><strong>Contact Number:</strong> <?php echo $memberDetails['contactno'] ?? ''; ?></p>
                <p><strong>Current Plan:</strong> <?php echo $memberDetails['plan'] ?? ''; ?> months</p>
            </div>
        </main>
    </section>
</div>

</body>
</html>