@include('adminnav')

<main class="main" id="main">
    <h1>All Users</h1>
    <table class="table table-hover mt-5">
        <thead>
            <th>Sr no.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Mobile Number</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->mobileno }}</td>
                </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
</main>

@include('adminfooter')
