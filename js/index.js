const  slider_images = [
    {
        src: ".assets/images/slider_home-1-1500x999.webp",
        alt: "restaurante elegante"
    },
    {
        src: ".assets/images/slider_home-2-1500x906.webp",
        alt: "mujer modelando ropa frente a una pared"
    },
    {
        src: ".assets/images/slider_home-3-1500x999.webp",
        alt: "mujeres modelando ropa"
    },
    {
        src: ".assets/images/slider_home-4-1500x999.webp",
        alt: "mujeres modelando ropa"
    }
]
                    
let active_image = "./assets/images/slider_home-1-1500x999.webp"

/*Cambiando automáticamente la imagen principal del inicio */
setInterval(function(){
switch (active_image) {
   case "./assets/images/slider_home-1-1500x999.webp":
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-2-1500x906.webp")
        active_image = "./assets/images/slider_home-2-1500x906.webp"
       break;
    case "./assets/images/slider_home-2-1500x906.webp":
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-3-1500x999.webp") 
        active_image = "./assets/images/slider_home-3-1500x999.webp"
       break;
    case "./assets/images/slider_home-3-1500x999.webp":
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-4-1500x999.webp") 
        active_image = "./assets/images/slider_home-4-1500x999.webp"
       break;
    case "./assets/images/slider_home-4-1500x999.webp":
        document.getElementById("sliderImg").setAttribute("src", "./assets/images/slider_home-1-1500x999.webp") 
        active_image = "./assets/images/slider_home-1-1500x999.webp"
     break;
}
}, 4000)







