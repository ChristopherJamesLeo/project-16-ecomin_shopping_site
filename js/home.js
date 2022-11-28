console.log("helloworld");
let carouselItems = document.querySelectorAll(".carousel-item-container");
let carouselIndi = document.querySelectorAll(".dot");
let getPrevBtn = document.getElementById("prev"),
    getNextBtn = document.getElementById("next");

let showidx = 1;

getPrevBtn.addEventListener("click", function(){
    console.log("hello btn");
    slideShow(showidx -=1);
})

getNextBtn.addEventListener("click",function(){
    console.log("hello btn");
    slideShow(showidx +=1);
})
slideShow(showidx);

function slideShow(idx){
    carouselItems.forEach(function(carouselItem){
        carouselItem.style.display = "none";
    })
    carouselIndi.forEach(function(dot){
        dot.classList.remove("active");
    })
    if(showidx > carouselItems.length ){
        showidx = 1;
    }else if(showidx < 1){
        showidx = carouselItems.length;
    }
    carouselItems[showidx-1].style.display = "block";
    carouselIndi[showidx-1].classList.add("active");
}

for (let i = 0; i < carouselIndi.length; i++) {
    carouselIndi[i].addEventListener("click",function(){
        let indi = this.getAttribute("data-bs-slide-indi");
        slideShow(showidx = indi );
    })
    
}