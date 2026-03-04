document.getElementById("regForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let user = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let pass = document.getElementById("password").value;
    let conf = document.getElementById("confirm").value;

    let regexEmail = /^[a-zA-Z]{3,}@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
    let regexPass = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$&#]).{7,}$/;

    if (user === "") {
        msg.innerHTML = "All fields are mandatory";
        return;
    }

    if (!/^\d{10}$/.test(phone)) {
        msg.innerHTML = "Phone must be 10 digits";
        return;
    }

    if (!regexEmail.test(email)) {
        msg.innerHTML = "Invalid Email Format";
        return;
    }

    if (!regexPass.test(pass)) {
        msg.innerHTML = "Password must contain 7 letters, and atleast one capital letter, digit & special char";
        return;
    }

    if (pass !== conf) {
        msg.innerHTML = "Passwords do not match";
        return;
    }

    msg.style.color = "green";
    msg.innerHTML = "Registration Successful";
});