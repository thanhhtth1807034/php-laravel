<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
    <h1>List account</h1>
    <ul>
        @foreach($listAccount as $account)
            <li>{{ $account -> email }}</li>
        @endforeach
    </ul>
        {{ $listAccount -> links() }}
{{--<header>--}}
{{--    <h1 class="slogan">SLOGAN</h1>--}}
{{--</header>--}}
{{--<div class="container">--}}
{{--    <div class="row ">--}}
{{--        <div class="col-2">--}}
{{--            <nav class="navbar ">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <div class="item">Menu</div>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Link 1</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Link 2</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Link 3</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            </nav>--}}
{{--        </div>--}}

{{--        <section class="col-lg-10">--}}

{{--            <nav class="navbar navbar-expand-sm ">--}}
{{--                <form class="form-inline" action="">--}}
{{--                    <input class="form-control mr-sm-2" type="text" placeholder="Search">--}}
{{--                    <button class="btn btn-success mr-sm-2" type="submit">Search</button>--}}
{{--                    <input class="form-control mr-sm-5 " id="myInput" type="text" placeholder="Filter..">--}}
{{--                    <div class="pull-right">--}}
{{--                        <a class="btn btn-success " href="/account/register"> Create New Account</a>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </nav>--}}

{{--            <div class="row">--}}
{{--                <div class="container ">--}}
{{--                    <h2>List Product</h2>--}}
{{--                    <br>--}}
{{--                    <table class="table table-striped">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Id</th>--}}
{{--                            <th>Email</th>--}}
{{--                            <th>Password</th>--}}
{{--                            <th>Address</th>--}}
{{--                            <th>Status</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>1</td>--}}
{{--                            <td>nam@gmail.com</td>--}}
{{--                            <td>456abc</td>--}}
{{--                            <td>sai gon</td>--}}
{{--                            <td>1</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>2</td>--}}
{{--                            <td>phu@gmail.com</td>--}}
{{--                            <td>789abc</td>--}}
{{--                            <td>Ha Noi</td>--}}
{{--                            <td>1</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>3</td>--}}
{{--                            <td>thanh@gmail.com</td>--}}
{{--                            <td>123xyz</td>--}}
{{--                            <td>sai gon</td>--}}
{{--                            <td>1</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>--}}

{{--                                <a class="btn btn-info" href="">Show</a>--}}

{{--                                <a class="btn btn-primary" href="">Edit</a>--}}

{{--                                <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--                <div class="footer">--}}
{{--                    <p class="fter">Copyright@2019</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}


{{--    </div>--}}
{{--</div>--}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
