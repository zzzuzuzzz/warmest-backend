class ModalWindow {
    constructor(object) {
        this.id = `modal-window-${object.id}`
        this.label = this.id + '-label'
        this.productName = object.productName
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

    getModalBody() {
        let modalBody = document.createElement('div')
        modalBody.className = 'modal-body'
        modalBody.innerHTML = '...'
        return modalBody
    }

    getModalDialog() {
        let modalDialog = document.createElement('div');
        modalDialog.className = 'modal-dialog modal-dialog-centered modal-dialog-scrollable';
        modalDialog.style.maxWidth = '90%'
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