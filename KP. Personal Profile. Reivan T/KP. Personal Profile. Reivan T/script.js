const buttonWeb = document.getElementById("button-web")
const img = document.querySelector("#container-Img")
const buttonImg = document.getElementById("button-img")
const buttonUi = document.getElementById("button-ui")
const img2 = document.querySelector("#container-Img2")
const buttonImg2 = document.getElementById("button-img2")
const buttonImg3 = document.getElementById("button-img3")
const butttonMarket = document.querySelector(".button-market")
const img3 = document.querySelector("#container-Img3")

buttonWeb.addEventListener("click", () => {
    img.classList.add("activeimg")
})

buttonImg.addEventListener("click", () => {
    img.classList.remove("activeimg")
})


buttonUi.addEventListener("click", () => {
    img2.classList.add("active2")
})

buttonImg2.addEventListener("click", () => {
    img2.classList.remove("active2")
})


butttonMarket.addEventListener("click", () => {
    img3.classList.add("active3")
})

buttonImg3.addEventListener("click", () => {
    img3.classList.remove("active3")
})









