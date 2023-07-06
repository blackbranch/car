<!DOCTYPE html>
<html>
<head>
    <title>Car Infographic</title>
    <style>
        .car-box {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 50px;
            border: 1px solid #ccc;
            padding: 20px;
        }
        
        .car-info {
            text-align: center;
        }
        
        .car-info h3 {
            margin-top: 0;
        }
        
        .car-info p {
            margin-bottom: 0;
        }
        
        .review-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
        }
        
        .car-image {
            max-width: 200px;
            max-height: 150px;
        }
    </style>
</head>
<body>
    <?php
        // Sample car data with reviews and image URLs
        $cars = array(
            array(
                'make' => 'Toyota',
                'model' => 'Camry',
                'year' => 2023,
                'color' => 'Silver',
                'price' => '$24,000',
                'review' => 'The Toyota Camry is a reliable and fuel-efficient sedan. It offers a comfortable ride and has plenty of space for passengers.',
                'image' => 'car1.jpg'
            ),
            array(
                'make' => 'Honda',
                'model' => 'Sienta',
                'year' => 2023,
                'color' => 'Blue',
                'price' => '$23,500',
                'review' => 'The Honda Accord is a stylish and practical midsize sedan. It has a spacious interior and delivers a smooth and enjoyable driving experience.',
                'image' => 'car2.jpg'
            ),
            array(
                'make' => 'Ford',
                'model' => 'Mustang',
                'year' => 2023,
                'color' => 'Red',
                'price' => '$35,000',
                'review' => 'The Ford Mustang is an iconic muscle car with a powerful engine and aggressive styling. It offers thrilling performance and a fun driving experience.',
                'image' => 'https://example.com/ford_mustang.jpg'
            )
        );
    ?>
    
    <?php foreach ($cars as $car): ?>
        <div class="car-box">
            <div class="car-info">
                <h3><?php echo $car['make']; ?></h3>
                <p><?php echo $car['model']; ?></p>
                <p><?php echo $car['year']; ?></p>
                <p><?php echo $car['color']; ?></p>
                <p><?php echo $car['price']; ?></p>
            </div>
            <div class="car-image">
                <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['make']; ?> <?php echo $car['model']; ?>">
            </div>
            <div class="review-box">
                <h4>Review</h4>
                <p><?php echo $car['review']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
