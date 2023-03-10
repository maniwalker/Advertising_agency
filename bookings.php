<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plus Advertising</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="bg">
            <div class="book">
                <nav>
                    <img src="img/logo.png" class="logo">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="services.php">SERVICES</a></li>
                        <li><a href="bookings.php">BOOKINGS</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                    </ul>
                </nav>
                <div class="container">
                    <div class="title">Enter Your details below</div>
                    <form method="post" action="connect.php" name="booking" id="booking">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter Your name" required name="name">
                            </div>
                            <div class="input-box">
                                <span class="details">Mobile Number</span>
                                <input type="tel" placeholder="Enter Your mobile number" required name="mobile">
                            </div>
                            <div class="input-box">
                                <span class="details">E Mail</span>
                                <input type="email" placeholder="Enter Your e mail id" required name="mail">
                            </div>
                            <div class="input-box">
                                <span class="details">Address</span>
                                <input type="text" placeholder="Enter Your address" required name="address">
                            </div>
                            <div class="input-box">
                                <span class="details">NewsPaper</span>
                                <input type="text" placeholder="Enter the NewsPaper for your ad" required name="newspaper">
                            </div>
                            <div class="input-box">
                                <span class="details">Details</span>
                                <input type="text" placeholder="Enter the details of your ad" required name="details">
                            </div>
                            <div class="button">
                                <input type="submit" value="Submit" name="submit" onclick="return validateForm()">
                            </div>
                            <div class="button">
                                <input type="reset" value="Reset" name="reset" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script>
        function validateForm(){
            const form = document.getElementById('booking');
            const mobile = form.elements['mobile'].value;
            const mobileRegex = /^[0-9]+$/;
            if(mobile.toString().length != 10 ){
                alert("Please enter a valid mobile number");
                return false;
            }
            else if(!mobileRegex.test(mobile)){
                alert("Please enter a valid mobile number");
                return false;
            }
            let mail = document.forms["booking"]["mail"].value;
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
             // check if the email matches the pattern
            if (!regex.test(mail)) {
                alert("Please enter a valid email id");
                // email is invalid
                return false;
            }
            document.getElementById("booking").addEventListener("submit", function(event) {
                // Your form submission code here
                // ...

                // Reset the form
                document.getElementById("booking").reset();

                // Prevent the page from reloading
                event.preventDefault();
            });
            return true;
        }
    </script>
</html>