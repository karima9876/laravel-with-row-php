<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <table border="1" width="100%">
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post){ ?>
            <tr>
                <td><?php echo $post->id;?></td>
                <td><?php echo $post->title;?></td>
                <td><?php echo $post->details;?></td>
                <td>Show || Edit || Delete</td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
    
</body>
</html>