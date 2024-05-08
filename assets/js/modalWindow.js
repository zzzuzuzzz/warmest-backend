import slider from "./slider.js";
class ModalWindow {
    constructor(object) {
        this.id = `modal-window-${object.id}`
        this.sliderId = `modal-swiper-${object.id}`
        this.photos = object.photos
        this.schemasPhoto = object.schemas
        this.label = this.id + '-label'
        this.productName = object.productName
        this.params = object.params
        this.prices = object.prices
        this.moreOptions = object.additionalOption
        this.description = object.description
    }

    getModalWindowContainer() {
        let modalWindow = document.createElement('div');
        modalWindow.className = 'modal-window'
        modalWindow.appendChild(this.getButton('Подробнее'))
        modalWindow.appendChild(this.getModalWindow())
        return modalWindow
    }

    getButton(text) {
        let buttonContainer = document.createElement('div');
        buttonContainer.className = 'button-container'
        let button = document.createElement('button');
        button.className = 'warmest-btn';
        button.setAttribute('data-bs-toggle', 'modal')
        button.setAttribute('data-bs-target', `#${this.id}`)
        let textButton = document.createElement('span');
        textButton.style.color = '#fff'
        textButton.innerText = text
        button.appendChild(textButton)
        buttonContainer.appendChild(button)
        return buttonContainer
    }
    
    getModalHeader(text) {
        let modalHeader = document.createElement('div');
        modalHeader.className = 'modal-header';
        let modalTitle = document.createElement('h1')
        modalTitle.className = 'modal-title fs-5'
        modalTitle.id = this.label
        let textTitle = document.createElement('span');
        textTitle.style.color = 'var(--warmest-orange)'
        textTitle.innerText = text
        modalTitle.appendChild(textTitle)
        let closeButton = document.createElement('button')
        closeButton.type = 'button'
        closeButton.className = 'btn-close'
        closeButton.setAttribute('data-bs-dismiss', 'modal')
        closeButton.setAttribute('aria-label', 'Close')
        modalHeader.appendChild(modalTitle)
        modalHeader.appendChild(closeButton)
        return modalHeader
    }

    getPhotoSwiperContainer(id, useButtons = true) { 
        let warmestModalPhotoBody = document.createElement('div')
        warmestModalPhotoBody.className = 'warmest-modal-photo-body'
        warmestModalPhotoBody.style.overflow = 'hidden';
        warmestModalPhotoBody.style.color = '#fff';
        let photoSwiper = document.createElement('div')
        photoSwiper.className = 'swiper photoSwiper'
        photoSwiper.id = id
        let swiperWrapper = document.createElement('div')
        swiperWrapper.className = 'swiper-wrapper'
        photoSwiper.appendChild(swiperWrapper)
        if (useButtons) {
            let swiperPagination = document.createElement('div')
            swiperPagination.className = 'swiper-pagination'
            swiperPagination.style.bottom = 'auto'
            let swiperButtonPrev = document.createElement('div')
            swiperButtonPrev.className = 'swiper-button-prev swiper-button'
            let swiperButtonNext = document.createElement('div')
            swiperButtonNext.className = 'swiper-button-next swiper-button'
            photoSwiper.appendChild(swiperPagination)
            photoSwiper.appendChild(swiperButtonPrev)
            photoSwiper.appendChild(swiperButtonNext)
        }
        warmestModalPhotoBody.appendChild(photoSwiper)
        return warmestModalPhotoBody
    }

