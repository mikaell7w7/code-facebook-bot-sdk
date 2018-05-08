<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;

class CallSendApitTest extends \Tests\TestCase
{
    public function testMakeRequest()
    {
        (new Text(1))->message('Oiii');
        (new CallSendApi('28sj82'))->make();
    }
}