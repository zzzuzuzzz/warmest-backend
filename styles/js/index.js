import servicesData from "./../../assets/js/servicesData.js";

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

function initSwipers() {
    new slider.Slider(
        '.serviceSwiper', 
        {
            direction: 'horizontal',
            autoplay:true,
            loop:true,
            speed: 400,
            spaceBetween: 100,
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            }
        },
        servicesData.BigSliderData
    )
}

function main() {
    resizeBlocksWithImg(window.innerWidth);
    resizeNoneMobileBlocks(window.innerWidth);
    window.addEventListener('resize', (event) => {
        resizeBlocksWithImg(event.target.innerWidth);
        resizeNoneMobileBlocks(event.target.innerWidth);
    })
    // initSwipers();
}