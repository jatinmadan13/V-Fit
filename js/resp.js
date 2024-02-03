function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}


burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
rightNav = document.querySelector('.rightnav')
navList = document.querySelector('.nav-list')

burger.addEventListener('click', () => {
    rightNav.classList.toggle('v-nav');
    navList.classList.toggle('v-nav');
    navbar.classList.toggle('h-nav');
})


// bmi script
function calculate() {
    var bmi;
    var result = document.getElementById("result");

    var weight = parseInt(document.getElementById("weight").value);
    document.getElementById("weight-val").textContent = weight + " kg";

    var height = parseInt(document.getElementById("height").value);
    document.getElementById("height-val").textContent = height + " cm";

    bmi = (weight / Math.pow((height / 100), 2)).toFixed(1);
    result.textContent = bmi;

    if (bmi < 18.5) {
        category = "Underweight 😒";
        result.style.color = "#ffc44d";
    }
    else if (bmi >= 18.5 && bmi <= 24.9) {
        category = "Normal Weight 😍";
        result.style.color = "#0be881";
    }
    else if (bmi >= 25 && bmi <= 29.9) {
        category = "Overweight 😮";
        result.style.color = "#ff884d";
    }
    else {
        category = "Obese 😱";
        result.style.color = "#ff5e57";
    }
    document.getElementById("category").textContent = category;
}
