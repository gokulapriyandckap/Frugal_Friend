let addBtn = document.querySelector("#add-btn")
let addBtnName = document.querySelector(".add-btn-name")
let hidenBtn = document.querySelector('.income-expence-btns-div')


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