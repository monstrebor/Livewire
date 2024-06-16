const dependentsSection = document.getElementById('dependentsSection');

function createDependentComponent(index, onDeleteCallback) {
    const container = document.createElement('div');
    container.className = 'dependent-component';

    const nameInput = document.createElement('input');
    nameInput.type = 'text';
    nameInput.placeholder = 'Dependent\'s Name';
    nameInput.name = 'Dependent_name[]';
    container.appendChild(nameInput);

    const birthdateInput = document.createElement('input');
    birthdateInput.type = 'date';
    birthdateInput.placeholder = 'Birthdate';
    birthdateInput.name = 'Dependent_dob[]';
    container.appendChild(birthdateInput);

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
        addDependent(dependentsContainer, dependentsList)
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
const employmentOptions = document.getElementsByName('employment-status');
const educationalAttainmentOptions = document.getElementsByName('educational-attaiment');
const employerName = document.getElementById('employerName');
const employerAddress = document.getElementById('employerAddress');
const monthlyIncome = document.getElementById('monthlyIncome');
const annualIncome = document.getElementById('annualIncome');

const houseOwnershipOptions = document.getElementsByName('house-ownership');
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



form.addEventListener('submit', (e) => {
    e.preventDefault();

    validateForm();
});

function setError(element, message) {
    const inputGroup = element.parentElement;
    const errorMessage = inputGroup.querySelector('#errorMessage');

    errorMessage.innerText = message;
    inputGroup.classList.add('error');
    inputGroup.classList.remove('success');
}

function setSuccess(element) {
    const inputGroup = element.parentElement;
    const errorMessage = inputGroup.querySelector('#errorMessage');

    errorMessage.innerText = '';
    inputGroup.classList.add('success');
    inputGroup.classList.remove('error')
}

function validateForm() {
    
    const firstNameValue = firstName.value.trim();
    const middleNameValue = middleName.value.trim();
    const lastNameValue = lastName.value.trim();
    const religionValue = religion.value.trim();
    const pobValue = pob.value.trim();
    const dobValue = dob.value.trim();
    const contactNumberValue = contactNumber.value.trim();
    const fbValue = fb.value.trim();
    const emailValue = email.value.trim();
    const selectedBrgy = brgyDropdown.value;
    const streetValue = street.value.trim();
    const employerNameValue = employerName.value.trim();
    const employerAddressValue = employerAddress.value.trim();
    const monthlyIncomeValue = monthlyIncome.value.trim();
    const annualIncomeValue = annualIncome.value.trim();
    const citizenshipValue = citizenship.value.trim();
    const numberOfChildrenValue = numberOfChildren.value;
    const civilStatusValue = civilStatus.value;
    

    // validate first name
    if(firstNameValue === '') {
        setError(firstName, 'First name is required.');
    } else if(firstNameValue.length > 0 && firstNameValue.length > 50) {
        setError(firstName, 'Input must be 50 characters or fewer.');
    } else {
        setSuccess(firstName);
    }

    // validate middle name
    if(middleNameValue.length > 0 && middleNameValue.length > 50) {
        setError(middleName, 'Input must be 50 characters or fewer.')
    } else {
        setSuccess(middleName)
    }

    // validate last name
    if(lastNameValue === '') {
        setError(lastName, 'Last name is required.');
    } else if(lastNameValue.length > 0 && lastNameValue.length > 50) {
        setError(lastName, 'Input must be 50 characters or fewer.');
    } else {
        setSuccess(lastName);
    }

    // validate religion
    if(religionValue === '') {
        setError(religion, 'Religion is required.');
    } else {
        setSuccess(religion);
    }

    // validate place of birth
    if(pobValue === '') {
        setError(pob, 'Place of birth is required.');
    } else {
        setSuccess(pob);
    }

    // validate date of birth
    const birthdate = new Date(dobValue);
    const today = new Date();
    const minBirthdate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
    if(dobValue === '') {
        setError(dob, 'Date of birth is required.');
    } else if(birthdate > minBirthdate) {
        setError(dob, 'You must be at least 18 years old to sign up.');
    } else {
        setSuccess(dob);
    }

    // validate contact number
    const phonePattern = /^09\d{9}$/;
    if(contactNumberValue === '') {
        setError(contactNumber, 'Contact number is required.');
    } else if(!phonePattern.test(contactNumberValue)) {
        setError(contactNumber, 'Please enter a valid contact number.')
    } else {
        setSuccess(contactNumber);
    }

    // validate facebook
    if(fbValue === '') {
        setError(fb, 'Facebook account is required.');
    } else {
        setSuccess(fb);
    }

    // validate email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(emailValue === '') {
        setError(email, 'Email is required.');
    } else if(!emailPattern.test(emailValue)) {
        setError(email, 'Invalid email. Please enter a valid email address.');
    } else {
        setSuccess(email);
    }

    // validate gender
    let isSelectedGender = false;
    for(let i = 0; i < genderOptions.length; i++) {
        if(genderOptions[i].checked) {
            isSelectedGender = true;
            break;
        }
    }

    if(!isSelectedGender) {
        setError(genderOptions[0], 'Please select a gender.');
    }

    // validate address
    address.forEach(address => {
        if(address.value) {
            setSuccess(address);
        }
    })

    if(selectedBrgy === '') {
        setError(brgyDropdown, 'Please select your barangay.')
    } else {
        setSuccess(brgyDropdown);
    }

    if(streetValue === '') {
        setError(street, 'Please enter your house number and street.')
    } else {
        setSuccess(street);
    }


    // validate ID


    // validate occupation
    const occupationErrorMessage = document.getElementById('occupationErrorMessage');
    let isSelectedOccupation = false;

    for(let i = 0; i < occupationOptions.length; i++) {
        if(occupationOptions[i].checked) {
            isSelectedOccupation = true;
            break;
        }
    }

    if(!isSelectedOccupation) {
        occupationErrorMessage.innerText = 'Please select an occupation.';
        occupationErrorMessage.classList.add('error');
        occupationErrorMessage.classList.remove('success');
    } else {
        occupationErrorMessage.classList.add('success');
        occupationErrorMessage.classList.remove('error');
    }

    // validate employment status
    const employmentErrorMessage = document.getElementById('employmentErrorMessage');
    let isSelectedEmployment = false;

    for(let i = 0; i < employmentOptions.length; i++) {
        if(employmentOptions[i].checked) {
            isSelectedEmployment = true;
            break;
        }
    }

    if(!isSelectedEmployment) {
        employmentErrorMessage.innerText = 'Please select an employment status.';
        employmentErrorMessage.classList.add('error');
        employmentErrorMessage.classList.remove('success');
    } else {
        employmentErrorMessage.classList.add('success');
        employmentErrorMessage.classList.remove('error');
    }

    // validate educational attainment
    const educationalAttainmentErrorMessage = document.getElementById('educationalAttainmentErrorMessage');
    let isSelectedEducationalAttainment = false;

    for(let i = 0; i < educationalAttainmentOptions.length; i++) {
        if(educationalAttainmentOptions[i].checked) {
            isSelectedEducationalAttainment = true;
            break;
        }
    }

    if(!isSelectedEducationalAttainment) {
        educationalAttainmentErrorMessage.innerText = 'Please select an Educational Attainment.';
        educationalAttainmentErrorMessage.classList.add('error');
        educationalAttainmentErrorMessage.classList.remove('success');
    } else {
        educationalAttainmentErrorMessage.classList.add('success');
        educationalAttainmentErrorMessage.classList.remove('error');
    }

    // validate employer
    if(employerNameValue === '') {
        setError(employerName, "Employer's name is required.");
    } else {
        setSuccess(employerName);
    }

    if(employerAddressValue === '') {
        setError(employerAddress, 'Please enter your employer\'s address');
    } else {
        setSuccess(employerAddress);
    }

    // validate income
    if(monthlyIncomeValue === '') {
        setError(monthlyIncome, 'Monthly income is required.');
    } else {
        setSuccess(monthlyIncome);
    }

    if(annualIncomeValue === '') {
        setError(annualIncome, 'Annual income is required.');
    } else {
        setSuccess(annualIncome);
    }

    // validate house ownership
    const houseOwnershipErrorMessage = document.getElementById('houseOwnershipErrorMessage');
    let isSelectedHouseOwnership = false;

    for(let i = 0; i < houseOwnershipOptions.length; i++) {
        if(houseOwnershipOptions[i].checked) {
            isSelectedHouseOwnership = true;
            break;
        }
    }

    if(!isSelectedHouseOwnership) {
        houseOwnershipErrorMessage.innerText = 'Please select a house ownership.';
        houseOwnershipErrorMessage.classList.add('error');
        houseOwnershipErrorMessage.classList.remove('success');
    } else {
        houseOwnershipErrorMessage.classList.add('success');
        houseOwnershipErrorMessage.classList.remove('error');
    }

    // validate citizenship | marriage
    if(citizenshipValue === '') {
        setError(citizenship, 'Citizenship is required.');
    } else {
        setSuccess(citizenship);
    };

    if(numberOfChildrenValue === '') {
        setError(numberOfChildren, 'Number of children is required.');
    } else if (!isNaN(numberOfChildrenValue)) {
        setError(numberOfChildren, 'Please enter a valid number of children');
    } else {
        setSuccess(numberOfChildren);
    }

    if(civilStatusValue === '') {
        setError(civilStatus, 'Please select your civil status');
    } else {
        setSuccess(civilStatus);
    }

    let married = false

    function isMarried(civilStatusValue) {
        civilStatusValue === 'Married' ? married = true : married = false;

        return married;
    }

    if(isMarried(civilStatusValue) && marriagePlace.value.trim() === '') {
        setError(marriagePlace, 'Place of Marriage is required.')
    } else {
        setSuccess(marriagePlace)
    }

    if(isMarried(civilStatusValue) && marriageDate.value === '') {
        setError(marriageDate, 'Date of marriage is required.');
    } else {
        setSuccess(marriageDate);
    }

    if(isMarried(civilStatusValue) && spouseName.value.trime() === '') {
        setError(spouseName, 'Spouse\'s name is required.')
    } else {
        setSuccess(spouseName);
    }

    if(isMarried(civilStatusValue) && spousePOB.value.trime() === '') {
        setError(spousePOB, 'Spouse\'s place of birth is required.')
    } else {
        setSuccess(spousePOB);
    }
    
    if(isMarried(civilStatusValue) && spouseDOB.value.trime() === '') {
        setError(spouseDOB, 'Spouse\'s date of birth is required.')
    } else {
        setSuccess(spouseDOB);
    }

    if(isMarried(civilStatusValue) && spouseEducationalAttainment.value.trime() === '') {
        setError(spouseEducationalAttainment, 'Spouse\'s educxational attainment is required.')
    } else {
        setSuccess(spouseEducationalAttainment);
    }

    if(isMarried(civilStatusValue) && spouseOccupation.value.trime() === '') {
        setError(spouseOccupation, 'Spouse\'s occupation is required.')
    } else {
        setSuccess(spouseOccupation);
    }

    // validate id
    if(idType1.value === '') {
        setError(idType1, 'Please select a type of valid ID');
    } else {
        setSuccess(idType1);
    }

    if(idNumber1.value === '') {
        setError(idNumber1, 'Please enter your id number');
    } else {
        setSuccess(idNumber1);
    }

    if(!idImage1.files.length) {
        setError(idImage1, 'Please upload an id image.')
    }



    if(idType2.value === '') {
        setError(idType2, 'Please select a type of valid ID');
    } else {
        setSuccess(idType2);
    }

    if(idNumber2.value === '') {
        setError(idNumber2, 'Please enter your id number');
    } else {
        setSuccess(idNumber2);
    }

    if(!idImage2.files.length) {
        setError(idImage2, 'Please upload an id image.')
    }


    

}