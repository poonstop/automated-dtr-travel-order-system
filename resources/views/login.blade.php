@extends('Layout')
@section('title', 'Login Form')
@section('content')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    /* Ensure full height and width */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent scrolling */
}

/* Apply gradient background to body */
body {
  background: linear-gradient(to bottom, #ffffff 0%, #ffffff 47%, #10346C 100%); /* Smooth transition */
  background-size: cover;
  background-attachment: fixed;
} 

/* Container for both the login form and the text */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
}

/* Wrapper for the form */
.wrapper {
    background: #D9D9D6;
    padding: 25px;
    border-radius: 10px;
    width: 325px;
    text-align: center;
    margin-top: -150px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    border: 1px solid gray;
}

/* Wrapper for the text beside the form */
.text-wrapper {
    margin-left: 30px;
    font-size: 30px;
    font-weight: bold; 
    color: #000000;
}

/* Other styles (unchanged) */
h1 {
    font-size: 22px;
    color: black;
    margin-bottom: 10px;
}

hr {
    border: 1px solid gray;
    width: 100%;
}

.form {
    display: flex;
    flex-direction: column;
}

.row {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.row label {
    width: 100px;
    margin-right: 15px;
    text-align: left;
    font-size: 14px;
    color: black;
    display: flex;
    align-items: center;
}

.row label i {
    margin-right: 10px;
}

input {
    padding: 10px 10px 10px 35px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

input:focus {
    outline: none;
    border-color: #555;
}

#uname, #pword {
    width: 280px;
    margin: 0 auto;
}

.row.button {
    display: flex;
    justify-content: center;
}

.row.button button {
    width: 280px;
    padding: 10px;
    background: #0c2e5e;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.row.button button:hover {
    background: #09214a;
}

/* #password-indicator {
    font-size: 9.2px;
    color: red;
    text-align: left;
    margin-top: -14px;
    margin-left: -1px;
}

.valid {
    color: green;
}

.invalid {
    color: red;
} */
</style>

<div class="container">
    <div class="wrapper">
        <h1>Administrator</h1>
        <hr>
        <form action="#" onsubmit="return login()">
            <div class="form">
                <div class="row">
                    <label for="uname"><i class="fas fa-user"></i> Username</label>
                    <input type="text" id="uname" placeholder="Enter Username" required>
                </div>
                <div class="row">
                    <label for="pword"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" id="pword" placeholder="Enter Password" required minlength="8" maxlength="8" onkeyup="checkPassword()">
                </div>
                <!-- <p id="password-indicator" class="invalid">
                    * Must contain uppercase, lowercase, number, and special character
                </p> -->
                <br>
                <div class="row button">
                    <button type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Text beside the login form -->
    <center><div class="text-wrapper"> <hr>
        Automated Daily Time Record <br> and Travel Order System
    </div></center>
</div>

<!-- <script>
function checkPassword() {
    const password = document.getElementById("pword").value;
    const indicator = document.getElementById("password-indicator");

    if (/[A-Z]/.test(password) && 
        /[a-z]/.test(password) && 
        /[0-9]/.test(password) && 
        /[!@#$%^&*(),.?":{}|<>~_\-=+]/.test(password)) {
        
        indicator.textContent = "Password is strong!";
        indicator.style.color = "green"; 
    } else {
        indicator.textContent = "* Must contain uppercase, lowercase, number, and special character";
        indicator.style.color = "red";
    }
}
</script> -->

@endsection
