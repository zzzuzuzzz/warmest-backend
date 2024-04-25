// objectEx = {
//     'id': 0,
//     'productName': 'productName',
//     'isFavorite': false,
//     'params': {
//         'size': 999,
//         'floors':1,
//         'rooms':3,
//         'square': [1,2]
//     },
//     'prices': {
//         'current': 5000000,
//         'currentWithComm':7000000,
//         'other': 'Тут будет текст про ипотеку'
//     },
//     'photos': [
//             '/assets/img/houses/01/01_V0_010000.png',
//             '/assets/img/houses/01/01_V0_020090.png',
//             '/assets/img/houses/01/01_V0_030180.png',
//             '/assets/img/houses/01/01_V0_040270.png',
//             '/assets/img/houses/01/01_V0_Ф10000.png',
//             '/assets/img/houses/01/01_V0_Ф20090.png',
//             '/assets/img/houses/01/01_V0_Ф30180.png',
//             '/assets/img/houses/01/01_V0_Ф40270.png'
//         ]
//   
// }

import slider from "./slider.js"

class WarmestCard {
    constructor(object) {
        this.id = `product-${object.id}`
        this.name = object.productName
        this.isFavorite = object.isFavorite
        this.photos = object.photos
        this.params = object.params
        this.prices = object.prices
    }
    addCardTo(parentEl) {
        parentEl.appendChild(this.getCard())
        this.addSwiperToCard()
    }

    getCard() {
        let warmestCard = document.createElement('div')
        warmestCard.className = 'warmest-card'
        warmestCard.appendChild(this.getHeader())
        warmestCard.appendChild(this.getPhotoSwiperContainer())
        warmestCard.appendChild(this.getInfo())
        return warmestCard
    }

    // <div class="warmest-info-container">
    //         <div class="prices-container">
    //           <div class="current-price">
    //             <span class="text">5 900 000</span>
    //             <span class="static-text" style="color: var(--warmest-orange);">₽</span>
    //           </div>
    //           <div class="current-price-with-comm">
    //             <span class="text">7 900 000</span>
    //             <span style="color: var(--warmest-orange);">₽</span>
    //           </div>
    //           <div class="old-price" style="display: none;">
    //             <span class="text"></span>
    //             <span class="static-text" style="color: var(--warmest-orange);">₽</span>
    //           </div>
    //           <div class="other-price"></div>
    //         </div>
    //       </div>

    getPrices() {
        let pricesContainer = document.createElement('div');
        pricesContainer.className = 'prices-container';
        let currentPrice = document.createElement('div');
        currentPrice.className = 'current-price value';
        this.getSpanListsOfData([
            {'text': this.prices.current, 'class': 'text', 'style': ''},
            {'text': '₽', 'class': '', 'style': 'color: var(--warmest-orange);'}
        ]).forEach((el) => { currentPrice.appendChild(el) })

        let currentPriceWithComm = document.createElement('div');
        currentPriceWithComm.className = 'current-price-with-comm value';

        this.getSpanListsOfData([
            {'text': this.prices.currentWithComm, 'class': 'text', 'style': ''},
            {'text': '₽', 'class': '', 'style': 'color: var(--warmest-orange);'}
        ]).forEach((el) => { currentPriceWithComm.appendChild(el)})

        let otherPrice = document.createElement('div');
        otherPrice.className = 'other-price';

        this.getSpanListsOfData([
            {'text': this.prices.other, 'class': 'text', 'style': 'font-size: var(--warmest-small-font-size); font-weight: 300;'}
        ]).forEach((el) => {otherPrice.appendChild(el)})
        pricesContainer.appendChild(currentPrice)
        pricesContainer.appendChild(currentPriceWithComm)
        pricesContainer.appendChild(otherPrice)
        return pricesContainer
    }

    getSpanListsOfData(data) {
        let nodes = []
        for (let object of data) {
            let node = document.createElement('span')
            node.innerText = object.text
            node.className = object.class
            node.style = object.style
            nodes.push(node)
        }
        return nodes
    }

    getOption(icoUrl, data) {
        let optionConatiner = document.createElement('div');
        optionConatiner.className = 'option-container';
        let icoContainer = document.createElement('div');
        icoContainer.className = 'ico';
        let objectTag = document.createElement('object')
        objectTag.type = 'image/svg+xml'
        objectTag.data = icoUrl
        icoContainer.appendChild(objectTag)
        let valueContainer = document.createElement('div')
        valueContainer.className = 'value'
        for (let node of this.getSpanListsOfData(data)) {
            valueContainer.appendChild(node)
        }
        optionConatiner.appendChild(icoContainer)
        optionConatiner.appendChild(valueContainer)
        return optionConatiner
    }

