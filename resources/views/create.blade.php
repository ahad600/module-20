<!DOCTYPE html>
<html>
    <head>
        <title>Create Contact</title>
    </head>
    <body>
    <div class="container">

<h1>Create New Contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required><br/><br/>
    <label>Email:</label>
    <input type="email" name="email" required><br/><br/>
    <label>Phone:</label>
    <input type="text" name="phone"><br/><br/>
    <label>Address:</label>
    <input type="text" name="address"><br/><br/>
    <button type="submit">Save</button>
</form>

@if ($errors->any())
    <div >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
</body>
</html>