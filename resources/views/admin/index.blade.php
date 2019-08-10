@extends('admin.layout')


@section('content')
    <div>
        <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt0KJoUjE6dzEf8T7F7x3XNShCZnIoW34YWMF-wDRQqmZ76f7T"
            alt="">
        <br>
        <br>
    </div>
    <div class="row container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success ">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><i class="fa fa-gamepad" aria-hidden="true"></i> LIST GAME</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('game.create') }}"> Create New Game</a>
            </div>


        </div>
        <div class="row mb-2 mt-2">
            <div class="col-6 col-md-6"></div>
            <div class="col-2 col-md-2">
                <div class="form-group  mr-2">
                    <select class="form-control ">
                        <option>Category 01</option>
                        <option>Category 01</option>
                        <option>Category 01</option>
                        <option>Category 01</option>
                        <option>Category 01</option>
                    </select>
                </div>
            </div>
            <div class="col-3 col-md-3">
                <div class="form-group float-left mr-2">
                    <input type="text" class="form-control mb-2 mr-sm-2" id="search"
                           placeholder="Enter keyword to search...">
                </div>

            </div>
            <div class="col-1 col-md-1">
                <div class="form-group float-left">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col"><input type="checkbox" id="checkAll"></th>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Price</th>
                <th width="280px">Action</th>
            </tr>
            </thead>

            @foreach ($games as $key => $game)
                <tbody id="myTable">
                <tr id="tr_{{ $game -> id }}">
                    <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $game -> id }}"></td>
                    {{--                    <td>{{ ++$key }}</td>--}}
                    <td scope="col">{{ $game-> id }}</td>
                    <td scope="col">{{ $game->name }}</td>
                    <td scope="col">{{ $game->category }}</td>
                    <td scope="col"><img class="img-thumbnail rounded game-avatar" src="{{ $game->thumbnail }}"
                                         alt="$game->name"></td>
                    <td scope="col">{{ $game->price }}</td>
                    <td>
                        <form action="{{ route('game.destroy',$game->id) }}" method="PUT">

                            <a class="btn btn-info" href="{{ route('game.show',$game->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('game.edit',$game->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')
                            <a href="javascript:void(0)" id="btn-delete-{{ $game-> id }}"
                               class="btn btn-danger btn-delete">Delete
                            </a>
                        </form>
                    </td>
                </tr>
                </tbody>

            @endforeach
        </table>

        {{--            <div class="row">--}}
        <div class="form-group mr-3">
            <select class=" mr-2">
                <option>Delete</option>
                <option>Accept</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-xs delete-all mb-2">Apply to all</button>
            {{--                </div>--}}

        </div>


    </div>

    <div class="row">
        <div class="col-sm-6 col-md-5"></div>
        <div class="col-sm-6 col-md-4">
            <nav aria-label="Page navigation example">
                {{$games->links()}}
                {{--                {!! $games->links() !!}--}}
            </nav>
        </div>
    </div>


@endsection
