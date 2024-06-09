<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adults</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <br><br><br><br><br>
    <header>
      <h1 class="text-center mt-5 font-impact standout-heading" style="text-align: center; font-size:50px; color:darkgreen">Healthy living for Elderly</h1>
    </header>

    <main>
      <div class="row">
        <div class="col-md-6">
          <img src="Images/elder1.jpeg" class="img-fluid rounded" style="width: 500; height:500px;">        
          <br></br>
          <img src="Images/elder3.jpg" class="img-fluid rounded" style="width: 500; height:500px;">
          <br></br>
          <img src="Images/elder4.jpg" class="img-fluid rounded" style="width: 500; height:500px;">
          <br></br>
          <img src="Images/elder.jpg" class="img-fluid rounded" style="width: 500; height:500px;">

        </div>
        <div class="col-md-6">
          <h2 style=" font-size:30px; color:black">Healthy foods are essential for Elderly for several important reasons:</h2>
          <p style="text-align: left;">Nutrient Absorption: As people age, their bodies may become less efficient at absorbing nutrients from food. Eating a nutrient-dense diet ensures that the elderly receive essential vitamins, minerals, and other nutrients necessary for their overall health and well-being.</p>

          <p style="text-align: left;">Bone Health: Adequate intake of calcium and vitamin D becomes increasingly important in later years to maintain bone health and reduce the risk of fractures and osteoporosis.</p>

          <p style="text-align: left;">Muscle Strength and Mobility: Protein-rich foods help preserve muscle mass and strength, supporting mobility and reducing the risk of age-related muscle loss (sarcopenia).</p>

          <p style="text-align: left;">Heart Health: A diet rich in fruits, vegetables, whole grains, and lean proteins supports cardiovascular health, helping to manage blood pressure, cholesterol levels, and reduce the risk of heart diseases.</p>

          <p style="text-align: left;">Digestive Health: A diet high in fiber promotes healthy digestion and regular bowel movements, reducing the risk of constipation, a common issue in the elderly.</p>

          <p style="text-align: left;">Cognitive Function: Certain nutrients, such as omega-3 fatty acids and antioxidants, are beneficial for brain health and may help maintain cognitive function in older adults.</p>

          <p style="text-align: left;">Immune System Support: A well-balanced diet with a variety of nutrients helps support the immune system, making the elderly less susceptible to infections and illnesses.</p>

          <p style="text-align: left;">Weight Management: A balanced diet helps older adults maintain a healthy weight, which is essential for overall health and reducing the risk of obesity-related health problems.</p>

          <p style="text-align: left;">Chronic Disease Prevention: Healthy eating habits can help prevent or manage chronic conditions like diabetes, hypertension, and certain types of cancers, improving the quality of life in later years.</p>

          <p style="text-align: left;">Energy and Vitality: Nutritious foods provide the necessary energy for the elderly to stay active, maintain independence, and engage in daily activities.</p>

          <p style="text-align: left;">Psychological Well-being: A healthy diet may positively impact mental health, reducing the risk of depression and anxiety in older adults.</p>

          <p style="text-align: left;">Longevity: A well-balanced diet is associated with increased longevity and better overall health in the later stages of life.</p>

          <p>Encouraging and supporting the elderly in maintaining a nutritious diet can significantly enhance their overall health, vitality, and quality of life as they age.</p>

          <h2>Breakfast</h2>
          <ul style="font-size: 18px;">
            <li>Milk/banana</li>
            <li>oatmeal</li>
            <li>chiken /rice(brown)</li>
            <li>sandwich/milk</li>
            <li>milk/salmon</li>
            <li>Avacado/milk</li>
          </ul>
          <br>
          <h2>Lunnch</h2>
          <ul style="font-size: 18px;">
            <li>rice/watermelan</li>
            <li>orange juice/pasta</li>
            <li>pasta</li>
            <li>broccoli /carrots</li>
            <li>rice and veggie</li>
            <li>beans/green vigitable</li>
          </ul>
          <br>
          <h2>Dinner</h2>
          <ul style="font-size: 18px;">
            <li>tuna/bread</li>
            <li>crakers/coffe</li>
            <li>Nuts/yogurt</li>
            <li>humburgers/mango</li>
            <li>noodless</li>
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