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
          <section
            class="shadow-lg bg-[#eeefea] flex flex-col mt-10 px-5 py-9 rounded-3xl max-md:max-w-full max-md:mt-10"
          >
            <div
              class="flex w-[1-00px] max-w-full gap-2 mx-20 justify-between max-md:flex-wrap max-md:justify-center"
            >
              <div class="flex items-stretch gap-5">
                <button
                onclick="location.href='register.php'"
                  class="aspect-square object-contain object-center w-[65px] overflow-hidden shrink-0 max-w-full"
                >
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/361fa489-9c27-4e08-a35a-eb40e98cc4fe?apiKey=00d7018a335e46bbabd3ad8844351700&"
                  />
                </button>
                <div
                  class="self-center flex grow basis-[0%] flex-col items-stretch"
                >
                  <div class="text-orange-950 text-center text-lg">
                  <a href="activemembers.php">Active Members</a>
                  </div>
                  <div class="text-orange-800 text-center text-4xl font-bold">
                  <?php
                  $sql="Select * from active";
                  $result=mysqli_query($conn,$sql);
                  if (isset($result)) {
                    $row = mysqli_num_rows($result);
                    echo $row;
                  }
                  ?>
                  </div>
                </div>
              </div>
              <div class="flex items-stretch gap-5">
                <button
                onclick="location.href='inactivemembers.php'"
                  class="aspect-square object-contain object-center w-[65px] overflow-hidden shrink-0 max-w-full"
                >
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c8dc0ae-1840-4118-ad1c-81efd1d6e2eb?apiKey=00d7018a335e46bbabd3ad8844351700&"
                  />
                </button>
                <div
                  class="self-center flex grow basis-[0%] flex-col items-stretch"
                >
                  <div
                    class="text-orange-950 text-center text-lg whitespace-nowrap"
                  >
                  <a href="inactivemembers.php">Inactive Members</a>
                  </div>
                  <div class="text-orange-800 text-center text-4xl font-bold">
                  <?php
                  $sql="Select * from inactive";
                  $result=mysqli_query($conn,$sql);
                  if (isset($result)) {
                    $row = mysqli_num_rows($result);
                    echo $row;
                  }
                  ?>
                  </div>
                </div>
              </div>
              
              <div class="flex items-stretch gap-4">
                <button
                type="submit" name="submit" class="justify-center items-center shadow-2xl bg-[#AC644C] flex max-w-full gap-2 px-5 py-5 rounded-full self-center max-md:mt-10 max-md:px-5">
              </a>
                </button>
                <div
                  class="flex grow basis-[0%] flex-col items-stretch self-start"
                >
                <div
                    class="text-orange-950 text-center text-lg whitespace-nowrap"
                  >
                  <a>Activeness</a>
                  </div>
                  <div class="text-orange-800 text-center text-4xl font-bold">
                  <?php
                                // Fetch the number of rows in the 'active' table
                                $activeCountResult = $conn->query("SELECT COUNT(*) AS count FROM active");
                                if ($activeCountResult === FALSE) {
                                    die("Error fetching active count: " . $conn->error);
                                }
                                $activeCountRow = $activeCountResult->fetch_assoc();
                                $activeCount = $activeCountRow['count'];

                                // Fetch the number of rows in the 'inactive' table
                                $inactiveCountResult = $conn->query("SELECT COUNT(*) AS count FROM inactive");
                                if ($inactiveCountResult === FALSE) {
                                    die("Error fetching inactive count: " . $conn->error);
                                }
                                $inactiveCountRow = $inactiveCountResult->fetch_assoc();
                                $inactiveCount = $inactiveCountRow['count'];

                                // Close the connection
                                $conn->close();

                                // Calculate the total number of rows
                                $total = $activeCount + $inactiveCount;

                                // Calculate the ratio as a percentage
                                if ($total > 0) {
                                    $ratio = ($activeCount / $total) * 100;
                                } else {
                                    $ratio = 0; // If no rows in either table, set ratio to 0
                                }

                                // Display the ratio
                                echo number_format($ratio, 2) . "%";
                            

                            ?>

                  </div>
                </div>
              </div>
            </div>
          </section>
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
                    Basic Plan
                  </h2>
                  <p class="text-orange-950 text-base leading-5 self-stretch mt-8">
                  Are monthly gym memberships offer flexibility with lower upfront
                  costs, but can be pricier in the long run.
                </p>
                <!--<div class="text-orange-950 text-center text-4xl font-bold leading-10 mt-6">
                  <?php
                  /*$sql="Select * from `request`";
                  $result=mysqli_query($conn,$sql);
                  if (isset($result)) {
                    $row = mysqli_num_rows($result);
                    echo $row;
                  }*/
                  ?>
                </div>-->
                </div>
              </div>
              <div
                class="flex flex-col items-stretch w-[398px] h-[325px] max-md:w-full max-md:ml-0"
              >
                <div
                  class="bg-[#eeefea] shadow-md flex flex-col w-full mx-auto p-8 rounded-xl max-md:mt-10 max-md:px-5"
                >
                  <h2
                    class="text-orange-950 text-center text-xl font-semibold leading-7 self-center max-w-[288px]"
                  >
                    Standard
                  </h2>
                  <p
                    class="text-orange-950 text-base leading-5 self-stretch mt-8"
                  >
                  For a limited commitment and a lower price, Standard gym membership offers more features than basic.
                  </p>
                  <!--<div
                    class="text-orange-950 text-center text-4xl font-bold leading-10 mt-6"
                  >
                  <?php
                  /*$sql="Select * from `completed_request`";
                  $result=mysqli_query($conn,$sql);
                  if (isset($result)) {
                    $row = mysqli_num_rows($result);
                    echo $row;
                  }*/
                  ?>
                  </div>-->
                </div>
              </div>
              <div
                class="flex flex-col items-stretch w-[398px] h-[325px] max-md:w-full max-md:ml-0"
              >
                <div
                  class="bg-[#eeefea] shadow-md flex flex-col w-full mx-auto p-8 rounded-xl max-md:mt-10 max-md:px-5"
                >
                  <h2
                    class="text-orange-950 text-center text-xl font-semibold leading-7 self-center max-w-[288px]"
                  >
                    Premium
                  </h2>
                  <p
                    class="text-orange-950 text-base leading-5 self-stretch mt-8"
                  >
                  Yearly memberships commit you for a year, offering cost savings and encouraging regular attendance.
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
        </main>
      </section>
    </div>
  </body>
</html>

<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
       https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>

<!-- Our script must be loaded after firebase references -->
<script src="script.js"></script>
<script>

  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      // User is signed in, see docs for a list of available properties
      // https://firebase.google.com/docs/reference/js/v8/firebase.User
      var userID = user.uid;
      const dbRef = firebase.database().ref();
      dbRef.child("admin").child(userID).get().then((snapshot) => {
        if (snapshot.exists()) {
          //const datasnap = snapshot.toJSON()
          var fname = snapshot.val().firstName
          var lname = snapshot.val().lastName
          //const namestr = JSON.stringify(name)
          var div = document.getElementById('insertname')
          var p = document.createElement('p')
          //console.log(namestr)
          p.innerHTML = fname + " " + lname
          div.appendChild(p);


        } else {
          console.log("No data available");
        }
      }).catch((error) => {
        console.error(error);
      });


    } else {
      // User is signed out
      window.location.href = 'index.php'
    }
  });


</script>

</html>