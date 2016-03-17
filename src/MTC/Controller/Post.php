<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/03/16
 * Time: 10:48
 */

namespace MTC\Controller;

use MTC\Tools\Config;
use MTC\DB\Database;
use MTC\Model\Post as ModelPost;
use MTC\Renderer\PhpRenderer;

class Post
{
    public function listAction()
    {
        $config = Config::getInstance();
        $config->parseFile(CONFIG_DIR . '/config.ini');
        $db = new Database($config->host, $config->user, $config->pass, $config->name);

        $post = new ModelPost($db->getConnection());

        if(!empty($_POST)){
            $post->insert($_POST);
        }

        $posts = $post->fetchAll();

        $renderer = new PhpRenderer(VIEW_DIR. '/post/PostList.tpl.php');
        $renderer->assign('posts',$posts);
        $renderer->render();
    }

}