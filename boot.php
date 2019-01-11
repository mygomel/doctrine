<?php
/**
 * Created by Maus 11.01.2019 4:47 mygomel@gmail.com
 */
 
 require __DIR__.'/vendor/autoload.php';


 $paths = [__DIR__.'/src'];
 
 $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($paths, true);

 $connection = [
     'driver' => 'pdo_mysql',
     'user' => 'root',
     'password' => '',
     'dbname' => 'doctrine'
 ];

 $entityManager = \Doctrine\ORM\EntityManager::create($connection, $config);

 //var_dump($entityManager);