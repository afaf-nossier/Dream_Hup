let btn_up=document.querySelector(".btnup");
let list_to_scroll=document.querySelector(".home .list");
let btn=document.querySelector(".home .list button");

window.onscroll = function () {
    if (this.scrollY >= 240) {
        btn_up.classList.add("show");
        list_to_scroll.classList.add("toscroll");
        btn.classList.add("button_scroll");


    } else {
        btn_up.classList.remove("show");
        list_to_scroll.classList.remove("toscroll");
        btn.classList.remove("button_scroll");
 

    }
};

btn_up.onclick = function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };
let counters= document.querySelectorAll(".counter");
// console.log(counters[0].textContent);
counters.forEach(counter =>{
    // console.log(counter.textContent);
    const speed=500;


    const update=() =>{
       let target =counter.getAttribute("data-count");
       let count=+counter.textContent;
       let increament= Math.ceil(target / speed);
       if(count < target ){
         counter.textContent = count + increament;
         setTimeout(update , 5 )

       }else{
        counter.textContent = target ;
       }
    }

    update();
});

      
 