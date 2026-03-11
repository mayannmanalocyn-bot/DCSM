<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About DICT | Digital Client Satisfaction System</title>

<style>
:root {
    --primary: #002147;
    --secondary: #0038A8;
    --accent: #FFD700;
    --light-bg: #f5f7fa;
    --text-dark: #1f2937;
    --text-light: #6b7280;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Segoe UI", Arial, sans-serif;
    background: var(--light-bg);
    color: var(--text-dark);
}

/* HEADER */
.header {
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    color: white;
    padding: 45px 20px;
    text-align: center;
}

.header h1 {
    font-size: 30px;
}

.header p {
    margin-top: 8px;
    font-size: 15px;
}

/* CONTAINER */
.container {
    max-width: 1100px;
    margin: 60px auto;
    padding: 0 20px;
}

/* SECTION */
.section {
    background: #fff;
    padding: 40px;
    margin-bottom: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.05);
}

.section h2 {
    margin-bottom: 15px;
    color: var(--primary);
}

.section p {
    line-height: 1.8;
    color: var(--text-light);
}

/* FOOTER */
footer {
    background: var(--primary);
    color: #d1d5db;
    text-align: center;
    padding: 25px;
    font-size: 14px;
    margin-top: 50px;
}

footer span {
    color: var(--accent);
}
</style>
</head>

<body>

<header class="header">
    <h1>About DICT</h1>
    <p>Department of Information and Communications Technology</p>
</header>

<div class="container">

    <div class="section">
        <h2>Our Mandate</h2>
        <p>
            The Department of Information and Communications Technology (DICT) is the primary policy,
            planning, coordinating, implementing, and administrative entity of the Executive Branch
            responsible for the promotion and development of ICT in the Philippines.
        </p>
    </div>

    <div class="section">
        <h2>Vision</h2>
        <p>
            A digitally empowered nation where every Filipino benefits from inclusive and sustainable
            information and communications technology.
        </p>
    </div>

    <div class="section">
        <h2>Mission</h2>
        <p>
            To lead the country's digital transformation by ensuring reliable, affordable, and secure
            connectivity, strengthening cybersecurity, promoting innovation, and delivering efficient
            digital government services.
        </p>
    </div>

</div>

<footer>
    © 2026 <span>Department of Information and Communications Technology</span><br>
    Republic of the Philippines
</footer>

</body>
</html>