<?php
use Php\PhpUnit\Model;

class ModelArrayAccessTest  extends PHPUnit\Framework\TestCase
{
    public function test_offset_get()
    {
        $user = new class([
            'first_name' => 'Santiago',
            'last_name' => 'Mena',
            'age' => 27,
        ]) extends Model{

        };

        $this->assertSame('Santiago', $user['first_name']);
        $this->assertSame('Mena', $user['last_name']);
        $this->assertSame('27', $user['age']);
    }

    public function test_offset_exist()
    {
        $user = new class([
            'first_name' => 'Santiago',
        ]) extends Model {

        };

        $this->assertTrue(isset($user->first_name));
        $this->assertFalse(empty($user->first_name));
        $this->assertFalse(isset($user->last_name));
        $this->assertTrue(empty($user->last_name));

    }

    /** @test */
    public function it_set_adn_get_values_with_array_access()
    {
        $user = new class() extends Model{};
        $user['first_name'] = 'Santiago';

        $this->assertSame('Santiago', $user->first_name);

    }

    public function test_offset_unset()
    {
        $user = new class extends Model{};
        $user['first_name'] = 'Santiago';

        $this->assertTrue((isset($user['first_name'])));

        unset($user['first_name']);

        $this->assertFalse(isset($user['first_name']));
    }
}

class UserTest extends Model
{
    
}