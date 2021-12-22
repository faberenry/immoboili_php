<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AnnuncioTest extends TestCase
{
    public function testCanBeCreatedFromValidThing(): void
    {
        $this->$_GET(
            "inserisciMessaggio.inc.php?corpo='messaggio di prova'&destinatario=username1"
        );
    }
}

