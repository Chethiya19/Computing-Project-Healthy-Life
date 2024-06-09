<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work-Life-Balance</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <br><br><br>
        <header>
            <h1 class="text-center mt-5 font-impact standout-heading" style="text-align: center; font-size:50px; color:darkgreen">Work-Life Balance for the Healthy Life</h1>
        </header>

        <main>
            <div class="row">
                <div class="col-md-6">
                    <img src="Images/work2.jpg" class="img-fluid rounded" alt=""><br><br>
                    <img src="Images/work1.jpg" class="img-fluid rounded" alt=""><br><br>
                    <br></br>

                    <h2 style=" font-size:30px; color:black"> What is an unhealthy work-life balance?</h2>
                    <ul style="font-size: 18px;">
                        <li>On the other hand, an unhealthy work-life balance occurs when work becomes overwhelming and takes precedence over personal life, leading to negative consequences for an individual's well-being. Some signs of an unhealthy work-life balance may include:</li>
                        <li>Constant overwork: Regularly working long hours, including weekends and holidays, without sufficient time for rest, relaxation, or personal activities</li>
                        <li>Neglected personal life: Sacrificing personal relationships, hobbies, and leisure activities due to excessive work demands</li>
                        <li>Burnout: Experiencing physical, mental, and emotional exhaustion due to chronic stress and work-related pressure</li>
                        <li>Lack of self-care: Failing to prioritize self-care activities, such as exercise, adequate sleep, and leisure time resulting in deteriorating physical and mental health</li>
                        <li>Strained relationships: Experiencing difficulties in maintaining healthy relationships with family, friends, and loved ones due to work-related commitments</li>
                    </ul>

                </div>
                <div class="col-md-6">
                    <h2 style=" font-size:30px; color:black">Why we essential balance work and life ?</h2>

                    <p style="text-align: left;">Balancing work and life is essential for several reasons. It's important to achieve a healthy equilibrium between the two to maintain overall well-being and productivity. Here are some key reasons why work-life balance is crucial:</p>

                    <ul style="font-size: 18px;">
                        <li>Physical and Mental Health: Prolonged periods of overworking or neglecting personal life can lead to burnout, stress, and various physical and mental health issues. Maintaining a balance allows you to rest, recharge, and reduce the risk of illnesses related to stress.</li>
                        <li>Productivity and Focus: When you have a balanced lifestyle, you are likely to be more focused and productive during your work hours. A rested mind is better equipped to handle tasks efficiently and creatively.</li>
                        <li>Quality Relationships: Balancing work and life enables you to spend meaningful time with family, friends, and loved ones. Strong social connections contribute to happiness and emotional well-being.</li>
                        <li>Personal Development: Pursuing hobbies, interests, and personal goals outside of work allows for personal growth and a sense of fulfillment beyond professional achievements.</li>
                        <li>Reduced Conflicts: Neglecting personal life for work can lead to conflicts in relationships and dissatisfaction. Striking a balance helps in avoiding unnecessary tensions between work and home life.</li>
                        <li>Long-term Sustainability: Overworking without considering personal life can lead to a short-term boost in productivity, but it is not sustainable in the long run. A balanced approach promotes longevity in your career and overall happiness.</li>
                        <li>Enhanced Creativity: Taking breaks and engaging in non-work activities can foster creativity and problem-solving skills by providing a fresh perspective and allowing the mind to wander.</li>
                        <li>Workplace Satisfaction: Employees who have a healthy work-life balance are generally more satisfied with their jobs, leading to increased loyalty, better retention rates, and improved performance.</li>
                        <li>Time for Self-Care: Balancing work and life ensures that you have time for self-care, which includes exercise, hobbies, meditation, or any other activities that promote your well-being.</li>
                        <li>Setting a Positive Example: For employers and leaders, promoting work-life balance sets a positive example for their teams and encourages a healthier and more productive work culture.</li>
                        <br><br>

                        <img src="Images/work3.jpg" class="img-fluid rounded" alt=""><br><br>

                    </ul>


                </div>
            </div>
        </main>


    </div>

        <!-- footer end -->
    <?php include 'footer.html' ?>

    <style>
        body {
            background-color: #ffffff;


        }

        @font-face {
            font-family: 'Impact';
            src: url('https://fonts.googleapis.com/css2?family=Impact&display=swap');
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .font-impact {
            font-family: 'Impact', Arial, sans-serif;
        }

        .standout-heading {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            border: 2px solid #333333;
            padding: 10px;
            border-radius: 10px;
        }

        .text-center h1 {
            text-align: center;
            font-size: 30px;
            color: darkgreen;
            font-weight: bold;
        }

        main img {
            border-radius: 5px;
        }

        main h2 {
            font-weight: bold;
            color: #333333;
            margin-top: 20px;
        }

        main p {
            color: black;
            font-size: 20px;

        }

        main ul {
            color: #666666;
        }

        footer {
            color: #999999;
        }

        footer p {
            font-size: 18px;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            main .col-md-6 {
                margin-bottom: 20px;
            }
        }
    </style>
</body>

</html>