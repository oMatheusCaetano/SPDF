function newInvolvedSelection() {
    let id = '_' + Math.random().toString(36).substr(2, 9)
    let outsideDiv =  createOutsideDiv()
    outsideDiv.append(buildFirstInnerDiv)
    outsideDiv.append(buildSecondInnerDiv)
    outsideDiv.append(`<hr />`)
    $('#involved_box').append(outsideDiv);
}

function createOutsideDiv() {
    return $('<div />', {
        class: 'form-group' 
    })
}

function createFirstInnerDiv() {
    return $('<div />', {
        class: 'd-flex mb-2' 
    })
}

function createSecondInnerDiv() {
    return $('<div />', {
        class: 'd-flex' 
    })
}

function createRemoveButton(id) {
    return  `<input class="btn btn-danger btn-sm mr-1" id="${id}" type="button" value="-" onclick="removeUserSelection(this.id)">`
}

function createNameInput() {
    return $('<input />', {
        class: 'form-control',
        name: 'involved_name[]',
        placeholder: 'Informe o nome do envolvido...' 
    })
}

function createCpfInput() {
    return $('<input />', {
        class: 'form-control col-sm-8',
        id: 'cpf',
        name: 'involved_cpf[]',
        placeholder: 'Informe o CPF do envolvido...' 
    }).mask("000.000.000-00")
}

function createInvolvedSelect() {
        return $('<select />', {
        class: 'custom-select',
        name: 'involved_responsability[]'
    })
}

function createHiddenOption() {
    return `<option hidden>Responsabilidade</option>`
}

function createOption(responsability) {
    return `<option value="${responsability}">${responsability}</option>`
}

function buildFirstInnerDiv() {
    let firstInnerDiv = createFirstInnerDiv()
    firstInnerDiv.append(createRemoveButton())
    firstInnerDiv.append(createNameInput())
    return firstInnerDiv
}

function buildSecondInnerDiv() {
    let secondInnerDiv = createSecondInnerDiv()
    secondInnerDiv.append(createCpfInput())
    secondInnerDiv.append(buildInvolvedSelect())
    return secondInnerDiv
}

function buildInvolvedSelect() {
    let involvedSelect = createInvolvedSelect()
    involvedSelect.append(createHiddenOption())
    involvedSelect.append(createOption('Sócio'))
    involvedSelect.append(createOption('Administrador'))
    involvedSelect.append(createOption('Responsável Legal'))
    involvedSelect.append(createOption('Cotista'))
    return involvedSelect
}

function removeUserSelection(id) {
    let element = document.getElementById(id)
    element.parentNode.parentNode.remove()
}
