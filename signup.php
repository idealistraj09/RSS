<html>


<head>
    <link rel="stylesheet" href="signin.css">
    <script src="signin.js"></script>
    <title>sign in</title>
</head>

<body>
    <h2>Join us</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="$_GET">
                <h1>Sign Up</h1>

                <span>or use your account</span>
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <input type="text" placeholder="first name" />
                <input type="text" placeholder="last name" />
                <input type="email" placeholder="Email" />
                
                    <input type="radio" id="huey" name="drone" value="male" checked>
                    <label for="huey">Male</label>
               
                    <input type="radio" id="dewey" name="drone" value="female">
                    <label for="dewey">Female</label>
                
                    <input type="radio" id="louie" name="drone" value="Other">
                    <label for="louie">Other</label>
               
                <input type="text" placeholder="0000000000" max="11" />
                <input type="date" />
                <input type="text" placeholder="city" />
                <input type="text" placeholder="state" />
                <input type="text" placeholder="Local address" />


            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign up</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
