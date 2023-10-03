<!DOCTYPE html>
<html>
<head>
    <title>Xóa bài hát</title>
</head>
<body>
    <h1>Xóa bài hát</h1>
    <p>Bạn có chắc chắn muốn xóa bài hát này?</p>
    <!-- Form để xác nhận xóa bài hát -->
    <form action="process_delete_song.php" method="post">
        <input type="hidden" name="id" value="1"><!-- Thay đổi giá trị id tương ứng -->

        <input type="submit" value="Xóa">
    </form>
    <p><a href="index.php">Trở về trang chính</a></p>
</body>
</html>