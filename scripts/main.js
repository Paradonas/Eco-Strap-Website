$(document).ready(() => {
    let btn = $("#complete")
    let menu = $("#hamburgermenu")
    let nav = $("#mobileNav")

    btn.click(() => {
        alert("Produktionen har slutat. Ingen beställning har genomförts.")
    })

    menu.click(() => {
        nav.slideToggle()
    })
    
})

