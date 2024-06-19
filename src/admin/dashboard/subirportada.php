<h2>Upload and rename image file</h2>

<!-- writing the form -->
<form action="" method="post" enctype="multipart/form-data">
    <!-- enctype set to multipart/form-data is mandatory when we deal with files -->

    <label>Escoge una imagen</label>
    <input type="file" name="image">

    <label>Escribe el orden de la imagen</label>
    <select id="new-name" type="text" name="new-name" required>
        <option value="" disabled selected>Seleccione el orden de la imagen</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>


    <input type="submit" name="upload" value="upload">

    <p class="error"><?php echo @$error ?></p> <!-- displaying any errors -->
    <p class="success"><?php echo @$success ?></p> <!-- displaying the success message -->
</form>