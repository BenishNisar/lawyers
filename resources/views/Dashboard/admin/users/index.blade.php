@extends("Layout.layouttwo")
<style>
    .profile-image {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #ddd;
    padding: 2px;
}

</style>
@section("AdminContent")

<style>
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .table-container {
        margin-left: 10px;
        margin-right: 10px;
    }

    .table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin-top: 15px;
        margin-bottom: 30px;
        padding-bottom: 10px;
    }

    .table {
        width: 100%;
        margin-bottom: 0;
    }

    .table th, .table td {
        padding: 10px 12px;
        font-size: 14px;
        white-space: nowrap;
        text-align: left;
    }


    .search-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-left: auto;
    }

    .search-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 50px;
    width: 250px;
    outline: none;
    font-size: 14px;
    transition: 0.3s;

}

.add-new-btn {
    background-color: #b10937;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    cursor: pointer;
    transition: 0.3s;
}

.add-new-btn:hover {
    background-color: #86092b;
    color: white;
}

/* Mobile & Tablet fix */
@media (max-width: 768px) {
    .search-container {
        flex-direction: column;
        align-items: stretch;
        width: 70%;
    }

    .search-input {
        display: none;
    }

    .add-new-btn {
        width: 70%;
        text-align: center;
    }
}

    .actions {
        display: flex;
        justify-content: center;
        gap: 5px;
    }

    .actions i {
        color: #86092b;
        cursor: pointer;
        transition: color 0.3s;
    }

    .actions i:hover {
        transform: scale(1.08);
        color: gray;
    }
    .profile-image {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 50%;
    border: 1px solid #ddd;
}

</style>

<div class="container-fluid mt-4 table-container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="font-size: 23px; font-weight: bolder;">Users</h1>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search Users...">
            <a href="{{ url('users/add') }}" class="add-new-btn">Add New </a>
        </div>
    </div>

    <div class="table-wrapper">
        <table class="table table-bordered table-striped">


                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Gender</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Profile_Image</th>
                                    <th>zip_code</th>
                                    <th>Role_id</th>

                                    <th>organization</th>

                                    <th>Actions</th> <!-- Add actions column -->
                                </tr>
                            </thead>



                            <tbody>
                                @foreach($users as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td> <!-- Sequential numbers instead of ID -->
                                        <td>{{ $item->firstname }}</td>
                                        <td>{{ $item->lastname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>******</td> <!-- Hide password -->
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>
                                            @if($item->profile_img)
                                                <img src="{{ asset($item->profile_img) }}" class="profile-image" alt="Profile Image">
                                            @else
                                                <img src="{{ asset('assets/profile_images/default.png') }}" class="profile-image" alt="No Image">
                                            @endif
                                        </td>

                                        <td>{{ $item->zip_code }}</td>
                                        <td>{{ $item->role_name }}</td>
                                        <td>{{ $item->organization }}</td>
                                        <td class="actions">
                                            <a href="{{ route('Dashboard.admin.users.view', $item->id) }}">
                                                <i class="fas fa-eye" title="View"></i>
                                            </a>
                                            <a href="{{ route('Dashboard.admin.users.edit', $item->id) }}">
                                                <i class="fas fa-edit" title="Edit"></i>
                                            </a>
                                            <form action="{{ route('Dashboard.admin.users.delete', $item->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="border: none; background: none; padding: 0;">
                                                    <i class="fas fa-trash-alt" title="Delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>



@endsection