    getParamsContainer() {
        let paramsContainer = document.createElement('div')
        paramsContainer.className = 'params-container'
        if (this.params.size) {
            paramsContainer.appendChild(
                this.getOption('/assets/svg/size.svg', [
                    {'text': this.params.size, 'class': 'text', 'style': ''},
                    {'text': 'м²', 'class': '', 'style': 'color: var(--warmest-orange);'}
                ]
            ))
        }
        if (this.params.floors) {
            paramsContainer.appendChild(
                this.getOption('/assets/svg/floors.svg', [
                    {'text': this.params.floors, 'class': 'text', 'style': ''},
                    {'text': (this.params.floors == 1) ? 'Этаж' : 'Этажей', 'class': '', 'style': 'color: var(--warmest-orange);'}
                ]
            )
        )}
        if (this.params.rooms) {
            paramsContainer.appendChild(
                this.getOption('/assets/svg/rooms.svg', [
                    {'text': this.params.rooms, 'class': 'text', 'style': ''},
                    {'text': (this.params.rooms == 1) ? 'Комната' : 'Комнаты', 'class': '', 'style': 'color: var(--warmest-orange);'}
                ]
            ))
        }
        if (this.params.square) {
            paramsContainer.appendChild(
                this.getOption('/assets/svg/square.svg', [
                    {'text': this.params.square[0], 'class': 'text', 'style': ''},
                    {'text': 'x', 'class': '', 'style': ''},
                    {'text': this.params.square[1], 'class': 'text', 'style': ''}
                ]
            ))
        }
        return paramsContainer
    }

    getInfo() {
        let warmestInfoContainer = document.createElement('div')
        warmestInfoContainer.className = 'warmest-info-container';
        warmestInfoContainer.appendChild(this.getParamsContainer())
        warmestInfoContainer.appendChild(this.getPrices())
        return warmestInfoContainer
    }

    getPhotoSwiperContainer() {
        let warmestCardPhotoBody = document.createElement('div')
        warmestCardPhotoBody.className = 'warmest-card-photo-body'
        warmestCardPhotoBody.style.overflow = 'hidden';
        warmestCardPhotoBody.style.color = '#fff';
        let photoSwiper = document.createElement('div')
        photoSwiper.className = 'swiper photoSwiper'
        photoSwiper.id = this.id
        let swiperWrapper = document.createElement('div')
        swiperWrapper.className = 'swiper-wrapper'
        let swiperPagination = document.createElement('div')
        swiperPagination.className = 'swiper-pagination'
        swiperPagination.style.bottom = 'auto'
        let swiperButtonPrev = document.createElement('div')
        swiperButtonPrev.className = 'swiper-button-prev swiper-button'
        let swiperButtonNext = document.createElement('div')
        swiperButtonNext.className = 'swiper-button-next swiper-button'
        photoSwiper.appendChild(swiperWrapper)
        photoSwiper.appendChild(swiperPagination)
        photoSwiper.appendChild(swiperButtonPrev)
        photoSwiper.appendChild(swiperButtonNext)
        warmestCardPhotoBody.appendChild(photoSwiper)
        return warmestCardPhotoBody
    }

    addSwiperToCard() {
        const swiper = new slider.Slider(`#${this.id}`, {
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
        for (let item of this.photos) {
            swiper.addImgSlide(item)
        }
    }

    createLikes() {
        let solidLike = document.createElement('i')
        let regularLike = document.createElement('i')
        solidLike.style.color = '#ff8a00'
        regularLike.style.color = '#ff8a00'
        solidLike.className = 'fa-heart fa-solid fa-lg'
        regularLike.className = 'fa-heart fa-regular fa-lg'
        return [solidLike, regularLike]
    }

    updateLike(likeContainer) {
        let solidLike = likeContainer.querySelector('i.fa-solid')
        let regularLike = likeContainer.querySelector('i.fa-regular')
        if (this.isFavorite) {
            solidLike.style.display = 'block'
            regularLike.style.display = 'none'
        } else {
            solidLike.style.display = 'none'
            regularLike.style.display = 'block'
        }
    }

    getLikeContainer() {
        let likeContainer = document.createElement('div');
        likeContainer.className = 'like-container';
        let likes = this.createLikes();
        likeContainer.appendChild(likes[0])
        likeContainer.appendChild(likes[1])
        this.updateLike(likeContainer)
        likeContainer.addEventListener('click', () => {
            this.isFavorite = !this.isFavorite
            this.updateLike(likeContainer)
        })
        return likeContainer
    }

    getHeader() {
        let warmestHeader = document.createElement('div')
        warmestHeader.className = 'warmest-card-header'
        let productName = document.createElement('div')
        productName.className = 'product-name'
        productName.innerHTML = this.name
        warmestHeader.appendChild(productName)
        warmestHeader.appendChild(this.getLikeContainer())
        return warmestHeader
    }
}

export default { WarmestCard }