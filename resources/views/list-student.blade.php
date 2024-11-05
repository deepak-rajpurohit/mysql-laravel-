<div>
    <h1>Student list</h1>
    {{-- {{ print_r($students) }} --}}
    <form action="search" method="get">
        {{-- @csrf --}}
        <input type="text" placeholder="Serch with name" name="search"
        value="{{@$search}}"/>
        <button>Search</button>
    </form>
    <table border="2">
        {{-- @csrf --}}
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created_At</td>
            <td>Updated_At</td>
            <td>Operation</td>
        </tr>
        @foreach ($students as $student )
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->created_at }}</td>
            <td>{{ $student->updated_at }}</td>
            <td>
                <a href="{{ 'delete/'.$student->id }}">Delete</a>
                <a href="{{ 'edit/'.$student->id }}"> Edit</a>
            </td>

        </tr>

        @endforeach
    </table>
    {{ $students->links() }}

    <style>
        .w-5.h-5{
            width:20px;
        }
    </style>
</div>
