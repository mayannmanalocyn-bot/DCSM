<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DICT Client Satisfaction Survey</title>

<style>
:root {
    --primary:#002147;
    --secondary:#0038A8;
    --accent:#FFD700;
    --light:#f4f6f9;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI", Arial, sans-serif;
}

body{
    background:var(--light);
}

/* HEADER */
.header{
    background:linear-gradient(90deg,var(--primary),var(--secondary));
    color:white;
    padding:30px;
    text-align:center;
}

.header h1{
    font-size:24px;
}

/* CONTAINER */
.container{
    max-width:800px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 8px 24px rgba(0,0,0,0.08);
}

/* STEPS */
.step{
    display:none;
}

.step.active{
    display:block;
}

/* INPUTS */
input, select{
    width:100%;
    padding:12px;
    margin:10px 0 20px 0;
    border-radius:6px;
    border:1px solid #ccc;
}

input.error, select.error{
    border-color:red;
}

label{
    font-weight:500;
    color:var(--primary);
}

/* BUTTONS */
.btn-group{
    display:flex;
    justify-content:space-between;
    margin-top:20px;
}

button{
    padding:12px 20px;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-weight:500;
}

.next-btn{
    background:var(--secondary);
    color:white;
}

.prev-btn{
    background:#ccc;
}

.submit-btn{
    background:var(--primary);
    color:white;
}

/* EMOJI SCALE */
.rating{
    display:flex;
    justify-content:space-between;
    margin:15px 0 25px 0;
    flex-wrap:wrap;
}

.rating label{
    text-align:center;
    cursor:pointer;
    flex:1;
    padding:10px;
    border-radius:10px;
    transition:0.3s;
    border:2px solid transparent;
}

.rating label:hover{
    background-color: #f0f0f0;
}

.rating input{
    display:none;
}

.rating span{
    font-size:28px;
    display:block;
    transition:0.3s;
}

.rating input:checked + span{
    transform:scale(1.3);
}

/* Emoji Background Colors */
.rating label:has(input[value="1"]) {
    background-color: #ffcccc;
    border-color: #ff6666;
}

.rating label:has(input[value="2"]) {
    background-color: #ffe6cc;
    border-color: #ffb366;
}

.rating label:has(input[value="3"]) {
    background-color: #ffffcc;
    border-color: #ffcc66;
}

.rating label:has(input[value="4"]) {
    background-color: #ccffcc;
    border-color: #66cc66;
}
.rating label:has(input[value="5"]) {
    background-color: #66ff66;
    border-color: #33cc33;
    box-shadow: 0 0 15px rgba(102, 255, 102, 0.5);
}

/* Confetti Canvas */
#confetti-canvas {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 9999;
}

/* RESPONSIVE */
@media(max-width:600px){
    .rating span{
        font-size:22px;
    }
}
</style>
</head>

<body>

<div class="header">
    <h1>DICT Digital Client Satisfaction Survey</h1>
</div>

<div class="container">

<form>

<!-- STEP 1 -->
<div class="step active">
    <h2>Client Information</h2>

    <label>Name (Optional)</label>
    <input type="text" name="name">

        <label>Age</label>
    <input type="number" name="age" required min="1">


    <label>Region of Residence</label>
    <select name="region" required>
        <option value="">Select Region</option>
        <option>National Capital Region (NCR)</option>
        <option>Cordillera Administrative Region (CAR)</option>
        <option>Region I - Ilocos Region</option>
        <option>Region II - Cagayan Valley</option>
        <option>Region III - Central Luzon</option>
        <option>Region IV-A - CALABARZON</option>
        <option>Region IV-B - MIMAROPA</option>
        <option>Region V - Bicol Region</option>
        <option>Region VI - Western Visayas</option>
        <option>Region VII - Central Visayas</option>
        <option>Region VIII - Eastern Visayas</option>
        <option>Region IX - Zamboanga Peninsula</option>
        <option>Region X - Northern Mindanao</option>
        <option>Region XI - Davao Region</option>
        <option>Region XII - SOCCSKSARGEN</option>
        <option>Region XIII - Caraga</option>
        <option>Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)</option>
    </select>


    <label>Gender</label>
    <select name="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
    </select>

    <label>Client Type</label>
    <select name="client_type" required>
        <option value="">Select Client Type</option>
        <option>Citizen</option>
        <option>Business</option>
        <option>Government</option>
    </select>

    <label>Service Availed</label>
    <select name="service" required>
        <option value="">Select Service</option>
        <option>Free Public Wi-Fi</option>
        <option>Tech4ED</option>
        <option>Cybersecurity Assistance</option>
        <option>Digital Literacy Training</option>
        <option>eGovernment Service</option>
    </select>

    <div class="btn-group">
        <span></span>
        <button type="button" class="next-btn" onclick="nextStep()">Next</button>
    </div>
</div>

<!-- STEP 2 -->
<!-- STEP 2 -->
<div class="step">
    <h2>Survey Instructions</h2>
    <p style="margin-top:15px; line-height:1.7;">
        Please read each statement carefully and select the emoji that best represents your level of agreement.
        Your responses will help improve DICT programs and services.
    </p>

    <!-- CLICKABLE CIRCLE SELECTION -->
    <div class="circle-options">
        <p style="margin-bottom:10px;">Choose the area you want to provide feedback on:</p>
        <div class="circles">
            <div class="circle" data-value="Service Quality">Service Quality</div>
            <div class="circle" data-value="Personnel">Personnel</div>
            <div class="circle" data-value="Facilities">Facilities</div>
            <div class="circle" data-value="Digital Platforms">Digital Platforms</div>
        </div>
    </div>

    <div class="btn-group">
        <button type="button" class="prev-btn" onclick="prevStep()">Back</button>
        <button type="button" class="next-btn" onclick="nextStep()">Next</button>
    </div>
