<!DOCTYPE html>
<html lang="en" class="h-full w-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../CSS/home.css">
  <title>home page</title>
</head>

<body class="h-full w-full" style="background-color: #F4F7FA;">
  <!-- Sidebar -->
  <aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white-50 dark:bg-white-800" style="background-color: #223F64;">
      <!-- <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a> -->
      <ul class="space-y-2 font-medium">
        <li>
          <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group" style="background-color: #316AA7;">
            <svg
              class="w-5 h-5 text-white-500 transition duration-75 dark:text-white-400 group-hover:text-white-900 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21"
              style="width: 26px;">
              <path
                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
              <path
                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
            </svg>
            <span class="ml-3">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
              stroke="currentColor" className="w-6 h-6" style="width: 26px;">
              <path strokeLinecap="round" strokeLinejoin="round"
                d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Report</span>
          </a>
        </li>
        <li>
          <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
              stroke="currentColor" className="w-3 h-3" style="width: 26px;">
              <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>

            <span class="flex-1 ml-3 whitespace-nowrap">Add</span>
          </a>
        </li>
        <li style="margin-top: 23pc;">
          <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
              stroke="currentColor" className="w-6 h-6" style="width: 26px;">
              <path strokeLinecap="round" strokeLinejoin="round"
                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
              <path strokeLinecap="round" strokeLinejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- main contant -->
  <div class="p-4 sm:ml-64" style="display: flex;">
    <!-- balance and graph -->
    <div class="records">
      <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900" style="color: #223F64;">Welcome Back, <?php echo $usrenameSignup;?> <?= $_SESSION['username']?></h1>
      <h2 style="color: #223F64;">Here’s what’s happening with your store today.</h2>
      <br>
      <div class="balance_card">
        <a href="#"
        class="block  p-6 bg-white rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
        style="width: 40rem;height: 17rem;background-color: #fff;">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900" style="color: #223F64;">Balance</h5>
        <p class="font-normal text-gray-700 dark:text-black-400" style="margin-bottom: 10px;">Grouped by transaction mode without date filter.</p>
        
<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <tbody>
          <tr>
              <th scope="row" class="px-6 py-0 font-medium text-gray-900 whitespace-nowrap" style="color: #25384F;">
                Cash
              </th>
              <td class="px-90 py-4" style="padding-left: 25rem;">
                ₹10,000.00 
              </td>
          </tr>
          <tr>
            <th scope="row" class="px-6 py-0 font-medium text-gray-900 whitespace-nowrap" style="color: #25384F;">
              Card
            </th>
            <td class="px-90 py-4" style="padding-left: 25rem;">
                ₹10,000.00
            </td>
        </tr>
        <tr>
          <th scope="row" class="px-6 py-0 font-medium text-gray-900 whitespace-nowrap" style="color: #25384F;">
            Bank
          </th>
          <td class="px-90 py-4" style="padding-left: 25rem;">
                ₹10,000.00
          </td>
      </tr>
      </tbody>
  </table>
</div>

      </a>
      </div>
      <br>
      <div class="bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6" style="background-color: #fff; width: 40rem;">
        <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
          <div class="flex items-center">
            <div style="display: flex;">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Analytics</h5>
              <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom"
                  class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-gray-700"
                  type="button">
                  Last 7 days
                  <svg class="w-2.5 m-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4" />
                  </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown"
                  class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7
                        days</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30
                        days</a>
                    </li>
                    <li>
                      <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90
                        days</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-2">
          <dl class="flex items-center">
            <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal mr-1">Money spent:</dt>
            <dd class="text-gray-900 text-sm dark:text-gray font-semibold">$3,232</dd>
          </dl>
          <dl class="flex items-center justify-end">
            <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal mr-1">Conversion rate:</dt>
            <dd class="text-gray-900 text-sm dark:text-white font-semibold">1.2%</dd>
          </dl>
        </div>

        <div id="column-chart"></div>
        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
          
        </div>
      </div>  
    </div>
    <!-- overall balance and dountchart -->
    <div class="report" style="margin-left: 30px;">

      <div class="p-4 bg-white  rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700" style="height: 80px;background-color: #fff;">
        <div class="Overall_balance" style="display: flex; border : #FF003D  3px;border-left-style: solid;">
          <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900" style="padding-left: 22px; color: #25384F;">Overall balance : <span>100000</span></h1>
        </div>
      </div>
      <div class="w-full max-w-sm p-4 bg-white border border-white-200 rounded-lg shadow sm:p-8 dark:bg-white-800 dark:border-white-700" style="margin-top: 30px;">
        
<div class="flex flex-wrap">
  <div class="flex items-center mr-4" style="margin-left: 40px;">
      <input id="red-radio" type="radio" value="" name="colored-radio">
      <label for="red-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Income</label>
  </div>
  <div class="flex items-center mr-4" style="margin-left: 50px;">
    <input id="red-radio" type="radio" value="" name="colored-radio">
    <label for="red-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expenses</label>
</div>
<div class="topPortion3">
  <div class="divElaments">
    <span class="material-symbols-outlined Bg" style="color:#25384F;">arrow_back</span>
    <h3 class="month">August</h3>
    <span class="material-symbols-outlined Ag" style="color:#25384F;">arrow_forward</span>
  </div>
</div>
<div class="chart-container" style="padding-top: 50px;">
  <canvas id="myChart"></canvas>
</div> 
</div>


      </div>
  </div>
</body>
<script src="../Js/home.js"></script>

</html>


