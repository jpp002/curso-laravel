@extends('dashboard.master')

@section('content')

    <a class="btn btn-success my-3" href="{{ route('category.create') }}" target="blank">Create</a>

    <table class="table mb-3">
        <thead>
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Title
                </td>
            </tr>
            
        </thead>

        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>
                        {{ $c->id }}
                    </td>
                    <td>
                        {{ $c->title }}
                    </td>
                    <td>           
                        <a class="my-2 btn btn-primary" href="{{ route('category.edit', $c) }}">Edit</a>
                        <a class="my-2 btn btn-primary" href="{{ route('category.show', $c) }}">Show</a>
                        <form action ="{{ route('category.destroy', $c) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="my-2 btn btn-danger" type='submit'>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection