%define api.parser.class {Parser}
%define api.namespace {Kregel\NginxParser}

%code parser {
    protected ?Node $ast = null;
    protected array $servers = [];
    protected array $root = [];
    public static function instance(string $input): array {
        $instance = new self($lexer = new NginxConfigLexer($input));
        $instance->parse();
        return [$instance, $lexer];
    }
    public function setAst(Node $ast): void {
        if ($ast->getName() === 'T_SERVER') {
            $this->servers[] = $ast;
        }

        $this->ast = $ast;
    }
    public function getServers(): array { return $this->servers; }
}

%token T_SERVER
%token T_LISTEN
%token T_LISTEN_VALUE
%token T_LISTEN_VALUE_DEFAULT;
%token T_SERVER_NAME
%token T_SERVER_NAME_VALUE
%token T_SERVER_ROOT
%token T_SERVER_ROOT_PATH
%token T_LOCATION
%token T_LOCATION_PATH
%token T_LOCATION_PATH_REGEXP
%token T_RETURN
%token T_RETURN_CODE
%token T_RETURN_BODY
%token T_REWRITE
%token T_REWRITE_REGEX
%token T_REWRITE_REPLACEMENT
%token T_REWRITE_FLAG
%token T_ERROR_LOG
%token T_ERROR_LOG_PATH
%token T_ACCESS_LOG
%token T_ACCESS_LOG_PATH
%token T_FAST_CGI_PATH
%token T_FAST_CGI_PATH_PATH
%token T_FAST_CGI_SPLIT_PATH_INFO
%token T_FAST_CGI_SPLIT_PATH_INFO_PATH
%token T_FAST_CGI_PARAM
%token T_FAST_CGI_PARAM_KEY
%token T_FAST_CGI_PARAM_VALUE
%token T_FAST_CGI_HIDE_HEADER
%token T_FAST_CGI_HIDE_HEADER_KEY
%token T_INCLUDE
%token T_INCLUDE_PATH
%token T_INTERNAL
%token T_TRY_FILES
%token T_TRY_FILES_PATH
%token T_ADD_HEADER
%token T_ADD_HEADER_KEY
%token T_ADD_HEADER_VALUE
%token T_INDEX
%token T_INDEX_VALUE
%token T_CHARSET
%token T_CHARSET_VALUE
%token T_ERROR_PAGE
%token T_ERROR_PAGE_CODE
%token T_ERROR_PAGE_URI
%token T_DENY
%token T_DENY_VALUE
%token T_LOCATION_PATH_EQUAL
%token T_LOG_NOT_FOUND
%token T_LOG_NOT_FOUND_VALUE
%token T_USER
%token T_USER_VALUE
%token T_GROUP
%token T_GROUP_VALUE
%token T_WORKER_PROCESSES
%token T_WORKER_PROCESSES_VALUE
%token T_PID
%token T_PID_VALUE
%token T_EVENTS
%token T_MULTI_ACCEPT
%token T_MULTI_ACCEPT_VALUE
%token T_WORKER_CONNECTIONS
%token T_WORKER_CONNECTIONS_VALUE
%token T_GZIP
%token T_GZIP_VALUE
%token T_SENDFILE
%token T_SENDFILE_VALUE
%token T_TYPES_HASH
%token T_TYPES_HASH_VALUE
%token T_SERVER_TOKENS
%token T_SERVER_TOKENS_VALUE
%token T_SERVER_NAMES_HASH_BUCKET_SIZE
%token T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE
%token T_SSL_PROTOCOLS
%token T_SSL_PROTOCOLS_VALUE
%token T_SSL_PROTOCOLS_VALUE2
%token T_SSL_PROTOCOLS_VALUE3
%token T_SSL_PROTOCOLS_VALUE4
%token T_SSL_PREFER_SERVER_CIPHERS
%token T_SSL_PREFER_SERVER_CIPHERS_VALUE
%token T_HTTP
%token T_TCP_NOPUSH
%token T_TCP_NOPUSH_VALUE
%token T_TYPES_HASH_MAX_SIZE
%token T_TYPES_HASH_MAX_SIZE_VALUE
%token T_DEFAULT_TYPE
%token T_DEFAULT_TYPE_VALUE

%%
main:
  user
| servers
| http
| group
| worker_processes
| pid
| events
| %empty
;

servers:
  servers server { $$[] = $2; }
| server { $$ = [$1]; }
;

events:
  T_EVENTS '{' event_body_list '}' { $$ = new Node('T_EVENTS', [], $2); }
;
event_body_list:
  worker_connections
| multi_accept
| %empty
;
server_body:
  T_SERVER_NAME server_name_values ';'  { $$ = new Node('T_SERVER_NAME', ['names' => $2]); }
