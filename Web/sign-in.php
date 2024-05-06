<!DOCTYPE html>
<html>
    <head>
        <title> Sign Up </title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <script src="js/script.js"></script>
        <div id="left-side">

            <div id="pic-side">
                <img src="Ressources\clock.png" alt="clock"/>
            </div>
            <p> Procrastinate tomorrow</p>

        </div>

        <div id="right-side">
            <h1> Welcome !</h1>
            <div id="form-signin">
                <form id="form-element" onsubmit="return validateForm()" method="get">
                    <input id="input-field" type="text" placeholder="Username: 3-16 characters" pattern="\w{3,16}" required>
                    <input id="input-field" type="email" placeholder="Email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                    <input id="input-field" type="password" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>                    
                    <input id="buttton-submit" type="submit" value="Submit">
                </form>
            </div>

        </div>
    </body>
</html>