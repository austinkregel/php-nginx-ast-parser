<?php
declare(strict_types=1);

namespace Kregel\NginxParser;

class NginxConfigEditor
{
    public function __construct(
       public Parser $parser,
    ) {}
    public function addServerToUpstream(
        string $siteName,
        string $upstreamName,
        string $upstreamServer,
        int $upstreamPort,
        string $upstreamProtocol = 'http'
    ){
        $this->parser->getUpstreams();
    }

    public function addSite(
        string $domain,
        array $aliases = [],
        string $port = '80',
        string $root = '/var/www/html',
        string $index = 'index.php',
        array $headers = [],
        string $charset = 'utf-8',
        // we will automatically handle SSL if enabled.
        bool $ssl = false,
    ) {
    }
    public function removeSite(string $domain) {
    }

    public function updateSsl(string $domain, bool $ssl) {
    }

}
