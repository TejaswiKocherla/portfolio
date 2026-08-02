<?php
$name = "Kocherla Lurdhu Mariya Tejaswi";
$title = "Computer Science Engineering Student";
$subtitle = "Aspiring Full Stack Developer";
$developer = "Java & Python Developer";
$email = "tejaswikocherla@gmail.com";
$phone = "+91 8019809204";
$location = "Guntur, Andhra Pradesh, India";
$github = "https://github.com/TejaswiKocherla";
$linkedin = "https://www.linkedin.com/in/tejaswi-kocherla-141523350";
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $name; ?> | Portfolio</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>

<nav>

<div class="logo">
<i class="fa-solid fa-code"></i> Tejaswi
</div>

<ul id="menu">

<li><a href="#home">Home</a></li>

<li><a href="#about">About</a></li>

<li><a href="#skills">Skills</a></li>

<li><a href="#softskills">Soft Skills</a></li>

<li><a href="#education">Education</a></li>

<li><a href="#projects">Projects</a></li>

<li><a href="#certificates">Certificates</a></li>

<li><a href="#languages">Languages</a></li>

<li><a href="#contact">Contact</a></li>

</ul>

<div class="menu-icon" onclick="toggleMenu()">
<i class="fas fa-bars"></i>
</div>

</nav>

</header>

<section id="home" class="hero">

<div class="hero-content">

<h1>Hello, I'm</h1>

<h2><?php echo $name; ?></h2>

<h3 class="hero-role">

<?php echo $title; ?> |

<?php echo $subtitle; ?> |

<?php echo $developer; ?>

</h3>

<p>

Passionate about developing modern web applications using Java, Python, HTML, CSS, JavaScript and MySQL.

</p>

<a href="#contact" class="btn">Contact Me</a>

<a href="<?php echo $github; ?>" target="_blank" class="btn btn-outline">

GitHub

</a>

</div>

</section>

<section id="about">

<h2 class="section-title">About Me</h2>

<p class="about-text">

I am an Integrated M.Tech Computer Science Engineering student at VIT-AP University.

I am passionate about Full Stack Development and enjoy building responsive web applications using Java, Python, HTML, CSS, JavaScript and MySQL. I continuously improve my technical skills by working on real-world projects and learning modern technologies.

</p>

</section>


<section id="skills">

<h2 class="section-title">Technical Skills</h2>

<div class="skills-container">

<div class="skill-card">
<i class="fab fa-java"></i>
<h3>Java</h3>
</div>

<div class="skill-card">
<i class="fab fa-python"></i>
<h3>Python</h3>
</div>

<div class="skill-card">
<i class="fab fa-html5"></i>
<h3>HTML</h3>
</div>

<div class="skill-card">
<i class="fab fa-css3-alt"></i>
<h3>CSS</h3>
</div>

<div class="skill-card">
<i class="fab fa-js"></i>
<h3>JavaScript</h3>
</div>

<div class="skill-card">
<i class="fab fa-bootstrap"></i>
<h3>Bootstrap</h3>
</div>

<div class="skill-card">
<i class="fas fa-database"></i>
<h3>MySQL</h3>
</div>

</div>

</section>

<section id="softskills">
<h2 class="section-title">Soft Skills</h2>

<div class="skills-container">

<div class="skill-card"><h3>Communication</h3></div>
<div class="skill-card"><h3>Teamwork</h3></div>
<div class="skill-card"><h3>Problem Solving</h3></div>
<div class="skill-card"><h3>Time Management</h3></div>
<div class="skill-card"><h3>Leadership</h3></div>
<div class="skill-card"><h3>Adaptability</h3></div>

</div>
</section>


<section id="education">

<h2 class="section-title">Education</h2>

<div class="education-container">

<div class="project-card">
<h3>Integrated M.Tech</h3>
<p>VIT-AP University</p>
</div>

<div class="project-card">
<h3>Intermediate</h3>
<p>Sri Chaitanya Junior College</p>
</div>

<div class="project-card">
<h3>School</h3>
<p>Don Bosco High School</p>
</div>

</div>

</section>


<section id="projects">

<h2 class="section-title">Projects</h2>

<div class="project-container">

<div class="project-card">
<i class="fas fa-hard-hat project-icon"></i>
<h3>Smart Helmet for Mining Industry</h3>
<p>
Designed an Arduino-based smart helmet with safety sensors for worker protection in mining environments.
</p>
</div>

<div class="project-card">
<i class="fas fa-credit-card project-icon"></i>
<h3>Credit Card Fraud Detection</h3>
<p>
Developed a requirement engineering model for detecting fraudulent transactions with workflow analysis.
</p>
</div>

<div class="project-card">
<i class="fas fa-tint project-icon"></i>
<h3>Cloud Blood Donor Finder</h3>
<p>
Developed a cloud-based web application connecting blood donors and patients for emergency blood requests.
</p>
</div>

</div>

</section>


<section id="certificates">

<h2 class="section-title">Certificates</h2>

<div class="project-container">

<div class="project-card">

<i class="fas fa-certificate project-icon"></i>

<h3>IBM Agentic AI</h3>

<p>
Successfully completed the IBM Agentic AI certification, gaining knowledge in Artificial Intelligence, AI Agents, Prompt Engineering, Automation Workflows, and Generative AI applications.
</p>

</div>

</div>


</section>

<section id="languages">

<h2 class="section-title">Languages</h2>

<div class="skills-container">

<div class="skill-card">
<h3>Telugu</h3>
<p>Native</p>
</div>

<div class="skill-card">
<h3>English</h3>
<p>Professional</p>
</div>

<div class="skill-card">
<h3>French</h3>
<p>Basic</p>
</div>

</div>

</section>


<section id="contact">

<h2 class="section-title">Contact</h2>

<div class="contact-box">

<p>
<i class="fas fa-location-dot"></i>
<?php echo $location; ?>
</p>

<p>
<i class="fas fa-phone"></i>
<?php echo $phone; ?>
</p>

<p>
<i class="fas fa-envelope"></i>
<?php echo $email; ?>
</p>

<p>
<i class="fab fa-github"></i>
<a href="<?php echo $github; ?>" target="_blank">
GitHub Profile
</a>
</p>

<p>
<i class="fab fa-linkedin"></i>
<a href="<?php echo $linkedin; ?>" target="_blank">
LinkedIn Profile
</a>
</p>

</div>

</section>


<footer>

<p>

© <?php echo date("Y"); ?>

<?php echo $name; ?>

</p>

</footer>

<script src="script.js"></script>

</body>

</html>
