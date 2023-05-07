let submitBtn = document.querySelector("#dream-prompt-submit");
let formPrompt = document.querySelector(".form-prompt-container");

submitBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    console.log("ao")

    window.setTimeout(()=>{
        formPrompt.classList.add("success-prompt-result");

    },1000);
})