| T_SERVER_ROOT T_SERVER_ROOT_PATH ';'  { $$ = new Node('T_SERVER_ROOT', ['path' => $2]); }
| error_log
| T_LOCATION location_optional_regexp_path T_LOCATION_PATH '{' location_body_list '}' { $$ = new  Node('T_LOCATION', ['regexp' => $2, 'path' => $3], $5); }
| T_LOCATION T_LOCATION_PATH_EQUAL T_LOCATION_PATH '{' location_body_list '}' { $$ = new  Node('T_LOCATION', ['regexp' => $2, 'path' => $3], $5); }
| listen
| add_header
| index
| charset
| error_page
| deny
| include
| return
| rewrite
| log_not_found
| access_log
;

location_body:
  T_RETURN T_RETURN_CODE optional_return_body ';'                  { $$ = new Node('T_RETURN', ['code' => $2, 'body' => $3]); }
| T_FAST_CGI_PATH T_FAST_CGI_PATH_PATH ';'                         { $$ = new Node('T_FAST_CGI_PATH', ['path' => $2]); }
| T_FAST_CGI_SPLIT_PATH_INFO T_FAST_CGI_SPLIT_PATH_INFO_PATH ';'   { $$ = new Node('T_FAST_CGI_SPLIT_PATH_INFO', ['path' => $2]); }
| T_FAST_CGI_PARAM T_FAST_CGI_PARAM_KEY T_FAST_CGI_PARAM_VALUE ';' { $$ = new Node('T_FAST_CGI_PARAM', [$2 => $3]); }
| T_INCLUDE T_INCLUDE_PATH ';'                                     { $$ = new Node('T_INCLUDE', ['path' => $2]); }
| T_INTERNAL ';'                                                   { $$ = new Node('T_INTERNAL'); }
| T_TRY_FILES try_files_path_list ';'                              { $$ = new Node('T_TRY_FILES', [ 'paths' => $2 ]); }
| deny
| hide_header
| add_header
| error_page
| access_log
| log_not_found
;

http_body:
  %empty
| servers
| sendfile
| types_hash
| server_tokens
| server_names_hash_bucket_size
| ssl_protocols
| ssl_prefer_server_ciphers
| access_log
| error_log
| gzip
| include
| tcp_nopush
| default_type
;
// Helpers

worker_processes:
  T_WORKER_PROCESSES T_WORKER_PROCESSES_VALUE ';' { $$ = new Node('T_WORKER_PROCESSES', ['value' => $2]); }
;

http:
  T_HTTP '{' http_body '}' { $$ = new Node('T_HTTP', [], $2); }
;
worker_connections:
   T_WORKER_CONNECTIONS T_WORKER_CONNECTIONS_VALUE ';' { $$ = new Node('T_WORKER_CONNECTIONS', ['value' => $2]); }
;
tcp_nopush:
  T_TCP_NOPUSH T_TCP_NOPUSH_VALUE ';' { $$ = new Node('T_TCP_NOPUSH', ['value' => $2]); }
;

server:
  T_SERVER '{' server_body_list '}' { static::setAst(new Node('T_SERVER', [], $2)); }
;
pid:
  T_PID T_PID_VALUE ';' { $$ = new Node('T_PID', ['value' => $2]); }
;
rewrite:
  T_REWRITE T_REWRITE_REGEX T_REWRITE_REPLACEMENT T_REWRITE_FLAG ';' { $$ = new Node('T_REWRITE', ['regex' => $2, 'replacement' => $3, 'flag' => $4]); }
;
deny:
  T_DENY T_DENY_VALUE ';' { $$ = new Node('T_DENY', ['value' => $2]); }
;
hide_header:
    T_FAST_CGI_HIDE_HEADER T_FAST_CGI_HIDE_HEADER_KEY ';' { $$ = new Node('T_FAST_CGI_HIDE_HEADER', ['key' => $2]); }
;
gzip:
  T_GZIP T_GZIP_VALUE ';' { $$ = new Node('T_GZIP', ['value' => $2]); }
;
sendfile:
  T_SENDFILE T_SENDFILE_VALUE ';' { $$ = new Node('T_SENDFILE', ['value' => $2]); }
;
types_hash:
  T_TYPES_HASH T_TYPES_HASH_VALUE ';' { $$ = new Node('T_TYPES_HASH', ['value' => $2]); }
;
server_tokens:
  T_SERVER_TOKENS T_SERVER_TOKENS_VALUE ';' { $$ = new Node('T_SERVER_TOKENS', ['value' => $2]); }
;
server_names_hash_bucket_size:
  T_SERVER_NAMES_HASH_BUCKET_SIZE T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE ';' { $$ = new Node('T_SERVER_NAMES_HASH_BUCKET_SIZE', ['value' => $2]); }
