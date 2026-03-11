<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DICT Programs | Digital Client Satisfaction System</title>

<style>
:root {
    --primary: #0038A8;
    --secondary: #a80000;
    --accent: #FFD700;
    --light-bg: #f4f6f9;
    --text-dark: #1f2937;
    --text-light: #6b7280;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Segoe UI", Roboto, Arial, sans-serif;
    background-color: var(--light-bg);
    color: var(--text-dark);
}

/* HEADER */
.header {
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    color: white;
    padding: 40px 20px;
    text-align: center;
}

.header h1 {
    font-size: 32px;
    font-weight: 600;
    letter-spacing: 1px;
}

.header p {
    margin-top: 8px;
    font-size: 15px;
    opacity: 0.9;
}

/* MAIN CONTAINER */
.container {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
}

/* SECTION TITLE */
.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 30px;
    font-weight: 600;
    color: var(--primary);
}

.section-title p {
    margin-top: 10px;
    font-size: 16px;
    color: var(--text-light);
}

/* PROGRAM GRID */
.program-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

/* PROGRAM CARD */
.program-card {
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 8px 24px rgba(0,0,0,0.04);
    transition: all 0.3s ease;
    position: relative;
}

.program-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(180deg, var(--primary), var(--secondary));
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}

.program-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}

.program-card h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: var(--primary);
}

.program-card p {
    font-size: 15px;
    line-height: 1.7;
    color: var(--text-light);
}

/* FOOTER */
footer {
    background-color: #00265b;
    color: #d1d5db;
    text-align: center;
    padding: 25px 20px;
    margin-top: 70px;
    font-size: 14px;
    letter-spacing: 0.5px;
}

footer span {
    color: var(--accent);
}
</style>
</head>

<body>

<header class="header">
    <h1>DICT Programs</h1>
    <p>Department of Information and Communications Technology<br>
    Republic of the Philippines</p>
</header>

<div class="container">

    <div class="section-title">
        <h2>Programs and Initiatives</h2>
        <p>Advancing digital transformation, connectivity, cybersecurity, and innovation nationwide.</p>
    </div>

    <div class="program-grid">

        <div class="program-card">
            <h3>Free Public Wi-Fi Program</h3>
            <p>Provides accessible and reliable internet connectivity in public spaces including schools, hospitals, transport hubs, and government offices across the country.</p>
        </div>

        <div class="program-card">
            <h3>Digital Literacy and ICT Training</h3>
            <p>Equips citizens, educators, and public servants with essential digital skills to thrive in the modern digital economy.</p>
        </div>

        <div class="program-card">
            <h3>Tech4ED Centers</h3>
            <p>Community-based ICT hubs offering technology access, training programs, and e-government services to underserved and rural communities.</p>
        </div>

        <div class="program-card">
            <h3>National Broadband Plan</h3>
            <p>Strengthens national broadband infrastructure to ensure faster, affordable, and more inclusive internet connectivity.</p>
        </div>

        <div class="program-card">
            <h3>eGovernment Development</h3>
            <p>Digitizes government services to improve efficiency, transparency, and public access to essential services.</p>
        </div>

        <div class="program-card">
            <h3>National Cybersecurity Program</h3>
            <p>Enhances cybersecurity awareness, preparedness, and response mechanisms to protect national digital infrastructure.</p>
        </div>

        <div class="program-card">
            <h3>Startup and Innovation Ecosystem Support</h3>
            <p>Promotes Filipino innovation through startup support programs, incubation, partnerships, and policy development.</p>
        </div>

        <div class="program-card">
            <h3>ICT Industry Development</h3>
            <p>Strengthens the Philippine ICT sector through strategic policies, capacity building, and global competitiveness initiatives.</p>
        </div>

    </div>

</div>

<footer>
    © 2026 <span>Department of Information and Communications Technology</span><br>
    All Rights Reserved | Republic of the Philippines
</footer>

</body>
</html>