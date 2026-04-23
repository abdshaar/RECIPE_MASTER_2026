<?php


namespace App\Models\RecipesModel;


use \PDO;


function findOneByRand(PDO $conn): array
{
    $sql = "SELECT *
            FROM recipes
            ORDER BY RAND()
            LIMIT 1;";
    $rs = $conn->query($sql);
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function findManyByRand(PDO $conn): array
{
    $sql = "SELECT *
            FROM recipes
            ORDER BY rand()
            LIMIT 3;";
            
    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
