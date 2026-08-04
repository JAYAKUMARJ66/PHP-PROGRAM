let image=[
    "./i1.jpg",
    "./i2.jpg",
    "./i3.jpg",
    "./i4.jpg"
]
let slide=document.getElementById("img");
let index =0;
let changeImage=()=>{
    index++;
    if(index>=image.length){
        index=0;
    }
    slide.src=image[index];
}
setInterval(changeImage,2000);