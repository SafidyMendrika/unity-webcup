let accountListContainer = document.querySelector(".account-list-container");

let accountElements = accountListContainer.querySelectorAll(".list-element");



//select element
let select = document.querySelector(".account-select");

select.addEventListener("change",()=>{
    console.log(select.value);
    if (select.value == "general") removeTier();
    if (select.value == "tier") removeGeneral();
    if (select.value == "tous") showAll();
})



function getAccountNumber(element){
    let numberContainer = element.querySelector(".account-number");

    return numberContainer.innerText;
}

function removeGeneral(){
    accountElements.forEach((element)=>{
        if (!element.classList.contains("est-tiers")) element.classList.add("hide");
        else element.classList.remove("hide");
    })
}
function removeTier(){
    accountElements.forEach((element)=>{
        if (element.classList.contains("est-tiers")) element.classList.add("hide");
        else element.classList.remove("hide");
    })
}
function showAll(){
    accountElements.forEach((element)=>{
        element.classList.remove("hide");
    })
}
