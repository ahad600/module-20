<!DOCTYPE html>
<html>
    <head>
        <title>Update Contact</title>
    </head>
    <body>
    <div class="container">

        <h1>Edit Contact</h1>

        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Name:</label>
            <input type="text" name="name" value="{{ $contact->name }}" required><br/><br/>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $contact->email }}" required><br/><br/>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $contact->phone }}"><br/><br/>
            <label>Address:</label>
            <input type="text" name="address" value="{{ $contact->address }}"><br/><br/>
            <button type="submit">Update</button>
        </form>
    </div>
    </body>
</html>