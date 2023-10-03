<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới bài hát</title>
</head>
<body>
    <h1>Thêm mới bài hát</h1>
    <!-- Form để thêm mới bài hát -->
    <form action="process_add_song.php" method="post">
        <!-- Đưa ra các trường để nhập thông tin của bài hát -->
        <!-- Ví dụ: -->
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="artist">Nghệ sĩ:</label>
        <input type="text" name="artist" id="artist" required><br>

        <input type="submit" value="Thêm">
    </form>
    <p><a href="index.php">Trở về trang chính</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin bài hát</title>
</head>
<body>
    <h1>Chỉnh sửa thông tin bài hát</h1>
    <!-- Form để chỉnh sửa thông tin của bài hát -->
    <form action="process_edit_song.php" method="post">
        <!-- Đưa ra các trường để chỉnh sửa thông tin của bài hát -->
        <!-- Ví dụ: -->
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="artist">Nghệ sĩ:</label>
        <input type="text" name="artist" id="artist" required><br>

        <input type="submit" value="Lưu">
    </form>
    <p><a href="index.php">Trở về trang chính</a></p>
</body>
</html>