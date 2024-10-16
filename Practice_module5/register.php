<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 
<section class="bg-gray-50 dark:bg-white-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-black">
          <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
          Flowbite    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-white-800 dark:border-white-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                  Create an account
              </h1>
              <form class="space-y-4 md:space-y-6" action="#" method="POST">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Your email</label>
                      <input type="email" name="email" id="email" class="bg-black-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-black-600 focus:border-black-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-black-500 dark:focus:border-black-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-black-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-black-600 focus:border-black-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Confirm Password</label>
                        <input type="-confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-black-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-black-600 focus:border-black-600 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-white-300 rounded bg-black-50 focus:ring-3 focus:ring-black-300 dark:bg-black-700 dark:border-black-600 dark:focus:ring-black-600 dark:ring-offset-black-800" required="">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-black-500 dark:text-black-300">I accept the <a class="font-medium text-blue-600 hover:underline dark:text-blue-500" href="#">Terms and Conditions</a></label>
                      </div>
                  </div>
                  <button type="submit" class="w-full text-black bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create an account</button>
                  <p class="text-sm font-light text-black-500 dark:text-black-400">
                      Already have an account? <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Login here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>


</body>
</html>