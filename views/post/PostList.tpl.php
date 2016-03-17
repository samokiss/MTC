<?php foreach($posts as $post) {?>
    <h1><?=htmlentities($post['title'])?></h1>
    <p><?='le '. $post['date']?></p>
    <p><?=htmlentities($post['text'])?></p>
    <hr>
<?php }?>

<form action="." method="post">
    <p>
        <label for="title">Title</label>
        <input type="text" id="title" name="title"/>
    </p>
    <p>
        <label for="text">Text</label>
        <input type="text" id="text" name="text"/>
    </p>
    <input type="submit"/>
</form>

<!--<div>-->
<!--    <table>-->
<!--        <tr>-->
<!--            <th>Title</th>-->
<!--            <th>Text</th>-->
<!--            <th>Date</th>-->
<!--        </tr>-->
<!--        --><?php //foreach($posts as $post) {?>
<!--        <tr>-->
<!--            <td>--><?//=$post['title']?><!--</td>-->
<!--            <td>--><?//=$post['text']?><!--</td>-->
<!--            <td>--><?//=$post['date']?><!--</td>-->
<!--        </tr>-->
<!--        --><?php //}?>
<!--    </table>-->
<!--</div>-->
