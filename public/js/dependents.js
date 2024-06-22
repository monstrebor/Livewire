const dependentsSection = document.getElementById('dependentsSection');

function createDependentComponent(index, onDeleteCallback) {
    const container = document.createElement('div');
    container.className = 'dependent-component';

    const nameContainer = document.createElement('div');
    nameContainer.className = 'input-group';
    const nameInput = document.createElement('input');
    const nameError = document.createElement('p');
    nameError.className = 'name-error';
    nameInput.type = 'text';
    nameInput.placeholder = 'Dependent\'s Name';
    nameInput.name = 'Dependent_name[]';
    nameContainer.appendChild(nameInput);
    nameContainer.appendChild(nameError);
    container.appendChild(nameContainer);

    const birthdateContainer = document.createElement('div');
    birthdateContainer.className = 'input-group';
    const birthdateInput = document.createElement('input');
    const birthdateError = document.createElement('p');
    birthdateError.className = 'birthdate-error';
    birthdateInput.type = 'date';
    birthdateInput.placeholder = 'Birthdate';
    birthdateInput.name = 'Dependent_dob[]';
    birthdateContainer.appendChild(birthdateInput);
    birthdateContainer.appendChild(birthdateError);
    container.appendChild(birthdateContainer);
  

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => onDeleteCallback(index));
    container.appendChild(deleteButton);

    return container;
}

let dependentsCount = 0;
let dependentsList = [];

