const noBtn = document.getElementById("noBtn");
const yesBtn = document.getElementById("yesBtn");
const message = document.getElementById("message");

// Starting position
noBtn.style.left = "60%";
noBtn.style.top = "55%";

function moveButton(){

    const padding = 20;

    const maxX = window.innerWidth - noBtn.offsetWidth - padding;
    const maxY = window.innerHeight - noBtn.offsetHeight - padding;

    const randomX = Math.random() * maxX;
    const randomY = Math.random() * maxY;

    noBtn.style.left = randomX + "px";
    noBtn.style.top = randomY + "px";
}

// Move when cursor gets close
document.addEventListener("mousemove",(e)=>{

    const rect = noBtn.getBoundingClientRect();

    const dx = e.clientX - (rect.left + rect.width/2);
    const dy = e.clientY - (rect.top + rect.height/2);

    const distance = Math.sqrt(dx*dx + dy*dy);

    if(distance < 120){
        moveButton();
    }

});

yesBtn.addEventListener("click",()=>{
    message.innerHTML="❤️ YAY!! I LOVE YOU TOO! ❤️🎉";
});