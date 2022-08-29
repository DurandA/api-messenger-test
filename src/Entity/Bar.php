<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Action\NotFoundAction;

#[ApiResource(collectionOperations: [
        "post" => ["messenger" => true, "output" => false, "status" => 202]
    ], itemOperations: [
        //"get" => ["controller" => NotFoundAction::class, "read" => false, "status" => 404]
    ]
)]
class Bar
{
    public string $baz;
}