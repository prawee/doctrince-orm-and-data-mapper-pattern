<?php
/**
 * @link http://www.thaiyii.com
 * 2020-02-05 11:40
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */
require "bootstrap.php";
require "entities/Author.php";
require "entities/Post.php";

//Retrieve the author by its last name
$author = $entity_manager->getRepository('entities\Author')
    ->findOneBy(['last_name' => 'Wongsa']);

echo 'id='.$author->getId();
echo '<br/>name='.$author->getFirstName();
echo '<br/>posts='.print_r($author->getPosts());

//echo '<pre>'.print_r($author, true).'</pre>';
