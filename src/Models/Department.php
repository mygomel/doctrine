<?php
/**
 * Created by Maus 11.01.2019 16:40 mygomel@gmail.com
 */


namespace Models;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Department
 * @package Models
 *
 * @Entity
 * @Table(name="departments")
 */
class Department
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $title;

    /**
     * @OneToMany(targetEntity="Person", mappedBy="department")
     */
    protected $persons;

    public function __construct()
    {
        $this->persons = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPersons()
    {
        return $this->persons;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function addPerson($person)
    {
        $this->persons[] = $person;
    }

}