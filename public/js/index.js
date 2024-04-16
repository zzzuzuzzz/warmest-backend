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

function main() {
    resizeBlocksWithImg(window.innerWidth)
    window.addEventListener('resize', (event) => {
        resizeBlocksWithImg(event.target.innerWidth)
    })
}