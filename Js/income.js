let addBtn = document.querySelector("#add-btn")
let addBtnName = document.querySelector(".add-btn-name")
let hidenBtn = document.querySelector('.income-expence-btns-div')
let catagory = document.querySelector(".allCategory_container")
let Category_Container = document.querySelector(".newCategory_Container")
let closeCategoryboxIcon = document.querySelector(".closeCategorybox")
let categoryInput = document.querySelector("#Category-input")
let catagoryDiv = document.querySelector('.Category')
let AmountInput = document.querySelector('#Amount-input')
let categoryLabel = document.querySelector('#Category-label')
let descriptionInput = document.querySelector('.detail')
let error = document.querySelector(".error")
addBtn.addEventListener("click", () => {
  if (addBtnName.innerHTML == "Add") {
    addBtnName.innerHTML = "Cancel"
    hidenBtn.classList.add("animateBtn")
  }
  else if(addBtnName.innerHTML == "Cancel") {
    addBtnName.innerHTML = "Add"
    hidenBtn.classList.remove("animateBtn")
  }
})

let catogoryDiv = document.querySelector(".categoryLists")

let catagories = ["Clothing","Education","Food","Gifts","Grocery","Home Utilities","Recharge","Rent","Health"];
let bgroundColor = ["6F4200","D39800","424300","AD64FF","5652CC","FF2E00","591414","1C2452","55356D","1F5190",]

let htmlEle = catagories.map((catagoryName,index) => {
  return `
  <div class="cursor-pointer categories" id=${index}>
    <p class="material-symbols-outlined selectCategory invisible" id=${index}>done</p>
    <p class="initialLetter" id=${index}>${catagoryName[0]}</p>
    <p class="categoryName" id=${index}>${catagoryName}</p>
  </div>
  `
}).join("")

catogoryDiv.innerHTML = htmlEle

let categorDiv = document.querySelectorAll(".categories")
let tik = document.querySelectorAll(".selectCategory")
let initialLetter = document.querySelectorAll(".initialLetter")
let categoryName = document.querySelectorAll(".categoryName") 
let categoryAdd_icon = document.querySelector(".categoryAddicon")

let selectedCatagory;

for(let i=0;i<categorDiv.length;i++){

  var randomColor = Math.floor(Math.random()* bgroundColor.length);

  initialLetter[i].style.backgroundColor = "#" + bgroundColor[randomColor]

  categorDiv[i].addEventListener("click",(e)=>{
    let tarId = e.target.id
    for(let j=0;j<tik.length;j++){
    
      if(tik[j].id == tarId){
        tik[j].classList.toggle("invisible")
        selectedCatagory = categoryName[j].innerText
      }else{
        tik[j].classList.add("invisible")
      }
    }
    // console.log(selectedCatagory)
    categoryInput.value = selectedCatagory
    if (categoryInput.value == selectedCatagory){
      categoryLabel.style.marginTop = "-23px"
      categoryLabel.style.fontSize = "10px"
      categoryLabel.style.color = "#3F88D8"
      categoryLabel.style.backgroundColor = "white"
    }
  })
}


categoryAdd_icon.addEventListener('click',()=>{
Category_Container.style.display = "block"
catagory.style.opacity = '0.2';
})

closeCategoryboxIcon.addEventListener('click',()=>{
  Category_Container.style.display = "none"
  catagory.style.opacity = '1';
})



categoryInput.addEventListener('click',()=>{
  catagoryDiv.style.display = "block"
  categoryInput.readOnly = true;
})


AmountInput.addEventListener('click',()=>{
  catagoryDiv.style.display = "none"
})







// -----------------------------------code for transaction buttons value---------------------------------

let transaction_button = document.querySelectorAll(".transactionType_buttons")

// console.log(transaction_button);

for(let j=0;j<transaction_button.length;j++){
  transaction_button[j].addEventListener("click",(e)=>{
    for(let i=0;i<transaction_button.length;i++){
      transaction_button[i].classList.remove("active")
    }
    e.target.classList.add("active")
  })
}





// ------------------------------------------Code for Date picker ----------------------------------------

let date = document.querySelector('.date')
config = {
  dateFormat: "d-m-Y",
}
flatpickr("input[type = datetime-local ]",config);



// --------------------------------------- code for form save button---------------------------------------


let saveButton = document.querySelector('.saveButton')

saveButton.addEventListener('click',()=>{


  transaction_button.forEach((buttons) => {
    
    if(buttons.classList.contains("active")){
      console.log(buttons.value)
    }
  })

  console.log(date.value);

  console.log(selectedCatagory)

  console.log(AmountInput.value);

  console.log(descriptionInput.value);

})