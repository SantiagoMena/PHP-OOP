<?php
use Php\PhpUnit\Str;

class StrTest extends PHPUnit\Framework\TestCase
{
    public function test_test()
    {
        $this->assertSame(
            'Name', 
            Str::studly('name'), 
            "Error, no convierte la cadena deseada name esperado Name"
        );

        $this->assertSame(
            'FullName', 
            Str::studly('full_name'), 
            "Error, no convierte la cadena deseada full_name esperado FullName"
        );

        $this->assertSame(
            'BirthDate', 
            Str::studly('birth_date'), 
            "Error, no convierte la cadena deseada birth_date esperado BirthDate"
        );
    }
}