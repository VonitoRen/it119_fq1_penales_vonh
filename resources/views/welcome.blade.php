<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="antialiased bg-gray-100">

<header class="bg-gray-900 text-white py-6 text-center">
    <img src="https://plus.unsplash.com/premium_photo-1672234253746-99ac19181f0b?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Banner Image" class="banner-img">
    <h1 class="text-4xl font-semibold">My Portfolio</h1>
</header>

<!-- Banner -->
<div class="bg-gray-800 text-white py-4 text-center">
    <h2 class="text-2xl font-semibold">Welcome to My Portfolio</h2>
    <p class="text-sm">Explore my projects and skills below.</p>
</div>

<!-- Personal Info -->
<section class="mt-12 mb-5">
    <h2 class="text-2xl font-semibold mb-6 text-center">Personal Information</h2>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
        <div class="text-center mb-4">
            <img src="https://i.ibb.co/dgcjJbb/image.png" alt="Your Image" class="rounded-full w-32 h-32 mx-auto mb-4">
        </div>
        <div class="text-center mb-4">
            <p class="text-gray-600 font-semibold">Name: Vonh Renuel L. Peñales</p>
            <p class="text-gray-600 font-semibold">Age: 21</p>
            <p class="text-gray-600 font-semibold">Birthdate: September 14, 2002</p>
            <!-- Add more personal information as needed -->
        </div>
        <p class="text-gray-600 leading-relaxed text-center mb-4">As a programming hobbyist, I'm passionate about exploring new technologies and building innovative projects. With a strong inclination towards teamwork, I thrive in collaborative environments where I can contribute my skills and learn from others.</p>
        <p class="text-gray-600 leading-relaxed text-center mb-4">Moreover, I foster continouos learning and able to adapt with the fast changing technological landscape.</p>
    </div>
</section>
<!-- Projects -->
<main class="container mx-auto py-12">
    <h2 class="text-2xl font-semibold mb-6 text-center">Projects</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Project 1 -->
        <div class="col">
            <div class="card">
                <img src="https://i.ibb.co/f0t2RC2/image.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h3 class="card-title text-xl font-semibold mb-2">Human Resource Management System</h3>
                    <p class="card-text text-gray-600 leading-relaxed">
                        The Human Resource Management System (HRMS) is a comprehensive software solution developed using Visual Basic. It serves as a centralized platform for managing various aspects of human resource functions within an organization. Key features include:
                        <ul class="list-disc pl-5">
                            <li>Accurate time tracking with time in and time out functionalities</li>
                            <li>Efficient management of employee data and profiles</li>
                            <li>Streamlined payroll processing system for payroll generation and management</li>
                            <li>Convenient leave application feature for employees with automated approval workflows</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        <!-- Project 2 -->
        <div class="col">
            <div class="card">
                <img src="https://scontent.fcrk2-2.fna.fbcdn.net/v/t1.15752-9/441259468_1491005901773221_3400632569244213363_n.png?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGJ6S1pC6NDkua3yywuoZRfB7MopJpAlrYHsyikmkCWtuYJ0bRNdkFsHGk5FMD0vr7WNBV5uXPPqSIKAIE-975B&_nc_ohc=XLd8q6XxvAEQ7kNvgGrlOHr&_nc_ht=scontent.fcrk2-2.fna&oh=03_Q7cD1QEMAHkyLaNO3bPIqU5ZkqtCgQn-L0n3MiJ90yEnmUmUJw&oe=666B7A82" class="card-img-top" alt="Project 2">
                <div class="card-body">
                    <h3 class="card-title text-xl font-semibold mb-2">Hospital Queueing Management System</h3>
                    <p class="card-text text-gray-600 leading-relaxed">
                        The Hospital Queueing Management System is a dynamic web-based application developed using PHP, JavaScript, CSS, Bootstrap, and jQuery. It is designed to streamline the queuing process within hospital facilities, ensuring efficient patient flow and management. Key features include:
                        <ul class="list-disc pl-5">
                            <li>Real-time queue updates to monitor patient flow and waiting times</li>
                            <li>Interactive data visualization tools for analyzing queue dynamics and trends</li>
                            <li>Integration with ticket printing systems for seamless queue management</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="https://i.ibb.co/3yqvGj6/image.png" class="card-img-top" alt="Project 2">
                <div class="card-body">
                    <h3 class="card-title text-xl font-semibold mb-2">Pay Parking Payment System</h3>
                    <p class="card-text text-gray-600 leading-relaxed">
                        The Pay Parking Payment System is a versatile software solution developed using PHP, JavaScript, CSS, Bootstrap, and jQuery. It offers an efficient and user-friendly platform for managing parking facilities and processing payments. Key features include:
                        <ul class="list-disc pl-5">
                            <li>Real-time parking status updates for monitoring available parking spaces</li>
                            <li>Secure and convenient payment processing for parking fees</li>
                            <li>Discount and loyalty program integration to enhance customer satisfaction and retention</li>
                            <li>Dynamic data visualization tools for analyzing parking usage and revenue trends</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        <!-- Add more projects as needed -->
    </div>



