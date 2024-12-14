<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Details</title>
    <style>
        /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set background color for the body */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    padding: 20px;
}

/* Container to center content and add padding */
form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto;
}

/* Title Styles */
h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Label Styling */
label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    color: #555;
}

/* Input Fields Styling */
input[type="text"], input[type="submit"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

/* Specific Styling for Submit Buttons */
input[type="submit"] {
    
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    margin: 10px 0;
    border: none;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Style for the 'Update' and 'Delete' Buttons */
input[name="update"], input[name="delete"] {
    background-color: #f0ad4e;
}

input[name="update"]:hover, input[name="delete"]:hover {
    background-color: #ec971f;
}

/* Styling for 'Submit' button */
input[type="submit"]:first-child {
    background-color: #007bff;
}

input[type="submit"]:first-child:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h2>Submit Your Details</h2>
    
    <!-- Form for inserting data -->
   
<h3>insert data</h3>
    
    <!-- Form for updating or deleting data -->
    <form action="form.php" method="post">
       
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname"><br>

        <input type="submit" value="Insert" ><br>
        
        
    </form>



    <h3>update & delete data</h3>
    <form action="form.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname"><br>
 
        <input type="submit" name="update" value="Update"><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>
