<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/sheenastyle.css">
    <title>Forms</title>
</head>

<body style="background-image: url('assets/leo.jpg');">
    <div class="container">
        <h2 class="title">registration form</h2>

        <form action="home.php" method="post">
            <label for="">Name</label>
            <input
                class="textfield"
                type="text"
                name="fullname"
                id="myName"
                required>

            <label for="">Birthdate</label>
            <input
                class="textfield"
                type="date"
                name="birthdate"
                id="birthdate"
                required>

            <label for="number">Number</label>
            <input
                class="textfield"
                type="number"
                name="number"
                id="number"

                
                required>

            <label for="">Gender</label>
            <select class="textfield" name="gender" id="gender" required>
                <option value=""></option>
                <option value="male" >Male</option>
                <option value="female" selected>Female</option>
                <option value="femboy">Femboy</option>
                <option value="other">Other</option>
            </select>

            <label for="">Email</label>
            <input
                class="textfield"
                type="email"
                name="myEmail"
                id="myEmail"
                required>

            <label for="">Password</label>
            <input
                class="textfield"
                type="password"
                name="myPassword"
                id="myPassword"
                required>
            
            <label for="status">Select Status</label>
            <label for="status1">
            <input
                class=""
                type="radio"
                name="status"
                id="status1"
                value="active"
                required>
                Active
            </label>
            <label for="status2">
            <input
                class=""
                style="margin-bottom: 20px;"
                type="radio"
                name="status"
                id="status2"
                value="inactive"
                required>
                Inactive
            </label>

            </label>

            <label for="terms">
                <input
                    type="checkbox"
                    name="terms"
                    id="terms">
                By clicking submit, you agree to our <a href="terms.php">Terms of Service</a>.
            </label>

            <button class="button" type="submit">Submit</button>
        </form>
    </div>
</body>

</html>