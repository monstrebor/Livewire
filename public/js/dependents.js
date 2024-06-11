const dependentsSection = document.getElementById('dependentsSection');

        function createDependentComponent(index, onDeleteCallback) {
            const container = document.createElement('div');
            container.className = 'dependent-component';

            const nameInput = document.createElement('input');
            nameInput.type = 'text';
            nameInput.placeholder = 'Dependent\'s Name';
            nameInput.name = 'dependents[]';
            container.appendChild(nameInput);

            const birthdateInput = document.createElement('input');
            birthdateInput.type = 'date';
            birthdateInput.name = 'birthdate[]';
            birthdateInput.placeholder = 'Birthdate';
            container.appendChild(birthdateInput);

            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.addEventListener('click', () => onDeleteCallback(index));
            container.appendChild(deleteButton);

            return container;
        }

        let dependentsCount = 0;
        const dependentsList = [];

        function addDependent(container, dependentsList) {
            const dependentComponent = createDependentComponent(dependentsCount, removeDependent);
            container.appendChild(dependentComponent);
            dependentsList.push(dependentComponent);
            dependentsCount++;

            const nameInput = dependentComponent.querySelector('input[type="text"]');
            if (nameInput) {
                nameInput.focus();
            }
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
            addDependentButton.addEventListener('click', (e) => {
                e.preventDefault();
                addDependent(dependentsContainer, dependentsList)
            });
            dependentsSection.appendChild(addDependentButton);
        });
