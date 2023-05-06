let submitBtn = document.querySelector("#dream-submit");
let formPrompt = document.querySelector(".form-prompt-container");

submitBtn.addEventListener("click",(e)=>{
    e.preventDefault();
    console.log("ao")

    window.setTimeout(()=>{
        formPrompt.classList.add("success-prompt-result");
        console.log("ao tsara")

    },1000);
})