class Slider {
    constructor(className, options, data) {
        this.slider = new Swiper(className, options);
        if (data) this.addTextSlides(data);
        this.__setAdaptiveStyles();
        window.addEventListener('resize', this.__setAdaptiveStyles.bind(this));
    }

    __setAdaptiveStyles() {
            if (window.innerWidth > 993) {
                this.slider.navigation.nextEl.style = 'display:block';
                this.slider.navigation.prevEl.style = 'display:block';
            } else {
                this.slider.navigation.nextEl.style = 'display:none';
                this.slider.navigation.prevEl.style = 'display:none';
            }
    }

    addTextSlides(data) {
        for (let index in data) {
            let swiperSlider = document.createElement('div');
            swiperSlider.className = 'swiper-slide'
            let div = document.createElement('div');
            div.style.width = '80%';
            let span = document.createElement('span');
            span.style.fontSize = 'var(--warmest-medium-font-size)';
            span.innerText = data[index]
            div.appendChild(span);
            swiperSlider.appendChild(div);
            this.slider.appendSlide(swiperSlider);
        }
    }

    addImgSlide(imgUrl) {
        let swiperSlider = document.createElement('div');
        swiperSlider.className = 'swiper-slide'
        let div = document.createElement('div');
        div.style.width = '80%';
        let img = document.createElement('img');
        img.src = imgUrl
        img.className = 'img-fluid'
        div.appendChild(img);
        swiperSlider.appendChild(div);
        this.slider.appendSlide(swiperSlider);
    }
}

export default { Slider }