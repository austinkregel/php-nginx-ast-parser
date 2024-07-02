<?php
namespace Kregel\NginxParser;

use Doctrine\Common\Lexer\AbstractLexer;
use Kregel\NginxParser\Exceptions\NginxSyntaxError;
use Kregel\NginxParser\Token;

class NginxConfigLexer extends AbstractLexer implements LexerInterface
{
    public ?Token $context = null;

    private array $contexts = [];
    public function __construct(string $resource)
    {
        $this->setInput($resource);
        $this->moveNext();
    }

    protected function getCatchablePatterns(): array
    {
        return [
            ';',
        ];
    }

    protected function getNonCatchablePatterns(): array
    {
        return [
            ' ',
            "\t",
            '[\n]+',
            '#[^\n]+',
        ];
    }

    protected function getType(&$value): int
    {
        if (in_array($value, [';', '{', '}'])) {
            $this->context = null;
            return ord($value);
        }

        $token = $this->matchToken($value);

        if($token === null && isset($this->context)) {
            /** @var int|null $nextValue */
            $nextValue = $this->context->nextToken;
            $this->context = null;
            // We want to try and match the token in case there is additional context after this token.
            // but if not, this sets the context to null.
            $token = $this->matchToken($nextValue);
        }

        if ($token?->nextToken) {
            // If the currently found token has a nextToken,
            $this->contexts[] = $this->context = $token;
        }

        if ($token) {
            return $token->token;
        }

        if (str_starts_with($value, '#')) {
            return ord($value);
        }

        if($token === null && isset($this->context)) {
            // Unlikely event that we have a context but no token ;likely means we have an incomplete grammar.y file.
            return tap($this->context->nextToken ?? 0, fn () => $this->context = null);
        }


        // So technically this is unknown territory. IDK why we would get here, but I
        // know that we do, and I know what I would expect for at least one of the cases.
        $lastContext =  end($this->contexts);
        if ($lastContext) {
            return $lastContext->nextToken ?? $lastContext->token ?? ord($value);
        }
//        throw new NginxSyntaxError('Unknown token: '. $value);
        dd('lame', $token, $this->context, $value, $e, $this->contexts);
    }

    public function yyerror(string $message): void
    {
        $input = explode("\n\r", $this->getInputUntilPosition($this->token->position));
        $lineNumber = count($input);

        dd(
            debug_backtrace(),
            $message .' on line '. $lineNumber.': '.$this->token->value .' '. $this->lookahead->value . $this->glimpse()->value,
            $this->token,
            $this->context,
            $this->glimpse(),
        );
    }
    public function getLVal()
    {
        return $this->token->value;
    }

    public function yylex(): int
    {
        if (!$this->lookahead) {
            return LexerInterface::YYEOF;
        }

        $this->moveNext();

        return $this->token->position;
    }

