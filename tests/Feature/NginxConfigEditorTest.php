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
        $originalNginxConfig = file_get_contents('/-/vito/packages/php-nginx-parser/nginx.conf');

        $lexer = new NginxConfigLexer($originalNginxConfig);
        $parser = new Parser($lexer);

        try {
            $status = $parser->parse();
            $this->assertTrue($status);
        } catch (\Exception $e) {
            $this->fail($e);
        }


    }
}
