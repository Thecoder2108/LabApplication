<html>
    <head>
        <title>Learing is Fun</title>
        <link rel ="stylesheet" href="style.css">
    </head>
    <body>
        <div class ="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="fb.png">
                    <img src="ins.png">
                </div>
                <form id="login" class="input-gourp">
                    <input type="text" class="input-field" placeholder="User Name" required name="Name">
                    <input type="text" class="input-field" placeholder="Password" required name="Password">
                    <input type="checkbox" class="chech-box"><span>Remeber the password</span>
                    <button type="submit" class="submit-btn">Log In</button>
                </form>
                <form action="testfile.php" method="post"  id="register" class="input-gourp">
                    <input type="text" class="input-field" placeholder="User Name" name="Name" required/>
                    <input type="text" class="input-field" placeholder="Email ID"  name="EmailID" required/>
                    <input type="text" class="input-field" placeholder="Password"  name="Password" required/>
                    <label for="male" class="gender-field"><input type="radio" name="Gender" value="m" id="male">Male<label>
                    <label for="female" class="gender-field"><input type="radio" name="Gender" value="f" id="female">Female<label>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>
            
        </div>

        <script>
            var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");
            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>

    </body>
</html>