<div>
    <h1>Edit Student Data</h1>
    <form action="/edit-student/{{ $data->id }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put"/>
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter name"/>
        <br><br>
        <input type="email" name="email" value="{{ $data->email }}" placeholder="Enter email"/>
        <br><br>
        <input type="number" name="phone" value="{{ $data->phone }}" placeholder="Enter Number"/>
        <br><br>
        <button>upadte</button>
        <a href="/list">cancel</a>
    </form>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
