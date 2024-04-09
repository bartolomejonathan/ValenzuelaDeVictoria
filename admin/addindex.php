
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condo Listings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Form to add a new condo -->
        <h2>Add a New Condo</h2>
        <form action="addcondo.php" method="post" enctype="multipart/form-data">
            
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" ><br>

    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price"><br>

    <label for="location">Description:</label><br>
    <input type="text" id="description" name="description" ><br>

    <label for="no_bed">Number of Bedrooms:</label><br>
    <input type="number" id="no_bed" name="no_bed"><br>

    <label for="no_bath">Number of Bathrooms:</label><br>
    <input type="number" id="no_bath" name="no_bath"><br>

    <label for="square_meter">Square Meters:</label><br>
    <input type="number" id="square_meter" name="square_meter"><br>

    <label for="image1">Image 1:</label><br>
    <input type="file" id="image1" name="images[]" accept=".jpg, .png, .jpeg, .pdf "><br>

    <label for="image2">Image 2:</label><br>
    <input type="file" id="image2" name="images[]" accept=".jpg, .png, .jpeg, .pdf" ><br>

    <label for="image3">Image 3:</label><br>
    <input type="file" id="image3" name="images[]" accept=".jpg, .png, .jpeg, .pdf" ><br>

    <label for="image4">Image 4:</label><br>
    <input type="file" id="image4" name="images[]" accept=".jpg, .png, .jpeg, .pdf" ><br>

    <a href="listing.php" id="addLink" class="add-btn">Add Condo</a>

        </form>
    </div>

</body>
</html>
</body>
</html>