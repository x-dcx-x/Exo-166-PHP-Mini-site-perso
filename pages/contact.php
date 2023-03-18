


<section>
    <h1>Contact</h1>

    <form action="../public/save.php" method="post" >
        <div>
            <label for="id-username">Username</label>
            <input type="text" name="username" id="id-username" required>
        </div>
        <div>
            <label for="id-age">Your age</label>
            <input type="number" name="age" id="id-age" required>
        </div>
        <div>
            <label for="id-password">Password</label>
            <input type="password" name="password" id="id-password" required>
        </div>
        <div>
            <label for="id-password-repeat">Password-repeat</label>
            <input type="password" name="password-repeat" id="id-password-repeat" required>
        </div>
        <div>
            <input type="submit" value="Envoyer" name="submit" id="id-envoyer" >
        </div>

    </form>


    <p></p>
</section>

<?php


?>