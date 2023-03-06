<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add an Admin</title>
    <link rel="stylesheet" href="style/sidebar.css" />
    <link rel="stylesheet" href="style/add-admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <script
        src="https://kit.fontawesome.com/f698b33fa3.js"
        crossorigin="anonymous"
    ></script>
    <script src="js/header.js" defer></script>
    <link rel="icon" type="image/x-icon" href="img/junior-chamber-international-squarelogo-1432651524345-removebg-preview.png">
</head>
<body>

@include('dashboard/sidebar')
{{--<section class="sidebar">--}}
{{--    <img--}}
{{--        src="img/junior-chamber-international-squarelogo-1432651524345-removebg-preview.png"--}}
{{--        alt="logo"--}}
{{--        class="logo"--}}
{{--    />--}}
{{--    <div class="account">--}}
{{--        <div class="pfp">--}}
{{--            <img--}}
{{--                src="img/Portland Black Male Headshots — Photography for Business Owners — Portland, OR — Natalie Kristeen.jpeg"--}}
{{--                alt="profile"--}}
{{--            />--}}
{{--        </div>--}}
{{--        <p>Okokobioko</p>--}}
{{--    </div>--}}
{{--    <hr />--}}
{{--    <div class="links">--}}
{{--        <a href="alluser">All Members</a>--}}
{{--        <a href="adduser">Add New Members</a>--}}
{{--        <a href="addadmin">Add an Admin</a>--}}
{{--        <a href="alladmin">ALL Admin</a>--}}
{{--    </div>--}}
{{--    <div class="logout"><i class="fa-solid fa-arrow-left"></i> <a href="logout">Logout</a></div>--}}
{{--    <div class="design">--}}
{{--        <p>Designed by:</p>--}}
{{--    </div>--}}
{{--</section>--}}
<main>
    <section class="header">
        <h2>ADD AN ADMIN</h2>
        <i class="fa-solid fa-bars fa-lg" id="menu-icon"></i>
        <div class="res-menu">
            <ul>
                <li><a href="alluser">All Members</a></li>
                <li><a href="adduser">Add New Members</a></li>
                <li><a href="addadmin">Add an Admin</a></li>
                
            </ul>
        </div>
    </section>
    <section class="form-container">
        <form action="{{url('upload_ad')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid">
                <input
                    type="text"
                    name="username"
                    id="username"
                    required
                    placeholder="Username"
                    maxlength="10"
                />
                <input
                    type="email"
                    name="email"
                    id="email"
                    required
                    placeholder="Email Address"
                />
                <input
                    type="password"
                    name="password"
                    id="password"
                    required
                    placeholder="Password"
                />
                <input
                    type="password"
                    name="cpassword"
                    id="confirm-password"
                    required
                    placeholder="Confirm Password"
                />
                <label class="label" for="inputTag">
                    Select Profile Image <br />
                    <i class="fa fa-camera"></i>
                    <input  name="file" type="file" required />

                    <br />
                    <span id="imageName"></span>
                </label>
            </div>

            <div class="submit"><button type="submit">Submit</button></div>
        </form>
    </section>
</main>
</body>
</html>
