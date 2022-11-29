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

let getEverydayCasualItemsContainer = document.querySelectorAll(".everyday-casual-items-container");
console.log(getEverydayCasualItemsContainer);


function showEverydayCasualItem(idex){
    console.log(idex)
    getEverydayCasualItemsContainer.forEach(function(containers){
        containers.style.display = "none";
    })
    
    getEverydayCasualItemsContainer[idex].style.display = "flex";
}

showEverydayCasualItem(0);

let everydayCasulaItemsBtns = document.querySelectorAll(".exclusive-product-btn");

function everyCasualLinkActive( ) {
    everydayCasulaItemsBtns.forEach((item)=>
    item.classList.remove("active"));
    this.classList.add("active");
    showEverydayCasualItem(idex = this.getAttribute("exc-show-btn"));
};
everydayCasulaItemsBtns.forEach( (item) =>item.addEventListener("click", everyCasualLinkActive));

let getfashionItems = document.querySelectorAll(".fashion-for-you-items");
let getfashionItem = document.querySelector(".fashion-for-you-items");
let getFashionContainer = document.querySelector(".fashion-for-you-container");
    // getFashionContainer.style.width = `${getfashionItem.offsetWidth*getfashionItems.length + 350 }px`;

    

let scrollXFun=(container,item,items,outWidth)=>{
    container.style.width = `${item.offsetWidth*items.length + outWidth }px`;
}
scrollXFun(getFashionContainer,getfashionItem,getfashionItems,350)
let getwho_wear_show_container = document.querySelector(".who_wear_show_container");
let getwho_wear_show_imgs = document.querySelectorAll(".who_wear_show_img");
console.log(getwho_wear_show_imgs); 
let getwho_wear_show_img = document.querySelector(".who_wear_show_img");

    scrollXFun(getwho_wear_show_container,getwho_wear_show_img,getwho_wear_show_imgs,0)