import warmestCard from "./../../assets/js/warmestCard.js";
import CARDS_INFO from "../../assets/js/cardsInfo.js";

document.addEventListener('DOMContentLoaded', main)

const MobileWindowWidth = 992;

function resizeBlocksWithImg(windowWidth) {
    let mainPageBlocks = document.querySelectorAll('.block-with-image');
    let footerItemsBlock = document.querySelector('#warmest-footer-data');
    if (windowWidth < MobileWindowWidth) {
        footerItemsBlock.classList.add('flex-column');
        for (let element of mainPageBlocks) {
            element.classList.add('flex-column-reverse');
        }
    } else {
        footerItemsBlock.classList.remove('flex-column');
        for (let element of mainPageBlocks) {
            element.classList.remove('flex-column-reverse')
        }
    }
}

function resizeNoneMobileBlocks(windowWidth) {
    let noneMobileBlocks = document.querySelectorAll('.none-mobile');
    let display = null
    if (windowWidth < MobileWindowWidth) {
        display = 'none';
    }
    noneMobileBlocks.forEach((element) => {
        element.style.setProperty('display', display, 'important')
    })   
}

function resizeModalInfoContainer(windowWidth) {
    let modalInfoContainers = document.querySelectorAll('.modal-info-container');
    if (windowWidth < 1200) {
        modalInfoContainers.forEach((el) => {
            el.style = 'flex-direction: column'
        })
    } else {
        modalInfoContainers.forEach((el) => {
            el.style = 'flex-direction: row'
        })
    }
}

function displayButtonLinkMobile(windowWidth) {
    let buttons = document.querySelectorAll('.btn-link-mobile');
    if (windowWidth < MobileWindowWidth) {
        buttons.forEach((el) => {
            el.style.display = 'block'
        })
    } else {
        buttons.forEach((el) => {
            el.style.display = 'none'
        })
    }
}

function initCards() {
    let productContainer = document.querySelector('.products-container')
    for (let item of CARDS_INFO) {
      const card = new warmestCard.WarmestCard(item)
      card.addCardTo(productContainer)
      card.modalWindow.addSwiperToModal(card.modalWindow.sliderId, card.photos)
      if (card.schemasPhoto) card.modalWindow.addSwiperToModal(card.modalWindow.sliderId+'schemas', card.schemasPhoto)
    }
}

function main() {
    // initCards()
    displayButtonLinkMobile(window.innerWidth);
    resizeBlocksWithImg(window.innerWidth);
    resizeNoneMobileBlocks(window.innerWidth);
    resizeModalInfoContainer(window.innerWidth)
    window.addEventListener('resize', (event) => {
        displayButtonLinkMobile(event.target.innerWidth);
        resizeBlocksWithImg(event.target.innerWidth);
        resizeNoneMobileBlocks(event.target.innerWidth);
        resizeModalInfoContainer(event.target.innerWidth);
    })
}