<!-- Skill Set -->

<section class="mt-12 mb-5">
    <h2 class="text-2xl font-semibold mb-6 text-center">Skill Set</h2>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
        <div class="row justify-content-center">
            <div class="col-auto">
                <i class="fab fa-js-square" style="font-size: 3rem;" title="JavaScript"></i> <!-- JavaScript Icon -->
            </div>
            <div class="col-auto">
                <i class="fab fa-css3-alt" style="font-size: 3rem;" title="CSS"></i> <!-- CSS Icon -->
            </div>
            <div class="col-auto">
                <i class="fab fa-java" style="font-size: 3rem;" title="Java"></i> <!-- Java Icon -->
            </div>
            <div class="col-auto">
                <i class="fab fa-vnv" style="font-size: 3rem;" title="Visual Basic"></i> <!-- Visual Basic Icon -->
            </div>
            <div class="col-auto">
                <i class="fab fa-php" style="font-size: 3rem;" title="PHP"></i> <!-- PHP Icon -->
            </div>
            <div class="col-auto">
                <i class="fab fa-html5" style="font-size: 3rem;" title="HTML"></i> <!-- HTML Icon -->
            </div>
            <div class="col-auto">
                <i class="fab fa-mysql" style="font-size: 3rem;" title="MySQL"></i> <!-- MySQL Icon -->
            </div>
        </div>
    </div>
</section>

<section class="mt-12">
    <h2 class="text-2xl font-semibold mb-6 text-center">Contact</h2>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
        <div class="text-center">
            <!-- Twitter -->
            <a href="https://twitter.com/your_twitter_handle" class="text-blue-400 hover:text-blue-600 mx-4" title="Twitter" target="_blank">
                <i class="fab fa-twitter-square fa-3x"></i>
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/your_linkedin_profile" class="text-blue-400 hover:text-blue-600 mx-4" title="LinkedIn" target="_blank">
                <i class="fab fa-linkedin fa-3x"></i>
            </a>
            <!-- Facebook -->
            <a href="https://www.facebook.com/your_facebook_profile" class="text-blue-400 hover:text-blue-600 mx-4" title="Facebook" target="_blank">
                <i class="fab fa-facebook-square fa-3x"></i>
            </a>
            <!-- Phone -->
            <a href="tel:+1234567890" class="text-blue-400 hover:text-blue-600 mx-4" title="Phone">
                <i class="fas fa-phone-square-alt fa-3x"></i>
            </a>
        </div>
    </div>
</section>
    
</main>

<footer class="bg-gray-900 text-white py-6 text-center">
    <p>&copy; 2024 My Portfolio</p>
</footer>

<!-- Bootstrap JavaScript (optional, if you need Bootstrap JS features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>