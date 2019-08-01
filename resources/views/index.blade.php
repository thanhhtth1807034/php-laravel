@extends('game.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Example</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('game.create') }}"> Create New Game</a>
            </div>
        </div>
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
        @foreach ($game as $game)
            <tr>
                <td>{{ ++$i }}</td>
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

    {!! $game->links() !!}

@endsection