</div>

<!-- STEP 3 -->
<div class="step">
    <h2>Survey Questions</h2>

    <p style="margin-top:15px;">1. The service was delivered efficiently.</p>
    <div class="rating">
        <label><input type="radio" name="q1" value="1"><span>😢</span>Strongly Disagree</label>
        <label><input type="radio" name="q1" value="2"><span>🙁</span>Disagree</label>
        <label><input type="radio" name="q1" value="3"><span>😐</span>Neutral</label>
        <label><input type="radio" name="q1" value="4"><span>🙂</span>Agree</label>
        <label><input type="radio" name="q1" value="5" onchange="checkTopRating(this)"><span>😄</span>Strongly Agree</label>
    </div>

    <p>2. DICT personnel were courteous and helpful.</p>
    <div class="rating">
        <label><input type="radio" name="q2" value="1"><span>😢</span>Strongly Disagree</label>
        <label><input type="radio" name="q2" value="2"><span>🙁</span>Disagree</label>
        <label><input type="radio" name="q2" value="3"><span>😐</span>Neutral</label>
        <label><input type="radio" name="q2" value="4"><span>🙂</span>Agree</label>
        <label><input type="radio" name="q2" value="5" onchange="checkTopRating(this)"><span>😄</span>Strongly Agree</label>
    </div>

    <p>3. I am satisfied with the overall service experience.</p>
    <div class="rating">
        <label><input type="radio" name="q3" value="1"><span>😢</span>Strongly Disagree</label>
        <label><input type="radio" name="q3" value="2"><span>🙁</span>Disagree</label>
        <label><input type="radio" name="q3" value="3"><span>😐</span>Neutral</label>
        <label><input type="radio" name="q3" value="4"><span>🙂</span>Agree</label>
        <label><input type="radio" name="q3" value="5" onchange="checkTopRating(this)"><span>😄</span>Strongly Agree</label>
    </div>

    <div class="btn-group">
        <button type="button" class="prev-btn" onclick="prevStep()">Back</button>
        <button type="submit" class="submit-btn">Submit Survey</button>
    </div>
</div>

</form>

</div>

<script>
let currentStep = 0;
const steps = document.querySelectorAll(".step");

function showStep(index){
    steps.forEach(step => step.classList.remove("active"));
    steps[index].classList.add("active");
}

// Validation for current step
function validateStep() {
    const step = steps[currentStep];
    let valid = true;

    // Reset previous errors
    step.querySelectorAll("input, select").forEach(el => el.classList.remove("error"));

    // Check required fields
    const inputs = step.querySelectorAll("input[required], select[required]");
    for (let input of inputs) {
        if (!input.value) {
            input.classList.add("error");
            valid = false;
        }
    }

    // Check radio buttons for survey step
    const ratings = step.querySelectorAll(".rating");
    ratings.forEach(group => {
        const name = group.querySelector("input").name;
        const checked = step.querySelector(`input[name="${name}"]:checked`);
        if (!checked) valid = false;
    });

    if (!valid) {
        alert("Please complete all required fields before proceeding.");
    }
    return valid;
}

function nextStep(){
    if (validateStep()) {
        if(currentStep < steps.length - 1){
            currentStep++;
            showStep(currentStep);
        }
    }
}

function prevStep(){
    if(currentStep > 0){
        currentStep--;
        showStep(currentStep);
    }
}

// Form submission validation
document.querySelector("form").addEventListener("submit", function(e){
    if (!validateStep()) {
        e.preventDefault(); // Stop submission
    } else {
        // Check if user selected top rating (5) on any question
        const topRating = document.querySelector('input[name="q3"]:checked');
        if (topRating && topRating.value === "5") {
            launchConfetti();
        }
        alert("Thank you for completing the survey!");
    }
});

// Confetti animation function
function launchConfetti() {
    const colors = ['#FFD700', '#0038A8', '#002147', '#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4'];
    const confettiCount = 150;
    const container = document.body;
    
    for (let i = 0; i < confettiCount; i++) {
        const confetti = document.createElement('div');
        confetti.style.cssText = `
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: ${colors[Math.floor(Math.random() * colors.length)]};
            left: ${Math.random() * 100}vw;
            top: -10px;
            z-index: 9999;
            pointer-events: none;
            border-radius: ${Math.random() > 0.5 ? '50%' : '0'};
            animation: confetti-fall ${2 + Math.random() * 2}s linear forwards;
        `;
        
        // Add animation keyframes dynamically
        if (!document.getElementById('confetti-styles')) {
            const style = document.createElement('style');
            style.id = 'confetti-styles';
            style.textContent = `
                @keyframes confetti-fall {
                    0% { transform: translateY(0) rotate(0deg); opacity: 1; }
                    100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
                }
            `;
            document.head.appendChild(style);
        }
        
        container.appendChild(confetti);
        
        // Remove confetti after animation
        setTimeout(() => confetti.remove(), 4000);
    }
}

// Check if top rating is selected
function checkTopRating(element) {
    if (element.value === "5") {
        launchConfetti();
    }
}
</script>

</body>
</html>