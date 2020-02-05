<?php
/**
 * @link http://www.thaiyii.com
 * 2020-02-05 11:30
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */
require "bootstrap.php";
require "entities/Author.php";
require "entities/Post.php";

//Create and persist a new Author
$author = (new entities\Author())
    ->setFirstName("Prawee")
    ->setLastName("Wongsa");
$entity_manager->persist($author);

//Create a new post
$post = (new \entities\Post())
    ->setTitle("Hello Wold")
    ->setText("This is a test post")
    ->setAuthor($author)
    ->setDate(new DateTime());

//Add the post to list the author posts. Since we used cascade={"all"},
//we don't need to persist the post separately: it will be persisted when persisting the Author
$author->addPost($post);

//Finally flush and execute the database transaction
$entity_manager->flush();
