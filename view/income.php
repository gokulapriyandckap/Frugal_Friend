<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../CSS/income.css">
  
  <script src="https://kit.fontawesome.com/53c4033439.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- For date picker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <title>home page</title>
</head>

<body style="background-color: #F4F7FA;">
  <!-- Sidebar -->
  <aside id="default-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
  aria-label="Sidebar">
  <div class="h-full px-3 py-4 overflow-y-auto bg-white-50 dark:bg-white-800" style="background-color: #223F64;">
  <a href="/home" class="flex items-center pl-2.5 mb-5" style="margin-left: 40px; margin-top: 20px;">
      <img src="../Images/Frugal_Friend_Logo.png">
    </a>
    <ul class="space-y-2 font-medium">
      <li>
        <a href="./home"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
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
        <a href="/report"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
            stroke="currentColor" className="w-6 h-6" style="width: 26px;">
            <path strokeLinecap="round" strokeLinejoin="round"
              d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
          </svg>
          <span class="flex-1 ml-3 whitespace-nowrap">Report</span>
        </a>
      </li>
      <li class="add-btn-div">
        <a id="add-btn"
          class="flex items-center p-2 w-69 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
            stroke="currentColor" className="w-6 h-6" style="width: 26px;">
            <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
          <span class="flex-1 ml-3 whitespace-nowrap add-btn-name  cursor-pointer">Add</span>
        </a>
        <div class="income-expence-btns-div">
          <div class="btnDiv">
            <button class="material-symbols-outlined incomeSymble">trending_up</button>
            <a href="/income" class="atag Income">Incomes</a>
          </div>
          <div class="btnDiv">
            <button class="material-symbols-outlined expensesSymble">trending_down</button>
            <a href="#" class="atag Expenses">Expenses</a>
          </div>
        </div>
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
  <div class="p-10 sm:ml-64 relative" style="display: flex;">
    <!-- Income form-->
    <div class="incomeContainer">
      <div class="incomeDetails">
        <h1 class="transactionHeading">Transaction Mode</h1>
        <div class="transactionType_buttons_div">
          <button class="transactionType_buttons" value="Cash" >Cash</button>
          <button class="transactionType_buttons" value="Card">Card</button>
          <button class="transactionType_buttons" value="Bank">Bank</button>
        </div>
        <div class="inputContainer">
          <div class="divDate">
            <input type="datetime-local" class="inputsFeild date" placeholder="06-08-2023">
          </div>
          <div>
            <input type="text" name="Category-input" id="Category-input" required="required" class="input" >
            <label for="Category-input" id="Category-label" class="label">Category</label>
          </div>
          <div>
            <input type="number" name="Amount-input" id="Amount-input" required="required" class="input">
            <label for="Amount-input" class="label">Amount</label>
          </div>
          <div class="divdetails">
            <input type="text" class="inputsFeild detail" placeholder="Enter Details (Bill No, Quentity)">
          </div>
          <div class="saveButton_div">
            <button class="save_and_newButton">SAVE AND NEW</button>
            <button class="saveButton" value = <?php echo $usrenameSignup;?> <?= $_SESSION['userid']?>  >SAVE</button>
          </div>
        </div>
      </div>
    </div>
    <!-- other details -->
    <div class="others Category relative p-8 " style="margin-left: 30px;" hidden>
      <div class="categoryDiv ">
        <div class="allCategory_container">
          <h2 class="font-medium text-2xl">Select Category</h2>
          <div class="categoryLists "></div>
          <div class="plus-btn w-12 h-12">
            <span class="material-symbols-outlined categoryAddicon ">add</span>
          </div>
        </div>
        <div class="newCategory_Container">
          <div class="categoryBox">
            <span class="material-symbols-outlined closeCategorybox">close</span>
              <div>
                <input type="text" name="newCategory-input" id="Category-input" required="required" class="newCategory">
                <label for="newCategory-input" class="newCategory_lable">Category</label>
              </div>
            <button class="categorySubbmit_button">ADD CATEGORY</button>
          </div>    
        </div>
      </div>
    </div>
  </div>
</body>
<!-- Script for Date picker --->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="../Js/income.js"></script>

</html>