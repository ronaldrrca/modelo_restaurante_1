document.getElementById("icon_menu").addEventListener("click", ()=> {
    document.getElementById("icon_menu").style.display = "none"
    document.getElementById("icon_closeMenu").style.display = "block"
    document.getElementById("mobileMenu").style.display = "flex"
})

document.getElementById("icon_closeMenu").addEventListener("click", ()=> {
    document.getElementById("icon_closeMenu").style.display = "none"
    document.getElementById("icon_menu").style.display = "block"
    document.getElementById("mobileMenu").style.display = "none"
})

let url = location.href;
const from = url.lastIndexOf("/") + 1
const to = url.indexOf(".php")
let pageName = url.slice(from, to)

switch (pageName) {
    case "index":
        document.getElementById("item_index").style.border = "2px solid #E6A322"
        document.getElementById("mobile_item_index").style.color = "#E6A322"
        break;
    case "laEmpresa":
        document.getElementById("item_laEmpresa").style.border = "2px solid #E6A322"
        document.getElementById("mobile_laEmpresa").style.color = "#E6A322"
        break;
    case "menu":
        document.getElementById("item_menu").style.border = "2px solid #E6A322"
        document.getElementById("mobile_item_menu").style.color = "#E6A322"
        break;
    case "reservas":
        document.getElementById("item_reservas").style.border = "2px solid #E6A322"
        document.getElementById("mobile_item_reservas").style.color = "#E6A322"
        break;
    case "contacto":
        document.getElementById("item_contacto").style.border = "2px solid #E6A322"
        document.getElementById("mobile_item_contacto").style.color = "#E6A322"
        break;
    default:
        document.getElementById("item_index").style.border = "2px solid #E6A322"
        document.getElementById("mobile_item_index").style.color = "#E6A322"
        break;
}
console.log(url)