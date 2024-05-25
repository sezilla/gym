<?php 
session_start();
include("db_conn.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="images/jimicon.png" />
    <link href="/dist/output.css" rel="stylesheet" />
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
  </head>
  <body
    class="bg-fixed bg-no-repeat bg-cover bg-center bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#f3f4f5] via-[#e0e8ed] to-[#d0dde6]"
  >
    <div class="pr-12 max-md:pr-5 no-scrollbar">
      <section
        class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
      >
        <!--Sidebar-->
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
                  class="items-start bg-[#e0e8ed] self-stretch flex w-[235px] justify-between gap-5 pl-6 pr-16 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
                >

                <!--Dashboard-->
                  <img
                    loading="lazy"
                    src="images/dashboard.svg"
                    class="aspect-square object-center self-stretch max-w-full"
                    alt="Dashboard Icon"
                  />

                  <h1
                    class="text-orange-800 text-lg font-medium self-center whitespace-nowrap my-auto"
                  >
                    Dashboard
                  </h1>
                </div>
              </a>
              <!--Student-->
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

              <!--Active Members-->
              <a href="activemembers.php">
                <div
                  class="items-start  self-stretch flex w-full justify-between gap-5 pl-6 pr-20 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
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

              <!--Request-->
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
          class="  w-[76%] ml-10 max-md:w-full max-md:ml-0"
        >
          <header
            class="flex flex-col items-stretch mt-8 max-md:max-w-full max-md:mt-10"
          >
            <div
              class="flex w-full items-center justify-between gap-5 max-md:max-w-full max-md:flex-wrap"
            >
              <h1 class="text-orange-950 text-4xl font-bold my-auto">
                Dashboard
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

              <!--<div class="self-stretch flex items-center justify-between gap-4">
                <div class="text-orange-950 text-sm font-semibold my-auto">
                  ADMIN
                </div>
                <div
                  class="bg-violet-300 self-stretch flex w-[60px] shrink-0 h-[60px] flex-col rounded-[40px]"
                ></div>
              </div>
            --></div>
          </header>
         
          <section class="mt-10">
            <div
              class="gap-16 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
            >
              <div
                class="flex flex-col items-stretch w-[398px] h-[325px] max-md:w-full max-md:ml-0"
              >
                <div
                  class="bg-[#eeefea] shadow-md flex flex-col w-full mx-auto p-8 rounded-xl max-md:mt-10 max-md:px-5"
                >
                  <h2
                    class="text-orange-950 text-center text-xl font-semibold leading-7 self-center max-w-[288px]"
                  >
                    CANCEL SUBSCRIPTION
                  </h2>
                  <p class="text-orange-950 text-base leading-5 self-stretch mt-8">
                  Are you sure you want to cancel subscription?
                </p>

                <input
                type="text"
                name="fullname"
                id="fullname"
                class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                placeholder="ff" value="<?php echo $memberDetails['fullname']; ?>" disabled>
                

                <form method="post" action="">
    <!-- Your other HTML elements -->
    <button type="submit" name="submit" class="justify-center items-center shadow-2xl bg-[#AC644C] flex w-[244px] max-w-full gap-2 mt-10 py-4 rounded-[30px] self-center" id="yesBtn">
        <h2 class="text-gray-200 text-center text-lg font-extrabold leading-6">Yes</h2>
    </button>
</form>



        <button type="goback"
        name="goback" class="justify-center items-center shadow-2xl bg-[#AC644C] flex w-[244px] max-w-full gap-2 mt-10 py-4 rounded-[30px] self-center">
         
        <h2 class="text-gray-200 text-center text-lg font-extrabold leading-6">No</h2>
        <a href="activemembers.php">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/95614cd9-381a-458f-b521-21c69ed9a189?apiKey=00d7018a335e46bbabd3ad8844351700&" alt="" />
          </a>
        </button>
          
                </div>
              </div>


              <?php

// Assuming $conn is your database connection object

if (isset($_POST["submit"])) {
    // Check if membershipno is set in GET parameters
    if (!isset($_GET['removeid'])) {
        $response['message'] = "Membership number not provided.";
        echo json_encode($response);
        exit();
    }

    $membershipno = $_GET['removeid'];

    // Fetch the fullname and contactno based on membershipno
    $query = "SELECT fullname, contactno FROM active WHERE membershipno = $membershipno";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullname = $row['fullname'];
        $contactno = $row['contactno'];

        // Insert into inactive table
        $insertQuery = "INSERT INTO inactive (fullname, membershipno, contactno) 
                        VALUES ('$fullname', '$membershipno', '$contactno')";
        if (mysqli_query($conn, $insertQuery)) {
            // Delete from active table
            $deleteQuery = "DELETE FROM active WHERE membershipno = '$membershipno'";
            if (mysqli_query($conn, $deleteQuery)) {
                $response['success'] = true;
                $response['message'] = "Membership plan cancelled successfully.";
            } else {
                $response['message'] = "Failed to delete from active table.";
            }
        } else {
            $response['message'] = "Failed to insert into inactive table.";
        }
    } else {
        $response['message'] = "Member not found.";
    }

    echo json_encode($response);
}

if (isset($_GET['removeid'])) {
  $memberId = $_GET['removeid'];

  $fetchMemberQuery = "SELECT * FROM active WHERE membershipno = $memberId";
  $fetchMemberResult = $conn->query($fetchMemberQuery);

  if ($fetchMemberResult->num_rows > 0) {
      $memberDetails = $fetchMemberResult->fetch_assoc();
  } else {
      exit();
  }
}

?>

           
              
            </div>
          </section>
          

        </main>
      </section>
    </div>
  </body>
</html>