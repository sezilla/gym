<?php
include("db_conn.php");


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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="images/papsicon.png" />
    <link rel="stylesheet" href="table.css" type="text/css">
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body class="bg-fixed bg-no-repeat bg-cover bg-center bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#f3f4f5] via-[#e0e8ed] to-[#d0dde6]">
  
  <div class="pr-12">
        <section
          class="shadow-inner gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
        >
        <aside>
          <div
            class="bg-slate-300 h-full flex w-[240px] flex-col pt-6 max-md:pl-5"
          >
            <img
              loading="lazy"
              srcset="
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&width=100   100w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&width=200   200w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&width=400   400w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&width=800   800w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&width=1200 1200w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&width=1600 1600w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&width=2000 2000w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/e89eee81-b8cb-4838-b24c-009bba65d2d2?apiKey=00d7018a335e46bbabd3ad8844351700&
              "
              class="-[aspect4.03] object-contain object-center w-[149px] overflow-hidden self-center max-w-full"
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
                class="items-start self-stretch flex w-full justify-between gap-5 pl-6 pr-16 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
                >
                  <img
                  loading="lazy"
                    src="images/students1.svg"
                    class="aspect-square object-center self-stretch max-w-full"
                    alt="Students Icon"
                  />

                  <h1
                    class="text-orange-800 text-lg font-medium self-center whitespace-nowrap my-auto"
                  >
                    Register
                  </h1>
                </div>
              </a>
              <a href="activemembers.php">
                <div
                  class="items-start self-stretch flex w-full justify-between gap-5 pl-6 pr-16 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
                >
                  <img
                  loading="lazy"
                    src="images/Enrollees.svg"
                    class="aspect-square object-center self-stretch max-w-full"
                    alt="Enrollees Icon"
                  />

                  <h1
                    class="text-orange-950 text-lg font-medium self-center whitespace-nowrap my-auto"
                  >
                    Active Members
                  </h1>
                </div>
              </a>
              <a href="inactivemembers.php">
              <div
                  class="items-start bg-[#e0e8ed] self-stretch flex w-full justify-between gap-5 pl-6 pr-20 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
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
                  Renewal
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
                        href="index.html"
                        class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                        >Sign out</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              </div>
            </header>
            



















            <?php

if (isset($_POST["submit"])) {
  $renewDuration = $_POST['plan'];
  $expiryDate = date('Y-m-d', strtotime("+$renewDuration months"));
  $renewDate = date('Y-m-d');
}

$response = array('success' => false, 'message' => '');

$membershipno = $_GET['updateid'];
if(isset($_POST["submit"])){
    // Fetch the fullname based on membershipno
    $query = "SELECT fullname, contactno FROM active WHERE membershipno = $membershipno";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullname = $row['fullname'];
        $contactno = $row['contactno'];
    } else {
        $response['message'] = "Member not found.";
        echo json_encode($response);
        exit();
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
    } else {
        // Handle error if the membership number is not found
        $response['message'] = "Active member not found.";
        echo json_encode($response);
        exit();
    }
    
    echo json_encode($response);
}


if (isset($_GET['updateid'])) {
    $memberId = $_GET['updateid'];

    $fetchMemberQuery = "SELECT * FROM active WHERE membershipno = $memberId";
    $fetchMemberResult = $conn->query($fetchMemberQuery);

    if ($fetchMemberResult->num_rows > 0) {
        $memberDetails = $fetchMemberResult->fetch_assoc();
    } else {
        exit();
    }
}
?>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-keyboard"></i> Add Members Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                         <div class="col-sm-6">
                                            <label for="fullname">Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                   placeholder="ff" value="<?php echo $memberDetails['fullname']; ?>" disabled>
                                        </div>
                                        
                                    </div>


                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <label for="contactno">Contact Number</label>
                                            <input type="tel" class="form-control" id="contactno"
                                                   name="contactno" placeholder="cc" value="<?php echo $memberDetails['contactno']; ?>" disabled>
                                        </div> 
                                    </div>
                                    </div>

                                    
                                    </div>

                                    <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <label for="plan">Membership Plan</label>
                                        <select id="plan" name="plan" required>
                                          <option value="1">Basic (1 Month)</option>
                                          <option value="3">Premium (3 Months)</option>
                                          <option value="12">Yearly</option>
                                        </select>
                                    </div>

                
                                </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


            </div>  
        </section>
    </div>




    <script>
    $(document).ready(function () {
        function updateTotalAmount() {
            var membershipTypeAmount = parseFloat($('#membershipType option:selected').text().split('-').pop());

            var renewDuration = parseFloat($('#plan').val());

            var totalAmount = membershipTypeAmount * renewDuration;

            $('#totalAmount').val(totalAmount.toFixed(2));
        }

        $('#membershipType, #plan').change(updateTotalAmount);

        updateTotalAmount();
    });
</script>



            
</body>
</html>