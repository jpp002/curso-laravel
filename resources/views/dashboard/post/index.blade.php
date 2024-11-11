@extends('dashboard.master')

@section('content')

    <a class="btn btn-success my-3" href="{{ route('post.create') }}" target="blank">Create</a>

    <table class="table mb-3">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Title
                </th>
                <th>
                    Posted
                </th>
                <th>
                    Category
                </th>
                <th>
                    Options
                </th>
            </tr>
            
        </thead>

        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{ $p->id }}
                    </td>
                    <td>
                        {{ $p->title }}
                    </td>
                    <td>
                        {{ $p->posted }}
                    </td>
                    <td>
                        {{ $p->category->title }}
                    </td>
                    <td>           
                        <a class="mt-2 btn btn-primary" href="{{ route('post.edit', $p) }}">Edit</a>
                        <a class="mt-2 btn btn-primary" href="{{ route('post.show', $p) }}">Show</a>
                        <form action ="{{ route('post.destroy', $p) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="my-2 btn btn-danger" type='submit'>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection