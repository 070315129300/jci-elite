<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Birthdays</title>
    <link rel="stylesheet" href="style/sidebar.css" />
    <link rel="stylesheet" href="style/members.css" />
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
{{-- <section class="sidebar">
    <img
        src="img/junior-chamber-international-squarelogo-1432651524345-removebg-preview.png"
        alt="logo"
        class="logo"
    />
    <div class="account">
        <div class="pfp">
            <img
                src="img/profile.png"
                alt="profile"
            />
        </div>
        <p>Admin</p>
    </div>
    <hr />
    <div class="links">
        <a href="alluser">All Members</a>
        <a href="adduser">Add New Members</a>
        <a href="addadmin">Add an Admin</a>
        <a href="alladmin">All Admin</a>
    </div>

    <div class="logout"><i class="fa-solid fa-arrow-left"></i> <a href="logout">Logout</a></div>

    <div class="design">
        <p>Powered by:<a href="https://cynergy.com.ng">Cynergy Technologies</a></p>
    </div>
</section> --}}
<main>
    <section class="header">
        <h2>JCI IBADAN ELITE PORTAL ADMIN</h2>
        <i class="fa-solid fa-bars fa-lg" id="menu-icon"></i>
        <div class="res-menu">
            <ul>
                <li><a href="alluser">All Members</a></li>
                <li><a href="adduser">Add New Members</a></li>
                <li><a href="birthdays">Birthday Celebrants</a></li>
                <li><a href="addadmin">Add an Admin</a></li>
                <li><a href="alladmin">All Admin</a></li>

            </ul>
        </div>
    </section>

    <section class="table">
        <table class="table data">
            <tr>
                <th>image</th>
                <th>Username</th>
                <th>Wedding</th>
            </tr>
            @foreach($user->groupBy(function($user) { return Carbon\Carbon::parse($user->weddinganniversary)->format('F'); }) as $month => $userInMonth)
                <tr>
                    <th colspan="3">{{$month}}</th>
                </tr>

                @foreach($userInMonth as $user)
                    <tr>
                        <td><a href="viewbirthday/ {{$user->id}}" ><img height="300px" src="jciimage/{{$user->image}}" alt=""></a></td>
                        <td>{{$user->firstname}} {{$user->lastname}}</td>
                        <td>{{$user->weddinganniversary}}</td>
                    </tr>
                @endforeach
            @endforeach
        </table>

    </section>
</main>


</body>
</html>

