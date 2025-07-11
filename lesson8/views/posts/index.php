<h2>Danh sách bài viết</h2>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post) : ?>
        <tr>
            <td><?php echo $post->id; ?></td>
            <td><?php echo $post->title; ?></td>
            <td><?php echo $post->content; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>