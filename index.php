<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Log In</title>
    <link rel="icon" type="image/x-icon" href="images/jimicon.png" />
    <link href="/dist/output.css" rel="stylesheet" />
  </head>
  <body
    class="bg-fixed bg-no-repeat bg-cover bg-center"
    style="background-image: url(images/liquid-cheese.svg)"
  >
    <div
      class="flex flex-row bg-gradient-to-tl from-[#4c8bbb] to-[#ffffff] mt-20 relative mx-auto w-full max-w-2xl px-6 pt-10 pb-8 overflow-hidden shadow-xl ring-1 ring-gray-900/5 lg:max-w-3xl sm:rounded-xl sm:px-10"
    >
      <div class="w-full p-8 lg:w-3/5">
        <div class="text-center">
          <img src="images/jimlogo.png" alt="PAPS Logo" class="px-24" />
          <p class="mt-2 text-gray-400 font-normal">
            Log in below to access your account
          </p>
        </div>
        <?php
            if (isset($error_message)) {
            echo '<div class="alert alert-danger">' . $error_message . '</div>';
            }
        ?>        
        <form action="login.php" method="POST"> 
          <div class="mt-5">
            <div class="relative mt-6">
              <input
                type="text"
                name="uname"
                id="email"
                placeholder="Email Address"
                class="bg-transparent peer peer mt-1 w-full border-b-[1px] border-[#401b1b] px-1 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                autocomplete="NA"
              />
              <label
                for="email"
                class="pointer-events-none absolute top-0 left-1 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800"
                >Email Address</label
              >
            </div>
            <div class="relative mt-6">
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                class="bg-transparent peer peer mt-1 w-full border-b-[1px] border-[#401b1b] px-1 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
              />
              <label
                for="password"
                class="pointer-events-none absolute top-0 left-1 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800"
                >Password</label
              >
            </div>
            <div class="my-6">
              <button
                name="login"
                  type="submit"
                class="content-center w-full rounded-full bg-[#ab644b] px-3 py-3 text-[#f2f2eb] focus:bg-gray-600 focus:outline-none"
              >
                Log in
              </button>
            </div>
          </div>
        </form> 


      </div>
      <div class="hidden lg:block lg:w-[50%]">
        <img
          src="images/undraw_thoughts_re_3ysu (1).svg"
          alt="pic"
          class="pt-20"
        />
      </div>
    </div>
  </body>
</html>
