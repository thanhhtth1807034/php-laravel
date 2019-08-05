@extends('layout')


@section('content')
    <div>
        <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt0KJoUjE6dzEf8T7F7x3XNShCZnIoW34YWMF-wDRQqmZ76f7T"
            alt="">
        <br>
        <br>
    </div>
    <div class="row">
        <div class="col-2">
            <nav class="navbar ">
                <ul class="navbar-nav">
                    <div class="item"><h3>Menu</h3></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 3</a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>LIST PRODUCT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('game.create') }}"> Create New Game</a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($games as $game)
                    <tr>
                        {{--                <td>{{ ++$i }}</td>--}}
                        <td>{{ $game-> id }}</td>
                        <td>{{ $game->name }}</td>
                        <td>{{ $game->category }}</td>
                        <td>{{ $game->price }}</td>
                        <td>
                            <form action="{{ route('game.destroy',$game->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('game.show',$game->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('game.edit',$game->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>



    {!! $games->links() !!}

@endsection
