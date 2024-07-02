<?php

namespace Kregel\NginxParser\Tests\Feature;

use Kregel\NginxParser\NginxConfigEditor;
use Kregel\NginxParser\NginxConfigLexer;
use Kregel\NginxParser\Parser;
use Kregel\NginxParser\Tests\TestCase;

class NginxConfigEditorTest extends TestCase
{
    public function testAddSiteToNginx()
    {
        $originalNginxConfig = file_get_contents('tests/example-configs/vito.example.com.conf');
        try {
            /**
             * @var NginxConfigEditor $editor
             * @var NginxConfigLexer $lexer
             */
            [$parser, $lexer] = Parser::instance($originalNginxConfig);
            $this->assertTrue(true);
        } catch (\Exception $e) {
            $this->fail($e);
        }
    }
}
