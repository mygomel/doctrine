<?php
/**
 * Created by Maus 11.01.2019 5:21 mygomel@gmail.com
 */

require __DIR__.'/boot.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);