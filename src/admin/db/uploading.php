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


<?php

if (isset($_POST['upload'])) { /* checking if the form is submitted */

    if (!empty($_POST['new-name'])) { /* checking if the input field is not empty */
        $num = $_POST['new-name']; /* storing the new name in a variable */
        $new_name = 'portada00' . $num;

        if ($_FILES["image"]["name"] != "") { /* checking if there is an image selected */
            // all file data are stored inside the superglobal $_FILES variable.
            // Let's check it out.
            /*highlight_string("<?php " . var_export($_FILES, true) . ";?>");*/

            // let's check now if there is actualy an image format selected.
            $check = getimagesize($_FILES["image"]["tmp_name"]);

            // getimagesize() returns an array with the images data
            // if $check is an array the selected file is an image.

            if (is_array($check)) {
                // getting the images extension .jpg, or .png or ....
                $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

                // moving the temporary stored file in the uploads folder
                // and assign the new name and the file extension.
                move_uploaded_file($_FILES["image"]["tmp_name"], "img/carrusel/{$new_name}.{$ext}");

                // checking if move_uploaded_file worked.
                if (file_exists("img/carrusel/{$new_name}.{$ext}")) {
                    $success = "File uploaded successfully"; /* success message */

                    // storing the images path to displaying it in the index file.
                    $uploaded_image = "img/carrusel/{$new_name}.{$ext}";
                    $name = "{$new_name}.{$ext}"; /* same as above */
                } else {
                    $error = "sorry i am a bad programmer!!!";
                }
            } else {
                $error = "The file you selected is not a image format";
            }
        } else {
            $error = "Please select an image"; /* error message */
        }
    } else {
        $error = "Please type a name"; /* error message */
    }
}