;
ssl_protocols:
  T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE ';' { $$ = new Node('T_SSL_PROTOCOLS', ['value' => $2]); }
| T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE T_SSL_PROTOCOLS_VALUE2 ';' { $$ = new Node('T_SSL_PROTOCOLS', ['value' => [$2, $3]]); }
| T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE T_SSL_PROTOCOLS_VALUE2 T_SSL_PROTOCOLS_VALUE3 ';' { $$ = new Node('T_SSL_PROTOCOLS', ['value' => [$2, $3, $4]]); }
| T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE T_SSL_PROTOCOLS_VALUE2 T_SSL_PROTOCOLS_VALUE3 T_SSL_PROTOCOLS_VALUE4 ';' { $$ = new Node('T_SSL_PROTOCOLS', ['value' => [$2, $3, $4, $5]]); }
;
ssl_prefer_server_ciphers:
   T_SSL_PREFER_SERVER_CIPHERS T_SSL_PREFER_SERVER_CIPHERS_VALUE ';' { $$ = new Node('T_SSL_PREFER_SERVER_CIPHERS', ['value' => [$2]]); }
;

default_type:
  T_DEFAULT_TYPE T_DEFAULT_TYPE_VALUE ';' { $$ = new Node('T_DEFAULT_TYPE', ['value' => $2]); }
;

listen:
  T_LISTEN T_LISTEN_VALUE ';' { $$ = new Node('T_LISTEN', ['value' => $2]); }
| T_LISTEN T_LISTEN_VALUE T_LISTEN_VALUE_DEFAULT ';' { $$ = new Node('T_LISTEN', ['value' => $2, 'default_server' => true]); }
;
server_name_values:
  T_SERVER_NAME_VALUE                     { $$ = [$1]; }
| server_name_values T_SERVER_NAME_VALUE  { $$ = $1; $$[] = $2; }
;
error_log:
  T_ERROR_LOG T_ERROR_LOG_PATH ';'      { $$ = new Node('T_ERROR_LOG', ['path' => $2]); }
;
user:
  T_USER T_USER_VALUE ';' { $$ = new Node('T_USER', ['value' => $2]); }
;
group:
  T_GROUP T_GROUP_VALUE ';' { $$ = new Node('T_GROUP', ['value' => $2]); }
;
location_optional_regexp_path:
    %empty { $$ = ''; }
|   T_LOCATION_PATH_REGEXP  { $$ = $1; }
;
add_header:
  T_ADD_HEADER T_ADD_HEADER_KEY T_ADD_HEADER_VALUE ';' { $$ = new Node('T_ADD_HEADER', [$2 => $3]); }
;
index:
  T_INDEX T_INDEX_VALUE ';' { $$ = new Node('T_INDEX', ['value' => $2]); }
;
access_log:
  T_ACCESS_LOG T_ACCESS_LOG_PATH ';' { $$ = new Node('T_ACCESS_LOG', ['path' => $2]); }
;
log_not_found:
  T_LOG_NOT_FOUND T_LOG_NOT_FOUND_VALUE ';' { $$ = new Node('T_LOG_NOT_FOUND', ['value' => $2]); }
;
charset:
  T_CHARSET T_CHARSET_VALUE ';' { $$ = new Node('T_CHARSET', ['value' => $2]); }
;
error_page:
  T_ERROR_PAGE T_ERROR_PAGE_CODE T_ERROR_PAGE_URI ';' { $$ = new Node('T_ERROR_PAGE', ['code' => $2, 'uri' => $3]); }
;
include:
  T_INCLUDE T_INCLUDE_PATH ';' { $$ = new Node('T_INCLUDE', ['path' => $2]); }
;
return:
  T_RETURN T_RETURN_CODE optional_return_body ';' { $$ = new Node('T_RETURN', ['code' => $2, 'body' => $3]); }
;

multi_accept:
  T_MULTI_ACCEPT T_MULTI_ACCEPT_VALUE ';' { $$ = new Node('T_MULTI_ACCEPT', ['value' => $2]); }
;
server_body_list:
  server_body_list server_body  { $$[] = $2; }
| %empty                        { $$ = []; }
;


optional_return_body:
  %empty         { $$ = '';}
| T_RETURN_BODY  { $$ = $1; }
;

try_files_path_list:
  T_TRY_FILES_PATH                      { $$ = [$1]; }
| try_files_path_list T_TRY_FILES_PATH  { $$ = $1; $$[] = $2; }
;

location_body_list:
  location_body_list location_body  { $$[] = $2; }
| %empty                            { $$ = []; }
;
%%
