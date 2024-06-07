<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách User </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Danh sách User</h1>
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
</body>

</html>