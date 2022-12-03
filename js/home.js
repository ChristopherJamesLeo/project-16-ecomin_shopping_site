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

    scrollXFun(getwho_wear_show_container,getwho_wear_show_img,getwho_wear_show_imgs,0);


let getChangeLightDarkBtn = document.getElementById("theme_light_dark");


// getChangeLightDarkBtn.addEventListener("click",function(){

// })

let getThemeColorChangeBtn = document.getElementById("theme_color");
let getThemeColorChange = document.getElementById("page_theme");

getThemeColorChangeBtn.addEventListener("mouseleave",function(){
    console.log("hel");
    let getColor = getThemeColorChange.value;
    document.body.style.setProperty("--global-color",`${getColor}`);
})

document.getElementById("left_right_btn").addEventListener("click",function(){
    document.querySelector(".control-page-container").classList.toggle("move_right");
    document.querySelector(".control-page-container").classList.toggle("move_left");
})

let getcartAdds = document.querySelectorAll(".cart-add");
let getBadgeCarts = document.querySelectorAll(".badge-carts");
console.log(getcartAdds);

getcartAdds.forEach(function(getcartAdd){
    getcartAdd.addEventListener("click",function(e){
        let getProductImg = e.target.parentElement.parentElement.parentElement.children[0];
        console.log(getProductImg)
    
        let cartPositionX = e.clientX;
        let cartPositionY = e.clientY;
        getProductImg.classList.add("latest-drop-show-items-ani")
        
        var cartCollection;
        if(localStorage.getItem("cartCollect")== null){
            cartCollection = [];
        }else {
            cartCollection = JSON.parse(localStorage.getItem("cartCollect"));
        }
        // console.log(this.classList[1])
        cartCollection.push(this.classList[1]);
        localStorage.setItem("cartCollect",JSON.stringify(cartCollection));
        getBadgeCarts.forEach(function(getBadgeCart){
            getBadgeCart.innerText= cartCollection.length;
        })
        
    })
})

// $(document).ready(function(){
//     let getCardAddJs = document.querySelectorAll(".cart-add");
//     console.log(getCardAddJs);
//     getCardAddJs.forEach(function(getCardAddj){
//         console.log(getCardAddj);
//         $(getCardAddj).click(function(e){
//             console.log(this.parentElement.parentElement)
//             let getImgContainer = this.parentElement.parentElement;
//             $(getImgContainer).clone().appendTo(".clone_img_container")
//             $(".clone_img_container").css(
//                 {
//                     "width" : "100%",
//                     "height" : "100%",
//                     "transform" : "scale(1)",
//                     "animation": "product-ani 0.5s linear 0s"
//                 }
//             )
//         })
//     })
// });