<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Surf the Ocean</title>
</head>

<body>
    <main>
        <div class="imageSection">
            <div class="titleContainer">
                <p>Surf the Ocean</p>
            </div>
            <div class="imageContainer">
                <?php
                include 'fetch_image.php';
                include 'send_email.php';
                if (isset($_POST['fetchImage'])) {
                    echo fetchAndDisplayImage();
                } else {
                    $imageContent = fetchAndDisplayImage();
                    echo $imageContent;
                }
                ?>
                <div class="fetchImageContainer">
                    <form method="post">
                        <button class="fetchButton" type="submit" name="fetchImage">NEW IMAGE</button>
                    </form>
                    <p class="poweredBy">...powered by Pexels </p>
                </div>
               
            </div>
        </div>
        <div class="formSection">
            <div class="subTitleContainer">
                <p class="subTitleText"> Send me to a friend! </p>
                <form method="POST" action="send_email.php">
                    <div class="emailInputContainer">
                        <input class="emailInput" type="email" name="email" id="email" placeholder="user@domain.com">
                    </div>
                    <div class="submitButtonContainer">
                        <button class="submitEmailButton" type="submit" name="sendEmail"> SEND </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>