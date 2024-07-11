


let imageVar = document.getElementById("image");
let imageArray = [ "slide1.jpg", "slide2.jpg", "slide3.jpg", "slide4.jpg", 
"slide5.jpg", "slide6.jpg", "slide7.jpg"]; 

let imageIndex = 0;

function slideShow(){
    imageVar.setAttribute("src", imageArray[imageIndex]);
    imageIndex++

    if(imageIndex >= imageArray.length){
        //return
        imageIndex = 0;
    }

}


setInterval(slideShow, 5000);