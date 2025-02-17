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
    /* Centering the login form */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* Ensures full height */
        width: 100%; /* Ensure full width */
    }

    .wrapper {
        background: #D9D9D6;
        padding: 25px;
        border-radius: 10px;
        width: 325px;
        text-align: center;
        margin-top: -150px; /* Moves the form slightly upward */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Adds a subtle shadow */
        border: 1px solid gray; /* Adds a solid gray border */
    }

    h1 {
        font-size: 22px;
        color: black;
        margin-bottom: 10px;
    }

    hr {
        border: 1px solid gray; /* Adds a solid gray border */
        width: 100%;
    }

    .form {
        display: flex;
        flex-direction: column;
    }

    .row {
        display: flex; /* Aligns label and input horizontally */
        align-items: center; /* Vertically centers the label and input */
        margin-bottom: 15px;
    }

    .row label {
        width: 100px; /* Adjust the label width as needed */
        margin-right: 15px; /* Creates space between label and input */
        text-align: left;
        font-size: 14px;
        color: black;
        display: flex;
        align-items: center; /* Aligns the icon with the label text */
    }

    .row label i {
        margin-right: 10px; /* Adds space between the icon and the label text */
    }

    input {
        width: calc(100% - 115px); /* Adjust input width to leave space for label */
        padding: 10px 10px 10px 35px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    input:focus {
        outline: none;
        border-color: #555;
    }

    .row.button button {
        width: 100%;
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
                    <input type="password" id="pword" placeholder="Enter Password" required>
                </div> <br>
                <div class="row button">
                    <button type="submit">Login</button> 
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