    addSwiperToModal(id, photosArray) {
        const swiper = new slider.Slider(`#${id}`, {
            direction: 'horizontal',
            loop: true,
            speed: 400,
            spaceBetween: 100,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination'
            }
        })
        for (let item of photosArray) {
            swiper.addImgSlide(item)
        }
    }

    getButtonWithTelUrl(tel, value) {
        let link = document.createElement('a');
        link.href = `tel:${tel}`
        let button = document.createElement('button')
        button.className = 'warmest-btn'
        button.style.padding = '0px 10px'
        button.style.width = 'fit-content'
        button.innerHTML = `<span style="color:#fff;">${value}</span>`
        link.appendChild(button)
        return link
    }

    getProductInfoBlock() {
        let productInfoBlock = document.createElement('div')
        productInfoBlock.className = 'product-info-block'

        let getProductParams = (nodes) => {
            let div = document.createElement('div')
            div.className = 'product-params'
            nodes.forEach((node) => {
                div.appendChild(node)
            })
            return div
        }
        let getTableOption = () => {
            let div = document.createElement('div')
            div.className = 'product-options'
            div.style = 'font-weight: 300;'
            let table = document.createElement('table')
            let getRow = (name, value) => {
                let tr = document.createElement('tr')
                let nameTd = document.createElement('td')
                let valueTd = document.createElement('td')
                nameTd.innerText = name
                valueTd.innerText = value
                tr.appendChild(nameTd)
                tr.appendChild(valueTd)
                return tr
            }
            table.appendChild(getRow('Проект', this.productName))
            table.appendChild(getRow('Размер', `${this.params.square[0]} x ${this.params.square[1]}`))
            div.appendChild(table)
            return div
        }
        let getModalTitle = (array) => {
            let div = document.createElement('div')
            div.className = 'modal-params-title'
            array.forEach((value) => {
                let span = document.createElement('span')
                span.innerText = value
                div.appendChild(span)
            })
            return div
        }
        let getOptionPrice = (isSmall, value) => {
            let div = document.createElement('div')
            div.className = 'option-container'
            let price = document.createElement('span')
            price.innerText = value
            let rub = document.createElement('span')
            rub.innerText = '₽'
            if (!isSmall) {
                price.className = 'price-count'
                rub.className = 'price-count'
            } else {
                price.style.fontWeight = 300
                rub.style.fontWeight = 300
            }
            div.appendChild(price)
            div.appendChild(rub)
            return div
        }
        let pricesBlock = document.createElement('div')
        pricesBlock.className = 'product-prices-block'
        let pricesContainer = document.createElement('div')
        pricesContainer.className = 'product-prices-container'
        pricesContainer.appendChild(getModalTitle(['Стоимость']))
        let productOptions = document.createElement('div')
        productOptions.className = 'product-options'
        productOptions.appendChild(getOptionPrice(false, this.prices.current))
        let communication = document.createElement('span')
        communication.style.fontWeight = 300
        communication.innerText = 'с коммуникациями'  
        productOptions.appendChild(getOptionPrice(true, this.prices.currentWithComm))
        productOptions.appendChild(communication)
        pricesContainer.appendChild(productOptions)
        pricesBlock.appendChild(pricesContainer)
        
        let productMoreOptions = document.createElement('div')
        productMoreOptions.style.fontWeight = 300
        productMoreOptions.className = 'product-options'

        this.moreOptions.forEach((option) => {
            let optionContainer = document.createElement('div')
            optionContainer.className = 'option-container'
            optionContainer.innerHTML = option
            productMoreOptions.appendChild(optionContainer)
        })
        productInfoBlock.appendChild(
            getProductParams(
                [getModalTitle([this.productName, this.params.size, 'м²']), 
                getTableOption()]
            ))
        productInfoBlock.appendChild(pricesBlock)
        productInfoBlock.appendChild(getProductParams([
            getModalTitle(['Дополнительные опции']),
            productMoreOptions
        ]))
        return productInfoBlock
    }

    getCharacters() {
        let characters = document.createElement('div')
        characters.className = 'modal-characters'
        let title = document.createElement('div')
        title.className = 'title'
        let titleBlock = document.createElement('div')
        titleBlock.innerHTML = `Все <span style="color: var(--warmest-orange);">характеристики</span>`
        title.appendChild(titleBlock)
        let charactersInfo = document.createElement('div')
        let paragraph = document.createElement('p')
        paragraph.innerText = this.description
        charactersInfo.appendChild(paragraph)
        characters.appendChild(title)
        characters.appendChild(charactersInfo)
        return characters
    }
    
    getModalInfoContainer() {
        let modalInfoConteiner = document.createElement('div')
        modalInfoConteiner.className = 'modal-info-container'
        let sliderContainer = document.createElement('div')
        sliderContainer.style.display = 'grid'
        sliderContainer.style.gap = '30px'
        sliderContainer.style.width = 'fit-content'
        sliderContainer.appendChild(this.getPhotoSwiperContainer(this.sliderId))
        sliderContainer.appendChild(this.getPhotoSwiperContainer(this.sliderId+'schemas', (this.schemasPhoto != undefined && this.schemasPhoto.length > 1) ))
        let btnContainer = document.createElement('div')
        btnContainer.className = 'btn-link-mobile'
        btnContainer.style.textAlign = 'center'
        btnContainer.appendChild(this.getButtonWithTelUrl('+79637667991', 'Заказать'))
        sliderContainer.appendChild(btnContainer)
        modalInfoConteiner.appendChild(sliderContainer)
        modalInfoConteiner.appendChild(this.getProductInfoBlock())
        return modalInfoConteiner
    }

    getModalBody() {
        let modalBody = document.createElement('div')
        modalBody.className = 'modal-body'
        modalBody.appendChild(this.getModalInfoContainer())
        modalBody.appendChild(this.getCharacters())
        return modalBody
    }

    getModalDialog() {
        let modalDialog = document.createElement('div');
        modalDialog.className = 'modal-dialog modal-dialog-centered modal-dialog-scrollable';
        modalDialog.style.maxWidth = '100%'
        modalDialog.style.marginRight = '10px'
        modalDialog.style.marginLeft = '10px'
        let modalContent = document.createElement('div');
        modalContent.className = 'modal-content'
        modalContent.appendChild(this.getModalHeader(this.productName))
        modalContent.appendChild(this.getModalBody())
        modalDialog.appendChild(modalContent)
        return modalDialog
    }

    getModalWindow() {
        let modalWindow = document.createElement('div');
        modalWindow.className = 'modal fade';
        modalWindow.id = this.id
        modalWindow.setAttribute('tabindex', '-1')
        modalWindow.setAttribute('aria-labelledby', this.label)
        modalWindow.setAttribute('aria-hidden', 'true')
        modalWindow.appendChild(this.getModalDialog())
        return modalWindow
    }
}

export default ModalWindow