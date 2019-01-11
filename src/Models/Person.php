<?php
/**
 * Created by Maus 11.01.2019 5:06 mygomel@gmail.com
 */

namespace Models;
/**
 * @Entity
 * @Table(name="persons")
 */
class Person
{
    /**
     * @id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;
    /**
     * @Column(type="string")
     */
    protected $name;

    /**
     * @Column(type="integer")
     */
    protected $age;

    /**
     * @ManyToOne(targetEntity="Department", inversedBy="persons")
     */
    protected $department;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }
}