$(document).ready(() => {
    let btn = $("#complete")
    let menu = $("#hamburgermenu")
    let nav = $("#mobileNav")

    btn.click(() => {
        alert("Tack för beställningen. Vi återkommer med tider då vi kan leverera produkten till dig bästa kund. Hoppas du gillar vår produkt.")
    })

    menu.click(() => {
        nav.slideToggle()
    })
    
})

