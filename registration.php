<?php

$fullname = $address = $email = $password = $confirm_password = "";
$errors = array('fullname' => '', 'address' => '', 'email' => '',);

if (isset($_POST['submit'])) {
    if (empty($_POST['fullname'])) {
        $errors['fullname'] = 'Full Name is Required';
    } else {
        $fullname = $_POST['fullname'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $errors['fullname'] = "full name must be valid";
        }
    }

    if (empty($_POST['address'])) {
        $errors['address'] = 'Address is Required';
    } else {
        $fullname = $_POST['address'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $errors['address'] = "address must be valid";
        }
    }

    if (empty($_POST['email'])) {
        $errors['email'] = 'A email is required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "email must be valid email address";
        }
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'A Password is required';
    }

    if (empty($_POST['confirm_password'])) {
        $errors['confirm_password'] = 'A Confirm assword is required';
    }

    if ($_POST['password'] != $_POST['confirm_password']) {
        $errors['confirm_password'] = 'Password does not match';
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Register as a Donar</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fullname" value="<?php echo $fullname ?>" placeholder="Enter your name" required>
                        <div class="red-text"><?php echo $errors['fullname'] ?></div>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" value="<?php echo $address ?>" placeholder="Enter your Address" required>
                        <div class="red-text"><?php echo $errors['address'] ?></div>
                    </div>
                    <div class="gender-details">
                        <span class="gender">Gender</span>
                        <select>
                            <option selected disabled hidden></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="not prefer">Not prefer to say</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" value="<?php echo $email ?>" placeholder="Enter your email" required>
                        <div class="red-text"><?php echo $errors['email']; ?></div>
                    </div>
                    <div class="blood-details">
                        <span class="blood">Blood Group</span>
                        <select>
                            <option selected disabled hidden></option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">AB+</option>
                            <option value="3">AB-</option>
                            <option value="4">O+</option>
                            <option value="5">O-</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="password" value="<?php echo $password ?>" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phone" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="text" name="confirm_password" value="<?php echo $confirm_password ?>" placeholder="Confirm your password" required>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" name="submit" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>