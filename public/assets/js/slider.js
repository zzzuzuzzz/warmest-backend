class Slider {
    constructor (sliderElement) {
        this.id = sliderElement.split('#')[1]
        this.element = document.querySelector(sliderElement)
        this.options = this.element.querySelectorAll('.slider-option')
        this.currentTabId = ''
        this.generateIDsForOptions()
        this.generateTabs()
    }

    generateIDsForOptions() {
        // console.log(this.sliderElement)
        let options = this.element.querySelectorAll('.slider-option');
        let count = 0 
        for (let option of options) {
            let id = `${this.id}-option-${count}`
            option.id = id;
            count++
        }
    }

    changeOptionTab(newTab) {
        console.log(newTab, this.currentTabId);
    }

    clickTabHandler = (event) => {
        this.changeOptionTab(event)
    }

    generateTabs() {
        let sliderTabs = document.createElement('div');
        sliderTabs.className = 'slider-tabs';
        if (!(this.options.length < 2)) {
            for (let i = 0; i < this.options.length; i++) {
                let sliderDot = document.createElement('div');
                const id = `${this.sliderId}-option-${i}`
                if (i == 0) {
                    sliderDot.className = 'slider-option-dot dot-active';
                    this.currentTabId = id;
                } else { 
                    sliderDot.className = 'slider-option-dot';
                }
                sliderDot.id = id;
                sliderDot.addEventListener('click', this.clickTabHandler);
                sliderTabs.appendChild(sliderDot);
            }
            this.element.appendChild(sliderTabs);
        }
        this.options[0].className = this.options[0].className + ' active-option';
    }
}

export {Slider};