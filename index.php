<?php
/**
 * Created by Maus 11.01.2019 4:52 mygomel@gmail.com
 */
 
require __DIR__.'/boot.php';







// Пример DQL
$query = $entityManager->createQuery('SELECT p.id FROM Person p');
$data = $query->execute();




// Создание записи с внешним ключом
$department = new \Models\Department();
$department->setTitle('Отдел продаж');

$person = new \Models\Person();
$person->setName('Сидорова')->setAge(25)->setDepartment($department);

$entityManager->persist($department);
$entityManager->persist($person);

$entityManager->flush();



/*
// Поиск/изменение записи
$repository = $entityManager->getRepository(\Models\Person::class);

$person = $repository->find(2);


$person->setAge(25);
$entityManager->flush();

$person2 = $entityManager->find(\Models\Person::class, 2);*/

/*
// Создание новой записи
$person = new \Models\Person();

$person->setName('Петров')->setAge(19);

$entityManager->persist($person); // возьми под свой контроль

$entityManager->flush(); // все изменения сбрасывает в базу данных


echo $person->getId();*/