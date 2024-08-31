
const ham = document.querySelectorAll(".navDisplay");
const nodeList = document.querySelectorAll(".example");
// for (let i = 0; i < nodeList.length; i++) {
//   nodeList[i].style.backgroundColor = "red";
// }
let nav = document.querySelector(".navbar");
let flag = true;
function show_hide() {
    nav.style.flexDirection = "column";
    nav.style.justifyContent = "center";
    if (flag === true) {
        for (let i = 0; i < ham.length; i++) {
            ham[i].style.display = "block";
        }
        flag = false;
    } else {
        for (let i = 0; i < ham.length; i++) {
            ham[i].style.display = "none";
        }
        flag = true;
    }


}


function isValidEmail(email) {
    // Regular expression for email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Example usage:
function check(email){
    if (isValidEmail(email)) {
        console.log("Valid email address");
    } else {
        console.log("Invalid email address");
    }
}




