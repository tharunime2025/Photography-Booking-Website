<!DOCTYPE html>
<html>
<head>
    <title>Upload Images</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        select, input[type="file"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: blue; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
        }

        input[type="submit"]:hover {
            background-color: #4CAF50;
  color: white;
        }
    </style>
</head>
<body>
    <form action="gallery_upload.php" method="post" enctype="multipart/form-data">
        <h2>Upload Images</h2>
        <label for="category">Select Category:</label>
        <select name="category" id="category">
            <option value="wedding">Wedding</option>
            <option value="event">Event</option>
            <option value="graduation">Graduation</option>
            <option value="birthday">Birthday</option>
            <option value="latest">Latest</option>
        </select>
        <br><br>
        <label for="files">Select Image Files to Upload:</label>
        <input type="file" name="files[]" id="files" multiple>
        <br><br>
        <input type="submit" name="submit" value="Upload Images">
    </form>
</body>
</html>
