<?php

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/dashboard')
             ->see('Dashboard')
             ->dontSee('foo');
    }
}
