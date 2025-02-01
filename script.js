const left = document.querySelector('.left');
const right = document.querySelector('.right');
const slider = document.querySelector('.slider');
const  images = document.querySelectorAll('.image');
 let slidenumber=1;
 const length =images.length;

 const nextslide=() =>{
    slider.style.transform = `translateX(-${slidenumber*1000}px)`;
   slidenumber++}

right.addEventListener('click', ()=>{
    if(slidenumber<length){
   
        nextslide();}
        
   else{
    slider.style.transform = `translateX(0px)`;
   slidenumber=1}
   
});