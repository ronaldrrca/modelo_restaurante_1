let source_768 = document.getElementById("source_768");
let source_1300 = document.getElementById("source_1300");
let active_image = "./assets/images/slider_home-1-1500x999.jpg"

/*Cambiando automáticamente la imagen principal del inicio */
setInterval(function(){
switch (active_image) {
   case "./assets/images/slider_home-1-1500x999.jpg":
        source_768.setAttribute("srcset", "./assets/images/slider_home-2-768x464.jpg")
        source_1300.setAttribute("srcset", "./assets/images/slider_home-2-1300x785.jpg")
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-2-1500x906.jpg")
        active_image = "./assets/images/slider_home-2-1500x906.jpg"
        break;
    case "./assets/images/slider_home-2-1500x906.jpg":
        source_768.setAttribute("srcset", "./assets/images/slider_home-3-768x511.jpg")
        source_1300.setAttribute("srcset", "./assets/images/slider_home-3-1300x866.jpg")
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-3-1500x999.jpg") 
        active_image = "./assets/images/slider_home-3-1500x999.jpg"
       break;
    case "./assets/images/slider_home-3-1500x999.jpg":
        source_768.setAttribute("srcset", "./assets/images/slider_home-4-768x511.jpg")
        source_1300.setAttribute("srcset", "./assets/images/slider_home-4-1300x866.jpg")
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-4-1500x999.jpg") 
        active_image = "./assets/images/slider_home-4-1500x999.jpg"
       break;
    case "./assets/images/slider_home-4-1500x999.jpg":
        source_768.setAttribute("srcset", "./assets/images/slider_home-1-768x511.jpg")
        source_1300.setAttribute("srcset", "./assets/images/slider_home-1-1300x866.jpg")
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-1-1500x999.jpg") 
        active_image = "./assets/images/slider_home-1-1500x999.jpg"
     break;
}
}, 4000)







