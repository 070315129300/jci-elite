<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Admins</title>
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
                <a href="birthdays">Birthday Celebrants</a>
                <li><a href="addadmin">Add an Admin</a></li>
                <li><a href="alladmin">All Admin</a></li>
            </ul>
        </div>
    </section>

    <section class="table">
        <table class="table data">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
            @foreach($user as $users)

                <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->username}} </td>
                    <td>{{$users->email}}</td>
                    <td><a href="{{url('editadmins',$users->id )}}" >Edit</a> </td>
                    <td><a href="{{url('deleteadmin', $users->id)}}">Delete</a> </td>
                </tr>
            @endforeach
        </table>
    </section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).on('click', '.edit', function () {
        $(this)
            .parent()
            .siblings('td.data')
            .each(function () {
                var content = $(this).html();
                $(this).html('<input value="' + content + '" />');
            });
        $(this).siblings('.save').show();
        $(this).siblings('.delete').hide();
        $(this).hide();
    });
    $(document).on('click', '.save', function () {
        $('input').each(function () {
            var content = $(this).val();
            $(this).html(content);
            $(this).contents().unwrap();
        });
        $(this).siblings('.edit').show();
        $(this).siblings('.delete').show();
        $(this).hide();
    });
    $(document).on('click', '.delete', function () {
        $(this).parents('tr').remove();
    });
    $('.add').click(function () {
        $(this)
            .parents('table')
            .append(
                '<tr><td class="data"></td><td class="data"></td><td class="data"></td><td><button class="save">Save</button><button class="edit">Edit</button> <button class="delete">Delete</button></td></tr>'
            );
    });
</script>
</body>
</html>

