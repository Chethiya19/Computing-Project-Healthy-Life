<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Younger</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <br><br><br><br><br>
    <header>
      <h1 class="text-center mt-5 font-impact standout-heading" style="text-align: center; font-size:50px; color:darkgreen">Healthy living for Younger and Middle Aged persons</h1>
    </header>

    <main>
      <div class="row">
        <div class="col-md-6">
          <img src="Images/you1.jpg" class="img-fluid rounded" style="width: 500; height:500px;">
          <br></br>
          <img src="Images/you2.jpg" class="img-fluid rounded" style="width: 500; height:500px;">
          <br></br>
          <img src="Images/you3.jpg" class="img-fluid rounded" style="width: 500; height:500px;">
          <br></br>
          <img src="Images/you4.jpg" class="img-fluid rounded" style="width: 500; height:500px;">

        </div>
        <div class="col-md-6">
          <h2 style=" font-size:30px; color:black">Healthy foods are essential for Younger and Middle Aged persons for several important reasons:</h2>
          <p style="text-align: left;">
            Optimal Health and Well-being: Consuming a balanced diet that includes a variety of nutrient-rich foods provides essential vitamins, minerals, and antioxidants. This supports overall health and well-being, ensuring the body functions optimally and reducing the risk of chronic diseases.</p>

          <p style="text-align: left;">Energy and Vitality: Nutritious foods supply the necessary energy to tackle daily activities, maintain productivity, and engage in physical exercise. A well-fueled body enhances stamina and vitality, allowing individuals to enjoy an active lifestyle.</p>

          <p style="text-align: left;">Cardiovascular Health: A diet rich in fruits, vegetables, whole grains, and lean proteins supports heart health. It helps in controlling blood pressure, cholesterol levels, and reducing the risk of heart diseases.</p>

          <p style="text-align: left;">Cognitive Function: Certain nutrients, like omega-3 fatty acids and antioxidants, play a role in maintaining cognitive function. They support brain health, memory, and may reduce the risk of age-related cognitive decline.</p>

          <p style="text-align: left;">Bone Health: Adequate intake of calcium and vitamin D is essential for bone health, especially as people age. A balanced diet with these nutrients helps maintain strong bones and reduces the risk of osteoporosis.</p>

          <p style="text-align: left;">Immune System Support: A well-nourished body strengthens the immune system, making it more effective at fighting off infections and illnesses.</p>

          <p style="text-align: left;">Digestive Health: Fiber-rich foods promote healthy digestion and may reduce the risk of gastrointestinal issues like constipation.</p>

          <p style="text-align: left;">Mental Health: There is growing evidence that nutrition plays a role in mental health. A balanced diet, along with regular physical activity, may positively impact mood and reduce the risk of depression and anxiety.</p>

          <p style="text-align: left;">Longevity: Healthy eating habits contribute to a longer and healthier life. Nutritious foods can improve overall life expectancy and quality of life in later years.</p>

          <p>Encouraging younger and middle-aged individuals to adopt healthy eating habits can lead to numerous benefits for their physical and mental well-being, enabling them to lead more fulfilling and active lives as they age.</p>

          <h2>Breakfast</h2>
          <ul style="font-size: 18px;">
            <li>banana</li>
            <li>oatmeal</li>
            <li>egg/panner sandwich</li>
            <li>chiken /rice(brown)</li>
            <li>chocolate milk/salmon</li>
            <li>Avacado/milk</li>
          </ul>
          <br>
          <h2>Lunnch</h2>
          <ul style="font-size: 18px;">
            <li>rice/watermelan</li>
            <li>chiken/rotis and salad</li>
            <li>pasta</li>
            <li>orange juice</li>
            <li>rice and veggie</li>
            <li>broccoli /carrots</li>
          </ul>
          <br>
          <h2>Dinner</h2>
          <ul style="font-size: 18px;">
            <li>tuna/bread</li>
            <li>crakers/coffe</li>
            <li>Nuts/yogurt</li>
            <li>humburgers/mango</li>
            <li>noodless/chees</li>
            <li>vegitable soup</li>
          </ul>

        </div>
      </div>
      <p style="text-align: left;">1.Eat regular balance meals</p>
      <p style="text-align: left;">2.Eat more fruits and vegitables</p>
      <p style="text-align: left;">3.Have your breakfast everyday</p>
      <P style="text-align: left;">4.Incorporate physicalactivity into your daily life</P>
      <p style="text-align: left;">5.Establish good sleeping routine</p>
      <p style="text-align: left;">6.Stay away from alchol and smoke</p>
    </main>
  </div>

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