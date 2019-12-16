<?php

namespace Djunehor\Env\Test;

use Djunehor\Logos\ExportCommand;
use Djunehor\Logos\Facades\BibleFacade;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class EnvExportTest extends TestCase
{
    public static function setUpBeforeClass() : void
    {
        copy('.env.testing', '.env');
    }

    public static function tearDownAfterClass() : void
    {
        unlink('.env');
    }

    public function testHelperWithDefaults()
    {
        $this->assertTrue(export_env());
        $this->assertFileExists('.env.example');
        unlink('.env.example');
    }

    public function testFailFileNotExist()
    {
        $this->expectException(\Exception::class);
        $this->assertTrue(export_env('.envs'));
    }

    public function testHelperWithSpecifiedTo()
    {
        $this->assertTrue(export_env('.env', '.env.samuel'));
        $this->assertFileExists('.env.samuel');
        unlink('.env.samuel');
    }

    /**
     * Using assert false just to prevent PHPUnit
     * from complaining
     */
    public function testCommandDefaults()
    {
        $this->assertFalse((bool) Artisan::call('env:export'));
        $this->assertFileExists('.env.example');
        unlink('.env.example');
    }

    public function testCommandWithShortParams()
    {
        $this->assertFalse((bool) Artisan::call('env:export', ['-f' => '.env', '-t' => '.env.jerry']));
        $this->assertFileExists('.env.jerry');
        unlink('.env.jerry');
    }

    public function testCommandWithLongParams()
    {
        $this->assertFalse((bool) Artisan::call('env:export', ['--from' => '.env', '--to' => '.env.aaron']));
        $this->assertFileExists('.env.aaron');
        unlink('.env.aaron');
    }

    public function testCommandFailWitWrongEnv()
    {
        $this->expectException(\Exception::class);
        $this->assertFalse((bool) Artisan::call('env:export', ['--from' => '.environment', '--to' => '.env.johndoe']));
    }
}
