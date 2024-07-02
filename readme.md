# Nginx AST Parser 
This project is built using bison and php to parse nginx config files 

# Goal?
The ultimate goal is a simple interface to change features of the nginx config file, without needing to worry about unsupported configs or manual edits.

```
use Kregel\NginxParser\NginxConfigLexer;
use Kregel\NginxParser\Parser;

$originalNginxConfig = file_get_contents('/etc/nginx/nginx.conf');

$lexer = new NginxConfigLexer($originalNginxConfig);
$parser = new Parser($lexer);

try {
    $status = $parser->parse();
    // todo: make an editing api...
    dd($parser->getServers());
    
} catch (\Exception $e) {
    // Syntax errors will be exceptions, as will unsupported options.
    echo $e->getMessage();
}
```

# How to build from source

```bash
git clone https://github.com/austinkregel/php-nginx-ast-parser
cd php-nginx-ast-parser
#bison -S vendor/mrsuh/php-bison-skeleton/src/php-skel.m4 -o src/Parser.php grammar.y
make
make test
```

