<?php
/**
 * @link http://www.thaiyii.com
 * 2020-02-05 10:13
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */
namespace entities;

/**
 * Class Author
 * @package entities
 * @Entity
 * @Table(name="author")
 */
class Author
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
    private $first_name;
    /**
     * @Column(type="string")
     */
    private $last_name;
}