    protected function deprecatedGetValue($value)
    {
        switch ($value) {
            case 'server':
                $this->context = LexerInterface::T_SERVER;
                return LexerInterface::T_SERVER;
            case 'server_name':
                $this->context = LexerInterface::T_SERVER_NAME;
                return LexerInterface::T_SERVER_NAME;
            case '_':
                return LexerInterface::T_SERVER_NAME_VALUE;
            case 'listen':
                $this->context = LexerInterface::T_LISTEN;
                return LexerInterface::T_LISTEN;
            case 'deny':
            case 'allow':
                $this->context = LexerInterface::T_DENY;
                return LexerInterface::T_DENY;
            case 'default_server':
                $this->context = LexerInterface::T_LISTEN_VALUE_DEFAULT;
                return LexerInterface::T_LISTEN_VALUE_DEFAULT;
            case 'root':
                $this->context = LexerInterface::T_SERVER_ROOT;
                return LexerInterface::T_SERVER_ROOT;
            case 'location':
                $this->context = LexerInterface::T_LOCATION;
                return LexerInterface::T_LOCATION;
            case 'return':
                $this->context = LexerInterface::T_RETURN;
                return LexerInterface::T_RETURN;
            case 'error_log':
                $this->context = LexerInterface::T_ERROR_LOG;
                return LexerInterface::T_ERROR_LOG;
            case 'error_page':
                $this->context = LexerInterface::T_ERROR_PAGE;
                return LexerInterface::T_ERROR_PAGE;
            case 'rewrite':
                $this->context = LexerInterface::T_REWRITE;
                return LexerInterface::T_REWRITE;
            case 'index':
                $this->context = LexerInterface::T_INDEX;
                return LexerInterface::T_INDEX;
            case 'access_log':
                $this->context = LexerInterface::T_ACCESS_LOG;
                return LexerInterface::T_ACCESS_LOG;
            case 'fastcgi_pass':
                $this->context = LexerInterface::T_FAST_CGI_PATH;
                return LexerInterface::T_FAST_CGI_PATH;
            case 'fastcgi_split_path_info':
                $this->context = LexerInterface::T_FAST_CGI_SPLIT_PATH_INFO;
                return LexerInterface::T_FAST_CGI_SPLIT_PATH_INFO;
            case 'fastcgi_param':
                $this->context = LexerInterface::T_FAST_CGI_PARAM;
                return LexerInterface::T_FAST_CGI_PARAM;
            case 'fastcgi_hide_header':
                $this->context = LexerInterface::T_FAST_CGI_HIDE_HEADER;
                return LexerInterface::T_FAST_CGI_HIDE_HEADER;

            case 'include':
                $this->context = LexerInterface::T_INCLUDE;

                return LexerInterface::T_INCLUDE;
            case 'internal':
                $this->context = LexerInterface::T_INTERNAL;

                return LexerInterface::T_INTERNAL;
            case 'try_files':
                $this->context = LexerInterface::T_TRY_FILES;

                return LexerInterface::T_TRY_FILES;
            case 'add_header':
                $this->context = LexerInterface::T_ADD_HEADER;
                return LexerInterface::T_ADD_HEADER;
            case 'charset':
                $this->context = LexerInterface::T_CHARSET;
                return LexerInterface::T_CHARSET;
            case 'log_not_found':
                $this->context = LexerInterface::T_LOG_NOT_FOUND;
                return LexerInterface::T_LOG_NOT_FOUND;
            default:
                if (in_array($value, [';', '{'], true)) {
                    $this->context = 0;
                    return ord($value);
                }

                switch ($this->context) {
                    case LexerInterface::T_CHARSET;
                        return LexerInterface::T_CHARSET_VALUE;
                    case LexerInterface::T_LOCATION:
                        // Location paths can be all sorts of things.
                        if (strpos($value, '~') === 0) {
                            $this->context = LexerInterface::T_LOCATION_PATH_REGEXP;
                            return LexerInterface::T_LOCATION_PATH_REGEXP;
                        }

                        if (strpos($value, '=') === 0) {
                            $this->context = LexerInterface::T_LOCATION_PATH_EQUAL;
                            return LexerInterface::T_LOCATION_PATH_EQUAL;
                        }

                        return LexerInterface::T_LOCATION_PATH;
                    case LexerInterface::T_LOCATION_PATH_REGEXP:
                    case LexerInterface::T_LOCATION_PATH_EQUAL:
                        return LexerInterface::T_LOCATION_PATH;
                    case LexerInterface::T_RETURN:
                        $this->context = LexerInterface::T_RETURN_CODE;
                        return LexerInterface::T_RETURN_CODE;
                    case LexerInterface::T_LISTEN:
                        return LexerInterface::T_LISTEN_VALUE;
                    case LexerInterface::T_ERROR_PAGE:
                        $this->context = LexerInterface::T_ERROR_PAGE_CODE;
                        return LexerInterface::T_ERROR_PAGE_CODE;
                    case LexerInterface::T_ERROR_PAGE_CODE:
                        return LexerInterface::T_ERROR_PAGE_URI;
                    case LexerInterface::T_RETURN_CODE:
                        return LexerInterface::T_RETURN_BODY;
                    case LexerInterface::T_SERVER_ROOT:
                        return LexerInterface::T_SERVER_ROOT_PATH;
                    case LexerInterface::T_SERVER_NAME:
                        return LexerInterface::T_SERVER_NAME_VALUE;
                    case LexerInterface::T_LISTEN_VALUE:
                        $this->context = LexerInterface::T_LISTEN_VALUE;
                        return LexerInterface::T_LISTEN_VALUE_DEFAULT;
                    case LexerInterface::T_LISTEN_VALUE_DEFAULT;
                        $this->context = LexerInterface::T_LISTEN_VALUE_DEFAULT;
                        return LexerInterface::T_LISTEN_VALUE_DEFAULT;
                    case LexerInterface::T_ERROR_LOG:
                        return LexerInterface::T_ERROR_LOG_PATH;
                    case LexerInterface::T_ACCESS_LOG:
                        $this->context = LexerInterface::T_ACCESS_LOG_PATH;
                        return LexerInterface::T_ACCESS_LOG_PATH;
                    case LexerInterface::T_FAST_CGI_PATH:
                        return LexerInterface::T_FAST_CGI_PATH_PATH;
                    case LexerInterface::T_FAST_CGI_SPLIT_PATH_INFO:
                        return LexerInterface::T_FAST_CGI_SPLIT_PATH_INFO_PATH;
                    case LexerInterface::T_FAST_CGI_PARAM:
                        $this->context = LexerInterface::T_FAST_CGI_PARAM_KEY;
                        return LexerInterface::T_FAST_CGI_PARAM_KEY;
                    case LexerInterface::T_FAST_CGI_PARAM_KEY:
                        return LexerInterface::T_FAST_CGI_PARAM_VALUE;
                    case LexerInterface::T_INCLUDE:
                        return LexerInterface::T_INCLUDE_PATH;
                    case LexerInterface::T_TRY_FILES:
                    case LexerInterface::T_TRY_FILES_PATH:
                        return LexerInterface::T_TRY_FILES_PATH;
                    case LexerInterface::T_ADD_HEADER:
                        $this->context = LexerInterface::T_ADD_HEADER_KEY;
                        return LexerInterface::T_ADD_HEADER_KEY;
                    case LexerInterface::T_ADD_HEADER_KEY:
                        return LexerInterface::T_ADD_HEADER_VALUE;
                    case LexerInterface::T_INDEX;
                        return LexerInterface::T_INDEX_VALUE;
                    case LexerInterface::T_DENY: // Allow and deny are the same
                        return LexerInterface::T_DENY_VALUE;
                    case LexerInterface::T_LOG_NOT_FOUND:
                        return LexerInterface::T_LOG_NOT_FOUND_VALUE;
                    case LexerInterface::T_FAST_CGI_HIDE_HEADER:
                        return LexerInterface::T_FAST_CGI_HIDE_HEADER_KEY;
                }
        }

        return ord($value);
    }

