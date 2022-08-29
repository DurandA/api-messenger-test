<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Action\NotFoundAction;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource(collectionOperations: [
        "post" => ["messenger" => true, "output" => false, "status" => 202]
    ], itemOperations: [
        //"get" => ["controller" => NotFoundAction::class, "read" => false, "status" => 404]
    ]
)]
#[ORM\Entity]
class Foo
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    public string $baz;
}