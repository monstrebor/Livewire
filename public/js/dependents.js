const dependentsSection = document.getElementById('dependentsSection');

function createDependentComponent(index, onDeleteCallback) {
    const container = document.createElement('div');
    container.className = 'dependent-component';
    container.style.display = 'flex';
    container.style.marginBottom = '16px';
    container.style.padding = '8px';
    container.style.borderRadius = '8px';
    container.style.position = 'relative';

    const nameInput = document.createElement('input');
    nameInput.type = 'text';
    nameInput.placeholder = 'Dependent\'s Name';
    nameInput.style.marginRight = '8px';
    nameInput.style.width = '50%'
    container.appendChild(nameInput);

    const birthdateInput = document.createElement('input');
    birthdateInput.type = 'date';
    birthdateInput.placeholder = 'Birthdate';
    birthdateInput.style.marginRight = '8px';
    nameInput.style.width = '50%';
    container.appendChild(birthdateInput);

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.style.position = 'absolute';
    deleteButton.style.right = '8px';
    deleteButton.style.top = '8px';
    deleteButton.style.padding = '8px 12px'
    deleteButton.style.color = 'white';
    deleteButton.style.backgroundColor = 'red';
    deleteButton.addEventListener('click', () => onDeleteCallback(index));
    container.appendChild(deleteButton);

    return container;
}

let dependentsCount = 0;
const dependentsList = [];

function addDependent(container, dependentsList) {
    const dependentComponent = createDependentComponent(dependentsCount, removeDependent);
    dependentsSection.appendChild(dependentComponent);
    dependentsList.push(dependentComponent);
    dependentsCount++;
}

function removeDependent(index) {
    const component = dependentsList[index];
    if (component) {
        component.remove();
        dependentsList[index] = null;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const dependentsContainer = document.createElement('div');
    dependentsContainer.id = 'dependents-container';
    dependentsSection.appendChild(dependentsContainer);


    for (let i = 0; i < 4; i++) {
        addDependent(dependentsContainer, dependentsList);
    }

    const addDependentButton = document.createElement('button');
    addDependentButton.textContent = 'Add Dependent';
    addDependentButton.style.marginTop = '16px';
    addDependentButton.addEventListener('click', () => addDependent(dependentsContainer, dependentsList));
    dependentsSection.appendChild(addDependentButton);
});
