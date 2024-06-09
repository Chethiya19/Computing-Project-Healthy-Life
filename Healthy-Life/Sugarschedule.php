<!DOCTYPE html>
<html>
<head>
    <title>Food Scheduling and Sugar Advice</title>
    <link href="Images/logo.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #F8F9FA;
            font-family: Impact, Charcoal, sans-serif;
            color: #333;
        }
        .container {
            padding: 50px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            display: inline-block;
        }
        .btn-primary {
            background-color: #6C757D;
            border-color: #6C757D;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #495057;
            border-color: #495057;
        }
        .advice-container,
        .schedule-container,
        .recipe-container {
            border: 2px solid #333;
            border-radius: 5px;
            padding: 20px;
            margin-top: 50px;
            background-color: #fff;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }
        .sugar-advice,
        .lifestyle-advice,
        .food-schedules,
        .recipe-info {
            display: none;
        }
        .back-btn {
            margin-top: 20px;
        }
        .btn-outline-success{
            align: right;
        }
        .btn-outline-success {
            position: fixed;
            top: 100px;
            right: 20px;
            z-index: 9999;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn-sugar").click(function() {
                $(".food-schedules").hide();
                $(".lifestyle-advice").hide();
                $(".recipe-info").hide();
                $(".sugar-advice").fadeIn(500);
            });

            $(".btn-lifestyle").click(function() {
                $(".food-schedules").hide();
                $(".sugar-advice").hide();
                $(".recipe-info").hide();
                $(".lifestyle-advice").fadeIn(500);
            });

            $(".btn-schedules").click(function() {
                $(".sugar-advice").hide();
                $(".lifestyle-advice").hide();
                $(".recipe-info").hide();
                $(".food-schedules").fadeIn(500);
            });

            $(".btn-recipes").click(function() {
                $(".sugar-advice").hide();
                $(".lifestyle-advice").hide();
                $(".food-schedules").hide();
                $(".recipe-info").fadeIn(500);
            });

            $(".back-btn").click(function() {
                $(".sugar-advice").hide();
                $(".lifestyle-advice").hide();
                $(".food-schedules").hide();
                $(".recipe-info").hide();
                $(".meal-schedule").fadeIn(500);
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Food Scheduling and Sugar Advice</h1>
        <div class="meal-schedule">
            <a href="#" class="btn btn-primary btn-lg btn-sugar">Sugar Advice</a>
            <span style="margin: 0 10px;"></span>
            <a href="#" class="btn btn-primary btn-lg btn-lifestyle">Healthy Lifestyle Tip</a>
            <span style="margin: 0 10px;"></span>
            <a href="#" class="btn btn-primary btn-lg btn-schedules">Food Schedules</a>
            <span style="margin: 0 10px;"></span>
            <a href="#" class="btn btn-primary btn-lg btn-recipes">Recipes</a>
        </div>
        <div class="order-now">
                <span style="margin: 0 150px;"></span>
                <button type="button" class="btn btn-outline-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 
                    11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 
                    12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg> Order Now</button>
        </div>

        <div class="advice-container sugar-advice">
            <h2>Sugar Advice</h2>
            <p>Avoid excessive sugar consumption. Limit your intake of sugary foods and drinks. Choose natural sources of sugar like fruits instead of processed foods. Be mindful of hidden sugars in packaged products. Control portion sizes and avoid sugary drinks. Opt for healthier alternatives like stevia or monk fruit sweeteners.</p>
            <a href="#" class="btn btn-primary btn-lg back-btn">Back</a>
        </div>

        <div class="advice-container lifestyle-advice">
            <h2>Healthy Lifestyle Tip</h2>
            <p>Avoid processed and sugary foods. Include plenty of fruits, vegetables, whole grains, and lean proteins in your diet. Stay hydrated and drink plenty of water. Engage in regular physical activity and get enough sleep. Manage stress levels and avoid excessive alcohol and tobacco consumption.</p>
            <a href="#" class="btn btn-primary btn-lg back-btn">Back</a>
        </div>

        <div class="schedule-container food-schedules">
            <h2>Food Schedules</h2>
            <h3>1200 Calorie Diabetic Diet Plan Chart</h3>
            <p><strong>6:30 AM</strong><br>Methi seeds - 2 tsp (soaked)<br>Water - 1 glass</p>
            <p><strong>8:30 AM</strong><br>Millet Vegetable Cheela/Dosa - 2<br>Green chutney - 1 tsp</p>
            <p><strong>11:00 AM</strong><br>Buttermilk - 1 glass<br>Apple - 1</p>
            <p><strong>1:30 PM</strong><br>Mixed Vegetable Salad - 1 cup<br>Multigrain chapati - 2 OR Chapati - 1 &amp; Brown rice - ½ katori<br>Methi Dal - 1 katori<br>Bhindi sabji - 1 katori</p>
            <p><strong>4:30 PM</strong><br>Lemon green tea without sugar/honey - 1 cup<br>Roasted Chana - 0.25 cup</p>
            <p><strong>7:30 PM</strong><br>Sprouts salad - 1 katori</p>
            <p><strong>8:30 PM</strong><br>Mixed vegetable Daliya - 1 cup<br>Mint curd chutney - 2 tsp OR Chapati - 1<br>Palak sabji - 2 katori</p>
            <p><strong>10:00 PM</strong><br>Milk without Sugar - 1/2 cup</p>
            <a href="#" class="btn btn-primary btn-lg back-btn">Back</a>
        </div>

        <div class="recipe-container recipe-info">
            <h2>Recipes</h2>
            <h3>Subzi Dal Diet Plan</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ingredients</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Yellow moong dal</td>
                        <td>1/3 cup</td>
                    </tr>
                    <tr>
                        <td>Toovar (arhar) dal</td>
                        <td>1/3 cup</td>
                    </tr>
                    <tr>
                        <td>Mustard seeds (rai)</td>
                        <td>1/2 tsp</td>
                    </tr>
                    <tr>
                        <td>Masoor dal (split red lentils)</td>
                        <td>1/3 cup</td>
                    </tr>
                    <tr>
                        <td>Cumin seeds (jeera)</td>
                        <td>1/2 tsp</td>
                    </tr>
                    <tr>
                        <td>Curry leaves</td>
                        <td>6 to 8</td>
                    </tr>
                    <tr>
                        <td>Asafoetida (hing)</td>
                        <td>1/4 tsp</td>
                    </tr>
                    <tr>
                        <td>Green chilli</td>
                        <td>1 (chopped)</td>
                    </tr>
                    <tr>
                        <td>Onion</td>
                        <td>1 (chopped)</td>
                    </tr>
                    <tr>
                        <td>Ginger-green chili paste</td>
                        <td>2 tsp</td>
                    </tr>
                    <tr>
                        <td>Garlic paste</td>
                        <td>1/2 tsp</td>
                    </tr>
                    <tr>
                        <td>Large tomato</td>
                        <td>1 (finely chopped)</td>
                    </tr>
                    <tr>
                        <td>Chili powder</td>
                        <td>1/2 tsp</td>
                    </tr>
                    <tr>
                        <td>Turmeric powder (haldi)</td>
                        <td>1/2 tsp</td>
                    </tr>
                    <tr>
                        <td>Mixed vegetables</td>
                        <td>1 cup (finely chopped)</td>
                    </tr>
                    <tr>
                        <td>Oil</td>
                        <td>2 tsp</td>
                    </tr>
                    <tr>
                        <td>Salt</td>
                        <td>to taste</td>
                    </tr>
                    <tr>
                        <td>Chopped coriander</td>
                        <td>2 tbsp (for garnish)</td>
                    </tr>
                </tbody>
            </table>
            <h3>Method</h3>
            <p>Cook the dal with salt and turmeric in a pressure cooker until it becomes soft and keep it aside.</p>
            <p>Then, heat oil in a pan, add curry leaves, mustard seeds, cumin seeds, chili, ginger & garlic paste, and sauté them well.</p>
            <p>Later, add the vegetables and cook the mixture for 2 minutes.</p>
            <p>Finally, add the dal, chilly powder, and simmer this mixture until the vegetables are cooked.</p>
            <p>Garnish the dish with coriander and serve hot.</p>
            <a href="#" class="btn btn-primary btn-lg back-btn">Back</a>
        </div>
    </div>
</body>
</html>

