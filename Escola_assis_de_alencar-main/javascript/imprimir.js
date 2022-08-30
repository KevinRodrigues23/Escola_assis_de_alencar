const imprimir = document.querySelector("[data-imprimir]");
const areaImprima = document.querySelector("[data-imprimaAqui]")

imprimir.addEventListener("click", () => {
    window.print(areaImprima)
})