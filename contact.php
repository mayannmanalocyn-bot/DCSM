<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact DICT | Digital Client Satisfaction System</title>

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
    max-width: 1000px;
    margin: 60px auto;
    padding: 0 20px;
}

/* CONTACT CARD */
.contact-card {
    background: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.05);
}

.contact-card h2 {
    margin-bottom: 25px;
    color: var(--primary);
}

.contact-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.info-box {
    background: #f9fafb;
    padding: 25px;
    border-radius: 10px;
    border-left: 5px solid var(--secondary);
}

.info-box h3 {
    margin-bottom: 10px;
    font-size: 18px;
    color: var(--primary);
}

.info-box p {
    font-size: 15px;
    color: var(--text-light);
    line-height: 1.7;
}

/* FOOTER */
footer {
    background: var(--primary);
    color: #d1d5db;
    text-align: center;
    padding: 25px;
    font-size: 14px;
    margin-top: 60px;
}

footer span {
    color: var(--accent);
}
</style>
</head>

<body>

<header class="header">
    <h1>Contact Information</h1>
    <p>Department of Information and Communications Technology</p>
</header>

<div class="container">

    <div class="contact-card">
        <h2>Get in Touch with DICT</h2>

        <div class="contact-info">

            <div class="info-box">
                <h3>📍 Office Address</h3>
                <p>
                    DICT Central Office<br>
                    C.P. Garcia Avenue,<br>
                    Diliman, Quezon City 1101<br>
                    Philippines
                </p>
            </div>

            <div class="info-box">
                <h3>📧 Email Address</h3>
                <p>
                    info@dict.gov.ph<br>
                    ictconcerns@dict.gov.ph
                </p>
            </div>

            <div class="info-box">
                <h3>📞 Telephone Numbers</h3>
                <p>
                    Trunkline: (02) 8920-0101<br>
                    Public Assistance: (02) 8920-0102
                </p>
            </div>

            <div class="info-box">
                <h3>🕒 Office Hours</h3>
                <p>
                    Monday to Friday<br>
                    8:00 AM – 5:00 PM<br>
                    (Except Holidays)
                </p>
            </div>

        </div>

    </div>

</div>

<footer>
    © 2026 <span>Department of Information and Communications Technology</span><br>
    Republic of the Philippines
</footer>

</body>
</html>