<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="body-content">
        <div class="module">
          <h1> UPLOAD IMAGE</h1>
          <?php
            if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Dear user!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['status']);
            }
            ?>
          <form class="form" action="vid_upload_pak.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error"></div>
            <input type="text" placeholder="TITLE" name="filetitle" required />
            <input type="text" placeholder="LINK" name="filelink" required />
            <input type="submit" value="Upload" name="submit" class="btn btn-block btn-primary" />
          </form>
        </div>
</div>
</body>
</html>