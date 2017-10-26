<?php
include 'head.php';
include 'nav.php';
include 'connection.php';
?>
<body background="images/wallpaper.jpg">

<br>
<div>
    <iframe width="900" height="500" src="//www.youtube.com/embed/1_FIyNcQSgA" frameborder="" allowfullscreen></iframe>
    <br>
    <iframe width="900" height="500" src="//www.youtube.com/embed/08fWWKhpxCg" frameborder="" allowfullscreen></iframe>
    <br>
    <iframe width="900" height="500" src="//www.youtube.com/embed/gOE2BVRCUkM" frameborder="" allowfullscreen></iframe>
    <br>
</div>

<?php
if ($_POST["name"] || $_POST["surname"] || $_POST["rating"] || $_POST["textarea"] || $_POST['email']) {
    if (preg_match("/[^A-Za-z'-]/", $_POST['name']) || preg_match("/[^A-Za-z'-]/", $_POST['surname'])) {
        die ("invalid name or surname, please re-enter your name and surname");
    }

    $name = $_POST['name'];
    $game = $_POST['game'];
    $surname = $_POST['surname'];
    $rating = $_POST['rating'];
    $comment = $_POST['textarea'];
    $email = $_POST['email'];

    echo "<h1><p>Thank you</p></h1> <h3><p>$name $surname</p></h3> <br/><h3><p>Will keep you updated</p></h3> <br>";

    $insert_comments = "INSERT INTO gamer_users_information (name,surname,email_address,comment, favourite_game,rating) VALUES ('$name','$surname','$email','$comment','$game','$rating')";
    $result = mysqli_query($conn, $insert_comments);

}
?>

<form action="Review.php" method="POST">
    <div class="sign_up">
        <br>
        <p>Name:</p><input type="text" value="<?php echo $name; ?>" name="name" placeholder="Name"/>
        <p>Surname:</p><input type="text" value="<?php echo $surname; ?>" name="surname" placeholder="Surname"/>
        <p>Favourite Game:</p><input type="text" value="<?php echo $game; ?>" name="game" placeholder="game"/>
        <p>Rate out of 10:</p><input type="text" value="<?php echo $rating; ?>" name="rating" placeholder="rating"/>
        <p>Email:</p><input type="email" value="<?php echo $email; ?>" name="email" placeholder="someone@example.com"/>
        <label for="comment">Comment:</label>
        <textarea id="comment" placeholder="Please type your comment here !" name="textarea" rows="10"
                  cols="87"></textarea>
        <br>
        <input type="submit" value="Submit" class="btn"/>
    </div>
    </div>
</form>
</body>
</html>
<?php
include 'footer.php';
?>
