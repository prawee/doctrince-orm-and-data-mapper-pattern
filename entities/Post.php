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

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
