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
    <link rel="icon" type="image/x-icon" href="images/papsicon.png" />
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
                  class="items-start bg-[#e0e8ed] self-stretch flex w-full justify-between gap-5 pl-6 pr-16 py-4 rounded-[40px_0px_0px_40px] max-md:px-5"
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
              <a href="Students_list.php">
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
                    Students
                  </h1>
                </div>
              </a>

              <!--Enrollees-->
              <a href="Enrollees.php">
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
                    Enrollees
                  </h1>
                </div>
              </a>

              <!--Request-->
              <a href="requests.php">
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
                    Requests
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
                        href="index.html"
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
                onclick="location.href='Students_list.php'"
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
                  <a href="Students_list.php">Students</a>
                  </div>
                  <div class="text-orange-800 text-center text-4xl font-bold">
                  <?php
                  $sql="Select * from request";
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
                onclick="location.href='requests.php'"
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
                  <a href="requests.php">Requests</a>
                  </div>
                  <div class="text-orange-800 text-center text-4xl font-bold">
                  <?php
                  $sql="Select * from `request` ";
                  $result1=mysqli_query($conn,$sql);
                  $sql="Select * from `completed_request`";
                  $result2=mysqli_query($conn,$sql);
                  
                  if (isset($result1) && isset($result2)) {
                    $row = mysqli_num_rows($result1) + mysqli_num_rows($result2);
                    echo $row;
                  }
                  ?>
                  </div>
                </div>
              </div>
              
              <div class="flex items-stretch gap-4">
                <button
                type="submit" name="submit" class="justify-center items-center shadow-2xl bg-[#AC644C] flex max-w-full gap-2 px-5 py-5 rounded-full self-center max-md:mt-10 max-md:px-5">
              <a href="#">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKxJREFUSEvVVdEOgCAIhPX/n1w0XTRGoCVq5ZtTuDuQE2HwwsH54QQgInLAFkTcPCJeHCLm3PMBGLm1dKzIVZAOarJL598CYJmaVWnvKpA1f5Iwxen7Mpc5B5Ee6MfxDkDrE7Xi5lmF1eRLPY/xJ6JkHYlcthG979HkPgDeHDDDEnO+czE7aRUtAF2sQvdGKgGANdu0Z9d3zC4MEJmDaomM5D/50SJlKcUOt4odRkXkGW5+V2EAAAAASUVORK5CYII="/>
              </a>
                </button>
                <div
                  class="flex grow basis-[0%] flex-col items-stretch self-start"
                >
                  <div
                    class="text-orange-950 text-center text-2xl pt-4 font-bold self-center"
                  >
                    Scan
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
                    Pending
                  </h2>
                  <p class="text-orange-950 text-base leading-5 self-stretch mt-8">
                  Pending request forms of students. Dynamic queue of students
                  awaiting administrative action.
                </p>
                <div class="text-orange-950 text-center text-4xl font-bold leading-10 mt-6">
                  <?php
                  $sql="Select * from `request`";
                  $result=mysqli_query($conn,$sql);
                  if (isset($result)) {
                    $row = mysqli_num_rows($result);
                    echo $row;
                  }
                  ?>
                </div>
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
                    Completed
                  </h2>
                  <p
                    class="text-orange-950 text-base leading-5 self-stretch mt-8"
                  >
                    Completed forms of students who requested their credentials,
                    awaiting to review and approval to finalize.
                  </p>
                  <div
                    class="text-orange-950 text-center text-4xl font-bold leading-10 mt-6"
                  >
                  <?php
                  $sql="Select * from `completed_request`";
                  $result=mysqli_query($conn,$sql);
                  if (isset($result)) {
                    $row = mysqli_num_rows($result);
                    echo $row;
                  }
                  ?>
                  </div>
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
                    Missed
                  </h2>
                  <p
                    class="text-orange-950 text-base leading-5 self-stretch mt-8"
                  >
                    Missed credentials of students who did not claim their
                    request forms, or that were not made past the deadline.
                  </p>
                  <div
                    class="text-orange-950 text-center text-4xl font-bold leading-10 mt-6"
                  >
                  <?php
                  $sql="Select * from `missed_request`";
                  $result=mysqli_query($conn,$sql);
                  if (isset($result)) {
                    $row = mysqli_num_rows($result);
                    echo $row;
                  }
                  ?>
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
      window.location.href = 'login.html'
    }
  });


</script>

</html>