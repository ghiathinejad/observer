<?php

namespace test;


use NewsLetter;
use Subscriber;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require __DIR__ . '/../NewsLetter.php';
        require __DIR__ . '/../Subscriber.php';
    }

    public function testNewsLetterName()
    {
        $newsLetter = new NewsLetter('quera');
        $this->assertSame('quera', $newsLetter->getName());
    }

    public function testAttach()
    {
        $newsLetter = new NewsLetter('quera');

        $subscriber1 = new Subscriber('amooati');

        $newsLetter->attach($subscriber1);

        $this->assertTrue($newsLetter->observers->contains($subscriber1));
    }

}