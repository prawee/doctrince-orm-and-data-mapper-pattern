<?php
/**
 * @link http://www.thaiyii.com
 * 2020-02-05 10:37
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */

namespace entities;

/**
 * Class Post
 * @package entities
 * @Entity
 * @Table(name="post")
 */
class Post
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $title;
    /**
     * @Column(type="text")
     */
    private $text;
    /**
     * @Column(type="datetime")
     */
    private $date;
}