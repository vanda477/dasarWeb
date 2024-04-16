<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="upload.css">
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>
            <form action="upload_ajax.php" id="upload-form" method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file" id="file" class="file-input">
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <button type="submit" name="submit" class="upload-button" id="upload-button">Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>