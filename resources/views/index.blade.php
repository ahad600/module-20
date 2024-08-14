<!DOCTYPE html>
<html>
    <head>
        <title>Contact Management</title>
    </head>
    <body>
    <div class="container">

        <a href="{{ route('contacts.create') }}">Create Contact</a><br/><br/>

        <form action="{{ route('contacts.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search by name or email" value="{{ request()->search }}">
            <button type="submit">Search</button>
        </form>

        <br/>

        <a href="{{ route('contacts.index', ['sort_by' => 'name', 'sort_direction' => request('sort_direction') == 'asc' ? 'desc' : 'asc']) }}">Sort By Name</a>
        <a href="{{ route('contacts.index', ['sort_by' => 'created_at', 'sort_direction' => request('sort_direction') == 'asc' ? 'desc' : 'asc']) }}">Sort By Date</a>

        <br/><br/>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
    </body>
</html>
