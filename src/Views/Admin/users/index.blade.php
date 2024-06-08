@extends('layouts.master')
@section('title')
Danh sách User
@endsection
@section('content')
<table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Avata</th>
                <th>Email</th>
                <th>Password</th>
                <th>Creater at</th>
                <th>Update at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <?= $user['id'] ?>
                    </td>
                    <td>
                        <?= $user['name'] ?>
                    </td>
                    <td>
                    </td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                    </td>
                    <td>
                        <?= $user['created_at'] ?>
                    </td>
                    <td>
                        <?= $user['update_at'] ?>
                    </td>
                    <td>

                        <form action=" {{ url('admin/users/ ' . $user['id'].'/delete') }}" method="post">
                            <button onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection