export default class MortgageCalc {
    constructor
        (
            idHouseCostInput,
            idHouseCostValue,
            idInitialPaymentInput,
            idInitialPaymentValue,
            idMortgageTermInput,
            idMortgageTermValue,
            idInterestRate,
            idMonthlyPayment,
            idOverpayment
        ) {
        this.interestRateValue = 8;
        this.houseCostInput = document.getElementById(idHouseCostInput)
        this.houseCostValue = document.getElementById(idHouseCostValue)
        this.initialPaymentInput = document.getElementById(idInitialPaymentInput)
        this.initialPaymentValue = document.getElementById(idInitialPaymentValue)
        this.mortgageTermInput = document.getElementById(idMortgageTermInput)
        this.mortgageTermValue = document.getElementById(idMortgageTermValue)
        this.interestRate = document.getElementById(idInterestRate)
        this.interestRate.innerHTML = this.interestRateValue + "%"
        this.monthlyPayment = document.getElementById(idMonthlyPayment)
        this.overpayment = document.getElementById(idOverpayment)

        this.customAddEventListener(this.houseCostInput, this.houseCostValue)
        this.customAddEventListener(this.initialPaymentInput, this.initialPaymentValue)
        this.customAddEventListener(this.mortgageTermInput, this.mortgageTermValue)
    }

    customAddEventListener(inputElement, valueElement) {
        inputElement.addEventListener('input', (event) => {
            valueElement.value = event.target.value
            let mortgageInfo = this.getMortgageInfo()
            this.monthlyPayment.innerText = isNaN(mortgageInfo.payment) ? 0 : Math.floor(mortgageInfo.payment)
            this.overpayment.innerText = isNaN(mortgageInfo.subpayment) ? 0 : Math.floor(mortgageInfo.subpayment) 
        })
        valueElement.addEventListener('input', (event) => {
            if (isNaN(Number(event.target.value))) {
                valueElement.value = inputElement.value
            }
            if (inputElement.max > Number(event.target.value)) {
                inputElement.value = event.target.value
            } else {
                valueElement.value = inputElement.max;
                inputElement.value = inputElement.max
            }
            let mortgageInfo = this.getMortgageInfo()
            this.monthlyPayment.innerText = isNaN(mortgageInfo.payment) ? 0 : Math.floor(mortgageInfo.payment)
            this.overpayment.innerText = isNaN(mortgageInfo.subpayment) ? 0 : Math.floor(mortgageInfo.subpayment) 
        })
    }

    getMortgageInfo() {
        const credit = parseInt(this.houseCostValue.value)
        const firstContribution = parseInt(this.initialPaymentValue.value)
        const returnPeriod = parseInt(this.mortgageTermValue.value) * 12
        const percent = Number(parseFloat(this.interestRateValue)
            .toFixed(2)) / 100 / 12

        // Рассчитать и присвоить значение элементу "Итого: в месяц".
        const x = Math.pow(1 + percent, returnPeriod)
        const payment = ((credit - firstContribution) * x * percent) / (x - 1)

        // Рассчитать и присвоить значение элементу "Общая выплата".
        const common = (payment * returnPeriod).toFixed(2)

        // Рассчитать и присвоить значение элементу "Переплата".
        const subpayment = common - (credit - firstContribution)

        return {
            payment: payment,
            common: common,
            subpayment: subpayment
        }
    }
}