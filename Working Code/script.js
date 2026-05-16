
function validateForm() {
    let name   = document.querySelector("input[name='name']").value.trim();
    let email  = document.querySelector("input[name='email']").value.trim();
    let course = document.querySelector("select[name='course']").value.trim();
    let phone  = document.querySelector("input[name='phone']").value.trim();

    
    if (name.length < 3) {
        alert("Name must be at least 3 characters.");
        return false;
    }
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        alert("Enter a valid email address.");
        return false;
    }
    if (course === "") {
        alert("Please select a course.");
        return false;
    }

    if (phone && !/^\d{10}$/.test(phone)) {
        alert("Phone number must be 10 digits.");
        return false;
    }

    return true; 
}
