<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Assignment 3</title>
    </head>
    <body>
    <div id="error-message" style="color:red"></div>
    <form action="car_process.php" method="post" >
        <label for="name"> name </label>
        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
        
        <br><br>

        <label for="vehicle_manufacturer"> Vehicle_manufacturer:</label>
        <select id="vehicle_manufacturer" name="vehicle_manufacturer">
            <option value="Choose_Value" >Choose_Value</option>
            <option value="Choose_Value" <?php echo isset($_POST['vehicle_manufacturer']) && $_POST['vehicle_manufacturer'] == 'Choose_Value' ? 'selected' : ''; ?>>Choose_Value</option>
            <option value="Subaru" <?php echo isset($_POST['vehicle_manufacturer']) && $_POST['vehicle_manufacturer'] == 'Subaru' ? 'selected' : ''; ?>>Subaru</option>
            <option value="Honda" <?php echo isset($_POST['vehicle_manufacturer']) && $_POST['vehicle_manufacturer'] == 'Honda' ? 'selected' : ''; ?>>Honda</option>
            <option value="Tesla" <?php echo isset($_POST['vehicle_manufacturer']) && $_POST['vehicle_manufacturer'] == 'Tesla' ? 'selected' : ''; ?>>Tesla</option>
        </select>


        <br><br>


        <label>Transmission_type:</label>
        <input type="radio" id="automatic" name="transmission_type" value="Automatic" <?php echo isset($_POST['transmission_type']) && $_POST['transmission_type'] == 'Automatic' ? 'checked' : ''; ?>>
        <label for = "automatic">Automatic</label>
        <input type="radio" id="manual" name="transmission_type" value="Manual" <?php echo isset($_POST['transmission_type']) && $_POST['transmission_type'] == 'Manual' ? 'checked' : ''; ?>>
        <label for = "manual">Manual</label>

        <br><br>

        <label for="runs">Runs:</label>
        <input type="checkbox" id="runs" name="runs" value="1">
        <br><br>

        <input type="submit" value="Save">


    </form>
    

</body>
</html>