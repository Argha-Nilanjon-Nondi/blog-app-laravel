let alert_box=document.getElementById("alert-box");
let alert_btn=document.getElementById("alert-btn");

alert_btn.addEventListener("click",()=>{
    alert_box.classList.add("hidden");
});