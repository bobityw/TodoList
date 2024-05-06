<!DOCTYPE html>
<html>
    <head>
        <title> Log in </title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div id="left-side">

            <div id="pic-side">
                <img src="Ressources\clock.png" alt="clock"/>
            </div>
            <p> Procrastinate tomorrow</p>

        </div>

        <div id="right-side">
            <h1> Welcome !</h1>
            <div id="form-login">
                <form id="form-element" action="" method="get">
                    <input id="input-field" type="text" placeholder="Username: 3-16 characters" pattern="\w{3,16}" required>
                    <input id="input-field" type="password" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>                    
                    <p> Forget your password? <a href="password.html">Press here!</a></p>
                    <input id="buttton-submit" type="submit" value="Submit">
                </form>
            </div>

        </div>
    </body>
</html>