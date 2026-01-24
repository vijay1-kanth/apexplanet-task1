$check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if (mysqli_num_rows($check) > 0) {
    echo "Username already exists";
} else {
    // Insert new user
}