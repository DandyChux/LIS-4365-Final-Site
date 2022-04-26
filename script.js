function validateForm() {
    let name = document.forms['volunteerForm']['name'].value;
    let email = document.forms['volunteerForm']['email'].value;
    let age = document.forms['volunteerForm']['age'].value;
    if (name == "" || email == "") {
        alert('Field must be filled out');
    }
    if (age < 18) {
        alert('You must be at least 18 years old to volunteer.');
    }
}