function addDependent(container, dependentsList) {
    const dependentComponent = createDependentComponent(dependentsCount, removeDependent);
    container.appendChild(dependentComponent);
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

function validateDependentName() {
    let isValid = true;

    dependentsList.filter((dependent) => {
        if (dependent) {
            const nameInput = dependent.querySelector('input[name="Dependent_name[]"]');
            const nameError = dependent.querySelector('.name-error');

            nameError.textContent = '';

            if (!nameInput.value.trim()) {
                isValid = false;

                nameInput.style.borderColor = 'red';
                nameError.textContent = 'Name of dependent is required.';
                nameError.style.color = 'red';
            } else if (nameInput.value.trim()) {
                isValid = true;
                nameInput.style.borderColor = 'green';
                nameError.textContent = '';
            }
        }
    });
    return isValid;
}

function validateDependentDOB() {
    let isValid = true;

    dependentsList.filter((dependent) => {
        if (dependent) {
            const birthdateInput = dependent.querySelector('input[name="Dependent_dob[]"]');
            const birthdateError = dependent.querySelector('.birthdate-error');

            birthdateError.textContent = '';

            if (!birthdateInput.value.trim()) {
                isValid = false;

                birthdateInput.style.borderColor = 'red';
                birthdateError.textContent = 'Name of dependent is required.';
                birthdateError.style.color = 'red';
            } else if (birthdateInput.value.trim()) {
                isValid = true;
                birthdateInput.style.borderColor = 'green';
                birthdateError.textContent = '';
            }
        }
    });
    return isValid;
}

document.addEventListener('DOMContentLoaded', () => {
    const dependentsContainer = document.createElement('div');
    dependentsContainer.id = 'dependents-container';
    dependentsContainer.classList.add('input-group');
    dependentsSection.appendChild(dependentsContainer);

    for (let i = 0; i < 1; i++) {

        addDependent(dependentsContainer, dependentsList);

    }

    const addDependentButton = document.createElement('button');
    addDependentButton.textContent = 'Add Dependent';
    addDependentButton.style.marginTop = '16px';
    addDependentButton.addEventListener('click', (e) => {
        e.preventDefault();
        addDependent(dependentsContainer, dependentsList);
    });
    dependentsSection.appendChild(addDependentButton);
});


const barangays = [
    "Abangan Norte",
    "Abangan Sur",
    "Ibayo",
    "Lambakin",
    "Lias",
    "Loma De Gato",
    "Nagbalon",
    "Patubig",
    "Poblacion I",
    "Poblacion II",
    "Santa Rosa I",
    "Santa Rosa II",
    "Saog",
    "Tabing-Ilog",
]

const dropdown = document.getElementById("brgyDropdown");

function populateDropdown(barangays) {
    barangays.forEach(barangay => {
        const option = document.createElement('option');
        option.value = barangay;
        option.textContent = barangay;
        dropdown.appendChild(option);
    });
};

populateDropdown(barangays);


// form validation

const form = document.getElementById('form');

const firstName = document.getElementById('firstName');
const middleName = document.getElementById('middleName');
const lastName = document.getElementById('lastName');
const religion = document.getElementById('religion');
const pob = document.getElementById('POB');
const dob = document.getElementById('DOB');
const contactNumber = document.getElementById('contactNumber');
const fb = document.getElementById('facebookAccount');
const email = document.getElementById('email');
const genderOptions = document.getElementsByName('gender');

const address = document.querySelectorAll('select[address="true"]');
const brgyDropdown = document.getElementById('brgyDropdown');
const street = document.getElementById('street');

const idType1 = document.getElementById('idType1');
const idNumber1 = document.getElementById('idNumber1');
const idImage1 = document.getElementById('idImage1');

const idType2 = document.getElementById('idType2');
const idNumber2 = document.getElementById('idNumber2');
const idImage2 = document.getElementById('idImage2');

const occupationOptions = document.getElementsByName('occupation');
const employmentOptions = document.getElementsByName('employmentStatus');
const educationalAttainmentOptions = document.getElementsByName('educationalAttainment');
const employerName = document.getElementById('employerName');
const employerAddress = document.getElementById('employerAddress');
const monthlyIncome = document.getElementById('monthlyIncome');
const annualIncome = document.getElementById('annualIncome');

const houseOwnershipOptions = document.getElementsByName('houseOwnership');
const lengthOfStay = document.getElementById('lengthOfStay');
const citizenship = document.getElementById('citizenship');
const numberOfChildren = document.getElementById('numberOfchildren');
const civilStatus = document.getElementById('civilStatus');
const marriagePlace = document.getElementById('marriagePlace');
const marriageDate = document.getElementById('marriageDate');
const spouseName = document.getElementById('spouseName');
const spousePOB = document.getElementById('spousePOB');
const spouseDOB = document.getElementById('spouseDOB');
const spouseEducationalAttainment = document.getElementById('spouseEducationalAttainment');
const spouseOccupation = document.getElementById('spouseOccupation');



// form.addEventListener('submit', (e) => {
//     e.preventDefault();

//     validateForm();
// });

function setError(element, message) {
    const inputGroup = element.parentElement;
    const errorMessage = inputGroup.querySelector('.error-message');

    errorMessage.innerText = message;
    inputGroup.classList.add('error');
    inputGroup.classList.remove('success');
}

function setSuccess(element) {
    const inputGroup = element.parentElement;
    const errorMessage = inputGroup.querySelector('.error-message');

    errorMessage.innerText = '';
    inputGroup.classList.add('success');
    inputGroup.classList.remove('error')
}

// function validateForm() {

//     // validate first name
//     if(firstName.value.trim() === '') {
//         setError(firstName, 'First name is required.');
//     } else if(firstName.value.trim().length > 0 && firstName.value.trim().length > 50) {
//         setError(firstName, 'Input must be 50 characters or fewer.');
//     } else {
//         setSuccess(firstName);
//     }

//     // validate middle name
//     if(middleName.value.trim().length > 0 && middleName.value.trim().length > 50) {
//         setError(middleName, 'Input must be 50 characters or fewer.')
//     } else {
//         setSuccess(middleName)
//     }

//     // validate last name
//     if(lastName.value.trim() === '') {
//         setError(lastName, 'Last name is required.');
//     } else if(lastName.value.trim().length > 0 && lastName.value.trim().length > 50) {
//         setError(lastName, 'Input must be 50 characters or fewer.');
//     } else {
//         setSuccess(lastName);
//     }

//     // validate religion
//     if(religion.value.trim() === '') {
//         setError(religion, 'Religion is required.');
//     } else {
//         setSuccess(religion);
//     }

//     // validate place of birth
//     if(pob.value.trim() === '') {
//         setError(pob, 'Place of birth is required.');
//     } else {
//         setSuccess(pob);
//     }

//     // validate date of birth
//     const birthdate = new Date(dob.value);
//     const today = new Date();
//     const minBirthdate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
//     if(dob.value === '') {
//         setError(dob, 'Date of birth is required.');
//     } else if(birthdate > minBirthdate) {
//         setError(dob, 'You must be at least 18 years old to sign up.');
//     } else {
//         setSuccess(dob);
//     }

//     // validate contact number
//     const phonePattern = /^09\d{9}$/;
//     if(contactNumber.value.trim() === '') {
//         setError(contactNumber, 'Contact number is required.');
//     } else if(!phonePattern.test(contactNumber.value.trim())) {
//         setError(contactNumber, 'Please enter a valid contact number.')
//     } else {
//         setSuccess(contactNumber);
//     }

//     // validate facebook
//     if(fb.value.trim() === '') {
//         setError(fb, 'Facebook account is required.');
//     } else {
//         setSuccess(fb);
//     }

//     // validate email
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if(email.value.trim() === '') {
//         setError(email, 'Email is required.');
//     } else if(!emailPattern.test(email.value.trim())) {
//         setError(email, 'Invalid email. Please enter a valid email address.');
//     } else {
//         setSuccess(email);
//     }

//     // validate gender
//     const genderErrorMessage = document.getElementById('genderErrorMessage')
//     let isSelectedGender = false;
//     for(let i = 0; i < genderOptions.length; i++) {
//         if(genderOptions[i].checked) {
//             isSelectedGender = true;
//             break;
//         }
//     }

//     if(!isSelectedGender) {
//         genderErrorMessage.innerText = 'Please select your gender.';
//         genderErrorMessage.classList.add('error');
//         genderErrorMessage.classList.remove('success');
//     } else {
//         genderErrorMessage.innerText = '';
//         genderErrorMessage.classList.add('success');
//         genderErrorMessage.classList.remove('error');
//     }

//     // validate address
//     address.forEach(address => {
//         if(address.value) {
//             setSuccess(address);
//         }
//     })

//     if(brgyDropdown.value === '') {
//         setError(brgyDropdown, 'Please select your barangay.')
//     } else {
//         setSuccess(brgyDropdown);
//     }

//     if(street.value.trim() === '') {
//         setError(street, 'Please enter your house number and street.')
//     } else {
//         setSuccess(street);
//     }

//     // validate id
//     if(idType1.value === '') {
//         setError(idType1, 'Please select a type of valid ID');
//     } else {
//         setSuccess(idType1);
//     }

//     if(idNumber1.value === '') {
//         setError(idNumber1, 'Please enter your id number');
//     } else {
//         setSuccess(idNumber1);
//     }

//     if(!idImage1.files.length) {
//         setError(idImage1, 'Please upload an id image.')
//     } else {
//         setSuccess(idImage1);
//     }


//     if(idType2.value === '') {
//         setError(idType2, 'Please select a type of valid ID');
//     } else {
//         setSuccess(idType2);
//     }

//     if(idNumber2.value === '') {
//         setError(idNumber2, 'Please enter your id number');
//     } else {
//         setSuccess(idNumber2);
//     }

//     if(!idImage2.files.length) {
//         setError(idImage2, 'Please upload an id image.')
//     } else {
//         setSuccess(idImage2)
//     }


//     // validate occupation
//     const occupationErrorMessage = document.getElementById('occupationErrorMessage');
//     let isSelectedOccupation = false;

//     for(let i = 0; i < occupationOptions.length; i++) {
//         if(occupationOptions[i].checked) {
//             isSelectedOccupation = true;
//             break;
//         }
//     }

//     if(!isSelectedOccupation) {
//         occupationErrorMessage.innerText = 'Please select an occupation.';
//         occupationErrorMessage.classList.add('error');
//         occupationErrorMessage.classList.remove('success');
//     } else {
//         occupationErrorMessage.innerText = '';
//         occupationErrorMessage.classList.add('success');
//         occupationErrorMessage.classList.remove('error');
//     }

//     // validate employment status
//     const employmentErrorMessage = document.getElementById('employmentErrorMessage');
//     let isSelectedEmployment = false;

//     for(let i = 0; i < employmentOptions.length; i++) {
//         if(employmentOptions[i].checked) {
//             isSelectedEmployment = true;
//             break;
//         }
//     }

//     if(!isSelectedEmployment) {
//         employmentErrorMessage.innerText = 'Please select an employment status.';
//         employmentErrorMessage.classList.add('error');
//         employmentErrorMessage.classList.remove('success');
//     } else {
//         employmentErrorMessage.innerText = '';
//         employmentErrorMessage.classList.add('success');
//         employmentErrorMessage.classList.remove('error');
//     }

//     // validate educational attainment
//     const educationalAttainmentErrorMessage = document.getElementById('educationalAttainmentErrorMessage');
//     let isSelectedEducationalAttainment = false;

//     for(let i = 0; i < educationalAttainmentOptions.length; i++) {
//         if(educationalAttainmentOptions[i].checked) {
//             isSelectedEducationalAttainment = true;
//             break;
//         }
//     }

//     if(!isSelectedEducationalAttainment) {
//         educationalAttainmentErrorMessage.innerText = 'Please select an Educational Attainment.';
//         educationalAttainmentErrorMessage.classList.add('error');
//         educationalAttainmentErrorMessage.classList.remove('success');
//     } else {
//         educationalAttainmentErrorMessage.innerText = '';
//         educationalAttainmentErrorMessage.classList.add('success');
//         educationalAttainmentErrorMessage.classList.remove('error');
//     }

//     // validate employer
//     if(employerName.value.trim() === '') {
//         setError(employerName, "Employer's name is required.");
//     } else {
//         setSuccess(employerName);
//     }

//     if(employerAddress.value.trim() === '') {
//         setError(employerAddress, 'Please enter your employer\'s address');
//     } else {
//         setSuccess(employerAddress);
//     }

//     // validate income
//     if(monthlyIncome.value.trim() === '') {
//         setError(monthlyIncome, 'Monthly income is required.');
//     } else {
//         setSuccess(monthlyIncome);
//     }

//     if(annualIncome.value.trim() === '') {
//         setError(annualIncome, 'Annual income is required.');
//     } else {
//         setSuccess(annualIncome);
//     }

//     // validate house ownership
//     const houseOwnershipErrorMessage = document.getElementById('houseOwnershipErrorMessage');
//     let isSelectedHouseOwnership = false;

//     for(let i = 0; i < houseOwnershipOptions.length; i++) {
//         if(houseOwnershipOptions[i].checked) {
//             isSelectedHouseOwnership = true;
//             break;
//         }
//     }

//     if(!isSelectedHouseOwnership) {
//         houseOwnershipErrorMessage.innerText = 'Please select a house ownership.';
//         houseOwnershipErrorMessage.classList.add('error');
//         houseOwnershipErrorMessage.classList.remove('success');
//     } else {
//         houseOwnershipErrorMessage.innerText = '';
//         houseOwnershipErrorMessage.classList.add('success');
//         houseOwnershipErrorMessage.classList.remove('error');
//     }

//     if(lengthOfStay.value.length <= 0) {
//         setError(lengthOfStay, 'Please enter a length stay');
//     } else {
//         setSuccess(lengthOfStay);
//     }

//     // validate citizenship | marriage
//     if(citizenship.value.trim() === '') {
//         setError(citizenship, 'Citizenship is required.');
//     } else {
//         setSuccess(citizenship);
//     };

//     if(numberOfChildren.value === '') {
//         setError(numberOfChildren, 'Number of children is required.');
//     } else if (isNaN(numberOfChildren.value)) {
//         setError(numberOfChildren, 'Please enter a valid number of children');
//     } else {
//         setSuccess(numberOfChildren);
//     }

//     if(civilStatus.value === '') {
//         setError(civilStatus, 'Please select your civil status');
//     } else {
//         setSuccess(civilStatus);
//     }

//     // validate dependent
//     validateDependentName();
//     validateDependentDOB();
// }

civilStatus.addEventListener('change', (e) => {
    const civilStatus = document.getElementById('civilStatus').value;
    const marriageInfoSection = document.getElementById('marriageInfoSection');
    if(civilStatus === 'Married') {
        marriageInfoSection.style.display = 'block';
    } else {
        marriageInfoSection.style.display = 'none';
    }
});