    protected function matchToken(string|int|null $value): ?Token
    {
        return match($value) {
            'server' => new Token(
                $value,
                token: LexerInterface::T_SERVER,
            ),
            'server_name' => new Token(
                $value,
                token: LexerInterface::T_SERVER_NAME,
                nextToken: LexerInterface::T_SERVER_NAME_VALUE,
            ),
            '_' => new Token(
                $value,
                token: LexerInterface::T_SERVER_NAME_VALUE,
            ),
            'listen' => new Token(
                $value,
                token: LexerInterface::T_LISTEN,
                nextToken: LexerInterface::T_LISTEN_VALUE,
            ),
            'deny', 'allow' => new Token(
                $value,
                token: LexerInterface::T_DENY,
                nextToken: LexerInterface::T_DENY_VALUE,
            ),
            'default_server' => new Token(
                $value,
                token: LexerInterface::T_LISTEN_VALUE_DEFAULT,
            ),
            'root' => new Token(
                $value,
                token: LexerInterface::T_SERVER_ROOT,
                nextToken: LexerInterface::T_SERVER_ROOT_PATH,
            ),
            'location' => new Token(
                $value,
                token: LexerInterface::T_LOCATION,
            ),
            'return' => new Token(
                $value,
                token: LexerInterface::T_RETURN,
                nextToken: LexerInterface::T_RETURN_CODE,
            ),
            'error_log' => new Token(
                $value,
                token: LexerInterface::T_ERROR_LOG,
                nextToken: LexerInterface::T_ERROR_LOG_PATH,
            ),
            'error_page' => new Token(
                $value,
                token: LexerInterface::T_ERROR_PAGE,
                nextToken: LexerInterface::T_ERROR_PAGE_CODE,
            ),
            'rewrite' => new Token(
                $value,
                token: LexerInterface::T_REWRITE,
                nextToken: LexerInterface::T_REWRITE_REPLACEMENT,
            ),
            'index' => new Token(
                $value,
                token: LexerInterface::T_INDEX,
                nextToken: LexerInterface::T_INDEX_VALUE,
            ),
            'access_log' => new Token(
                $value,
                token: LexerInterface::T_ACCESS_LOG,
                nextToken: LexerInterface::T_ACCESS_LOG_PATH,
            ),
            'fastcgi_pass' => new Token(
                $value,
                token: LexerInterface::T_FAST_CGI_PATH,
                nextToken: LexerInterface::T_FAST_CGI_PATH_PATH,
            ),
            'fastcgi_split_path_info' => new Token(
                $value,
                token: LexerInterface::T_FAST_CGI_SPLIT_PATH_INFO,
                nextToken: LexerInterface::T_FAST_CGI_SPLIT_PATH_INFO_PATH,
            ),
            'fastcgi_param' => new Token(
                $value,
                token: LexerInterface::T_FAST_CGI_PARAM,
                nextToken: LexerInterface::T_FAST_CGI_PARAM_KEY,
            ),
            'fastcgi_hide_header' => new Token(
                $value,
                token: LexerInterface::T_FAST_CGI_HIDE_HEADER,
                nextToken: LexerInterface::T_FAST_CGI_HIDE_HEADER_KEY,
            ),
            'include' => new Token(
                $value,
                token: LexerInterface::T_INCLUDE,
                nextToken: LexerInterface::T_INCLUDE_PATH,
            ),
            'internal' => new Token(
                $value,
                token: LexerInterface::T_INTERNAL,
            ),
            'try_files' => new Token(
                $value,
                token: LexerInterface::T_TRY_FILES,
                nextToken: LexerInterface::T_TRY_FILES_PATH,
            ),
            'add_header' => new Token(
                $value,
                token: LexerInterface::T_ADD_HEADER,
                nextToken: LexerInterface::T_ADD_HEADER_KEY,
            ),
            'charset' => new Token(
                $value,
                token: LexerInterface::T_CHARSET,
                nextToken: LexerInterface::T_CHARSET_VALUE,
            ),
            'log_not_found' => new Token(
                $value,
                token: LexerInterface::T_LOG_NOT_FOUND,
                nextToken: LexerInterface::T_LOG_NOT_FOUND_VALUE,
            ),
            'user' => new Token(
                $value,
                token: LexerInterface::T_USER,
                nextToken: LexerInterface::T_USER_VALUE,
            ),
            'group' => new Token(
                $value,
                token: LexerInterface::T_GROUP,
                nextToken: LexerInterface::T_GROUP_VALUE,
            ),
            'worker_processes' => new Token(
                $value,
                token: LexerInterface::T_WORKER_PROCESSES,
                nextToken: LexerInterface::T_WORKER_PROCESSES_VALUE,
            ),
            'pid' => new Token(
                $value,
                token: LexerInterface::T_PID,
                nextToken: LexerInterface::T_PID_VALUE,
            ),
            'worker_connections' => new Token(
                $value,
                token: LexerInterface::T_WORKER_CONNECTIONS,
                nextToken: LexerInterface::T_WORKER_CONNECTIONS_VALUE,
            ),
            'multi_accept' => new Token(
                $value,
                token: LexerInterface::T_MULTI_ACCEPT,
                nextToken: LexerInterface::T_MULTI_ACCEPT_VALUE,
            ),
            'events' => new Token(
                $value,
                token: LexerInterface::T_EVENTS,
            ),
            'http' => new Token(
                $value,
                token: LexerInterface::T_HTTP,
            ),
            'sendfile' => new Token(
                $value,
                token: LexerInterface::T_SENDFILE,
                nextToken: LexerInterface::T_SENDFILE_VALUE,
            ),
            'types_hash' => new Token(
                $value,
                token: LexerInterface::T_TYPES_HASH,
                nextToken: LexerInterface::T_TYPES_HASH_VALUE
            ),
            'types_hash_max_size' => new Token(
                $value,
                token: LexerInterface::T_TYPES_HASH_MAX_SIZE,
                nextToken: LexerInterface::T_TYPES_HASH_MAX_SIZE_VALUE
            ),
            'server_tokens' => new Token(
                $value,
                token: LexerInterface::T_SERVER_TOKENS,
                nextToken: LexerInterface::T_SERVER_TOKENS_VALUE
            ),
            'server_names_hash_bucket_size' => new Token(
                $value,
                token: LexerInterface::T_SERVER_NAMES_HASH_BUCKET_SIZE,
                nextToken: LexerInterface::T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE
            ),
            'ssl_protocols' => new Token(
                $value,
                token: LexerInterface::T_SSL_PROTOCOLS,
                nextToken: LexerInterface::T_SSL_PROTOCOLS_VALUE
            ),
            'ssl_prefer_server_ciphers' => new Token(
                $value,
                token: LexerInterface::T_SSL_PREFER_SERVER_CIPHERS,
                nextToken: LexerInterface::T_SSL_PREFER_SERVER_CIPHERS_VALUE
            ),
            'tcp_nopush' => new Token(
                $value,
                token: LexerInterface::T_TCP_NOPUSH,
                nextToken: LexerInterface::T_TCP_NOPUSH_VALUE
            ),
            'default_type' => new Token(
                $value,
                token: LexerInterface::T_DEFAULT_TYPE,
                nextToken: LexerInterface::T_DEFAULT_TYPE_VALUE
            ),
            LexerInterface::T_SSL_PROTOCOLS_VALUE => new Token(
                $value,
                token: LexerInterface::T_SSL_PROTOCOLS_VALUE,
                nextToken: LexerInterface::T_SSL_PROTOCOLS_VALUE2,
            ),
            LexerInterface::T_SSL_PROTOCOLS_VALUE2 => new Token(
                $value,
                token: LexerInterface::T_SSL_PROTOCOLS_VALUE2,
                nextToken: LexerInterface::T_SSL_PROTOCOLS_VALUE3,
            ),
            LexerInterface::T_SSL_PROTOCOLS_VALUE3 => new Token(
                $value,
                token: LexerInterface::T_SSL_PROTOCOLS_VALUE3,
                nextToken: LexerInterface::T_SSL_PROTOCOLS_VALUE4,
            ),
            'gzip' => new Token(
                $value,
                token: LexerInterface::T_GZIP,
                nextToken: LexerInterface::T_GZIP_VALUE,
            ),
            LexerInterface::T_USER_VALUE => new Token(
                $value,
                token: LexerInterface::T_USER_VALUE,
            ),
            default => null,
        };
    }
}
