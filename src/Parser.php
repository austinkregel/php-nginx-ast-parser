<?php
/* A Bison parser, made by GNU Bison 3.8.2.  */

/* Skeleton implementation for Bison LALR(1) parsers in PHP

   Copyright (C) 2007-2015, 2018-2021 Free Software Foundation, Inc.

   This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program.  If not, see <https://www.gnu.org/licenses/>.  */

/* As a special exception, you may create a larger work that contains
   part or all of the Bison parser skeleton and distribute that work
   under terms of your choice, so long as that work isn't itself a
   parser generator using the skeleton or a modified version thereof
   as a parser skeleton.  Alternatively, if you modify or redistribute
   the parser skeleton itself, you may (at your option) remove this
   special exception, which will cause the skeleton and the resulting
   Bison output files to be licensed under the GNU General Public
   License without this special exception.

   This special exception was added by the Free Software Foundation in
   version 2.2 of Bison.  */

/* DO NOT RELY ON FEATURES THAT ARE NOT DOCUMENTED in the manual,
   especially those whose name start with YY_ or yy_.  They are
   private implementation details that can be changed or removed.  */

namespace Kregel\NginxParser;






/**
 * A Bison parser, automatically generated from <tt>grammar.y</tt>.
 *
 * @author LALR (1) parser skeleton written by Paolo Bonzini.
 * Port to PHP language was done by Anton Sukhachev <mrsuh6@gmail.com>.
 */

 /**
   * Communication interface between the scanner and the Bison-generated
   * parser <tt>Parser</tt>.
   */
interface LexerInterface {
    /* Token kinds.  */
    /** Token "end of file", to be returned by the scanner.  */
    public const YYEOF = 0;
    /** Token error, to be returned by the scanner.  */
    public const YYerror = 256;
    /** Token "invalid token", to be returned by the scanner.  */
    public const YYUNDEF = 257;
    /** Token T_SERVER, to be returned by the scanner.  */
    public const T_SERVER = 258;
    /** Token T_LISTEN, to be returned by the scanner.  */
    public const T_LISTEN = 259;
    /** Token T_LISTEN_VALUE, to be returned by the scanner.  */
    public const T_LISTEN_VALUE = 260;
    /** Token T_LISTEN_VALUE_DEFAULT, to be returned by the scanner.  */
    public const T_LISTEN_VALUE_DEFAULT = 261;
    /** Token T_SERVER_NAME, to be returned by the scanner.  */
    public const T_SERVER_NAME = 262;
    /** Token T_SERVER_NAME_VALUE, to be returned by the scanner.  */
    public const T_SERVER_NAME_VALUE = 263;
    /** Token T_SERVER_ROOT, to be returned by the scanner.  */
    public const T_SERVER_ROOT = 264;
    /** Token T_SERVER_ROOT_PATH, to be returned by the scanner.  */
    public const T_SERVER_ROOT_PATH = 265;
    /** Token T_LOCATION, to be returned by the scanner.  */
    public const T_LOCATION = 266;
    /** Token T_LOCATION_PATH, to be returned by the scanner.  */
    public const T_LOCATION_PATH = 267;
    /** Token T_LOCATION_PATH_REGEXP, to be returned by the scanner.  */
    public const T_LOCATION_PATH_REGEXP = 268;
    /** Token T_RETURN, to be returned by the scanner.  */
    public const T_RETURN = 269;
    /** Token T_RETURN_CODE, to be returned by the scanner.  */
    public const T_RETURN_CODE = 270;
    /** Token T_RETURN_BODY, to be returned by the scanner.  */
    public const T_RETURN_BODY = 271;
    /** Token T_REWRITE, to be returned by the scanner.  */
    public const T_REWRITE = 272;
    /** Token T_REWRITE_REGEX, to be returned by the scanner.  */
    public const T_REWRITE_REGEX = 273;
    /** Token T_REWRITE_REPLACEMENT, to be returned by the scanner.  */
    public const T_REWRITE_REPLACEMENT = 274;
    /** Token T_REWRITE_FLAG, to be returned by the scanner.  */
    public const T_REWRITE_FLAG = 275;
    /** Token T_ERROR_LOG, to be returned by the scanner.  */
    public const T_ERROR_LOG = 276;
    /** Token T_ERROR_LOG_PATH, to be returned by the scanner.  */
    public const T_ERROR_LOG_PATH = 277;
    /** Token T_ACCESS_LOG, to be returned by the scanner.  */
    public const T_ACCESS_LOG = 278;
    /** Token T_ACCESS_LOG_PATH, to be returned by the scanner.  */
    public const T_ACCESS_LOG_PATH = 279;
    /** Token T_FAST_CGI_PATH, to be returned by the scanner.  */
    public const T_FAST_CGI_PATH = 280;
    /** Token T_FAST_CGI_PATH_PATH, to be returned by the scanner.  */
    public const T_FAST_CGI_PATH_PATH = 281;
    /** Token T_FAST_CGI_SPLIT_PATH_INFO, to be returned by the scanner.  */
    public const T_FAST_CGI_SPLIT_PATH_INFO = 282;
    /** Token T_FAST_CGI_SPLIT_PATH_INFO_PATH, to be returned by the scanner.  */
    public const T_FAST_CGI_SPLIT_PATH_INFO_PATH = 283;
    /** Token T_FAST_CGI_PARAM, to be returned by the scanner.  */
    public const T_FAST_CGI_PARAM = 284;
    /** Token T_FAST_CGI_PARAM_KEY, to be returned by the scanner.  */
    public const T_FAST_CGI_PARAM_KEY = 285;
    /** Token T_FAST_CGI_PARAM_VALUE, to be returned by the scanner.  */
    public const T_FAST_CGI_PARAM_VALUE = 286;
    /** Token T_FAST_CGI_HIDE_HEADER, to be returned by the scanner.  */
    public const T_FAST_CGI_HIDE_HEADER = 287;
    /** Token T_FAST_CGI_HIDE_HEADER_KEY, to be returned by the scanner.  */
    public const T_FAST_CGI_HIDE_HEADER_KEY = 288;
    /** Token T_INCLUDE, to be returned by the scanner.  */
    public const T_INCLUDE = 289;
    /** Token T_INCLUDE_PATH, to be returned by the scanner.  */
    public const T_INCLUDE_PATH = 290;
    /** Token T_INTERNAL, to be returned by the scanner.  */
    public const T_INTERNAL = 291;
    /** Token T_TRY_FILES, to be returned by the scanner.  */
    public const T_TRY_FILES = 292;
    /** Token T_TRY_FILES_PATH, to be returned by the scanner.  */
    public const T_TRY_FILES_PATH = 293;
    /** Token T_ADD_HEADER, to be returned by the scanner.  */
    public const T_ADD_HEADER = 294;
    /** Token T_ADD_HEADER_KEY, to be returned by the scanner.  */
    public const T_ADD_HEADER_KEY = 295;
    /** Token T_ADD_HEADER_VALUE, to be returned by the scanner.  */
    public const T_ADD_HEADER_VALUE = 296;
    /** Token T_INDEX, to be returned by the scanner.  */
    public const T_INDEX = 297;
    /** Token T_INDEX_VALUE, to be returned by the scanner.  */
    public const T_INDEX_VALUE = 298;
    /** Token T_CHARSET, to be returned by the scanner.  */
    public const T_CHARSET = 299;
    /** Token T_CHARSET_VALUE, to be returned by the scanner.  */
    public const T_CHARSET_VALUE = 300;
    /** Token T_ERROR_PAGE, to be returned by the scanner.  */
    public const T_ERROR_PAGE = 301;
    /** Token T_ERROR_PAGE_CODE, to be returned by the scanner.  */
    public const T_ERROR_PAGE_CODE = 302;
    /** Token T_ERROR_PAGE_URI, to be returned by the scanner.  */
    public const T_ERROR_PAGE_URI = 303;
    /** Token T_DENY, to be returned by the scanner.  */
    public const T_DENY = 304;
    /** Token T_DENY_VALUE, to be returned by the scanner.  */
    public const T_DENY_VALUE = 305;
    /** Token T_LOCATION_PATH_EQUAL, to be returned by the scanner.  */
    public const T_LOCATION_PATH_EQUAL = 306;
    /** Token T_LOG_NOT_FOUND, to be returned by the scanner.  */
    public const T_LOG_NOT_FOUND = 307;
    /** Token T_LOG_NOT_FOUND_VALUE, to be returned by the scanner.  */
    public const T_LOG_NOT_FOUND_VALUE = 308;
    /** Token T_USER, to be returned by the scanner.  */
    public const T_USER = 309;
    /** Token T_USER_VALUE, to be returned by the scanner.  */
    public const T_USER_VALUE = 310;
    /** Token T_GROUP, to be returned by the scanner.  */
    public const T_GROUP = 311;
    /** Token T_GROUP_VALUE, to be returned by the scanner.  */
    public const T_GROUP_VALUE = 312;
    /** Token T_WORKER_PROCESSES, to be returned by the scanner.  */
    public const T_WORKER_PROCESSES = 313;
    /** Token T_WORKER_PROCESSES_VALUE, to be returned by the scanner.  */
    public const T_WORKER_PROCESSES_VALUE = 314;
    /** Token T_PID, to be returned by the scanner.  */
    public const T_PID = 315;
    /** Token T_PID_VALUE, to be returned by the scanner.  */
    public const T_PID_VALUE = 316;
    /** Token T_EVENTS, to be returned by the scanner.  */
    public const T_EVENTS = 317;
    /** Token T_MULTI_ACCEPT, to be returned by the scanner.  */
    public const T_MULTI_ACCEPT = 318;
    /** Token T_MULTI_ACCEPT_VALUE, to be returned by the scanner.  */
    public const T_MULTI_ACCEPT_VALUE = 319;
    /** Token T_WORKER_CONNECTIONS, to be returned by the scanner.  */
    public const T_WORKER_CONNECTIONS = 320;
    /** Token T_WORKER_CONNECTIONS_VALUE, to be returned by the scanner.  */
    public const T_WORKER_CONNECTIONS_VALUE = 321;
    /** Token T_GZIP, to be returned by the scanner.  */
    public const T_GZIP = 322;
    /** Token T_GZIP_VALUE, to be returned by the scanner.  */
    public const T_GZIP_VALUE = 323;
    /** Token T_SENDFILE, to be returned by the scanner.  */
    public const T_SENDFILE = 324;
    /** Token T_SENDFILE_VALUE, to be returned by the scanner.  */
    public const T_SENDFILE_VALUE = 325;
    /** Token T_TYPES_HASH, to be returned by the scanner.  */
    public const T_TYPES_HASH = 326;
    /** Token T_TYPES_HASH_VALUE, to be returned by the scanner.  */
    public const T_TYPES_HASH_VALUE = 327;
    /** Token T_SERVER_TOKENS, to be returned by the scanner.  */
    public const T_SERVER_TOKENS = 328;
    /** Token T_SERVER_TOKENS_VALUE, to be returned by the scanner.  */
    public const T_SERVER_TOKENS_VALUE = 329;
    /** Token T_SERVER_NAMES_HASH_BUCKET_SIZE, to be returned by the scanner.  */
    public const T_SERVER_NAMES_HASH_BUCKET_SIZE = 330;
    /** Token T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE, to be returned by the scanner.  */
    public const T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE = 331;
    /** Token T_SSL_PROTOCOLS, to be returned by the scanner.  */
    public const T_SSL_PROTOCOLS = 332;
    /** Token T_SSL_PROTOCOLS_VALUE, to be returned by the scanner.  */
    public const T_SSL_PROTOCOLS_VALUE = 333;
    /** Token T_SSL_PROTOCOLS_VALUE2, to be returned by the scanner.  */
    public const T_SSL_PROTOCOLS_VALUE2 = 334;
    /** Token T_SSL_PROTOCOLS_VALUE3, to be returned by the scanner.  */
    public const T_SSL_PROTOCOLS_VALUE3 = 335;
    /** Token T_SSL_PROTOCOLS_VALUE4, to be returned by the scanner.  */
    public const T_SSL_PROTOCOLS_VALUE4 = 336;
    /** Token T_SSL_PREFER_SERVER_CIPHERS, to be returned by the scanner.  */
    public const T_SSL_PREFER_SERVER_CIPHERS = 337;
    /** Token T_SSL_PREFER_SERVER_CIPHERS_VALUE, to be returned by the scanner.  */
    public const T_SSL_PREFER_SERVER_CIPHERS_VALUE = 338;
    /** Token T_HTTP, to be returned by the scanner.  */
    public const T_HTTP = 339;
    /** Token T_TCP_NOPUSH, to be returned by the scanner.  */
    public const T_TCP_NOPUSH = 340;
    /** Token T_TCP_NOPUSH_VALUE, to be returned by the scanner.  */
    public const T_TCP_NOPUSH_VALUE = 341;
    /** Token T_TYPES_HASH_MAX_SIZE, to be returned by the scanner.  */
    public const T_TYPES_HASH_MAX_SIZE = 342;
    /** Token T_TYPES_HASH_MAX_SIZE_VALUE, to be returned by the scanner.  */
    public const T_TYPES_HASH_MAX_SIZE_VALUE = 343;
    /** Token T_DEFAULT_TYPE, to be returned by the scanner.  */
    public const T_DEFAULT_TYPE = 344;
    /** Token T_DEFAULT_TYPE_VALUE, to be returned by the scanner.  */
    public const T_DEFAULT_TYPE_VALUE = 345;




    /**
     * Method to retrieve the semantic value of the last scanned token.
     * @return mixed the semantic value of the last scanned token.
     */
     public function getLVal();

    /**
     * Entry point for the scanner.  Returns the token identifier corresponding
     * to the next token and prepares to return the semantic value
     * of the token.
     * @return int the token identifier corresponding to the next token.
     */
    public function yylex(): int;

    /**
     * Emit an errorin a user-defined way.
     *
     *
     * @param string $message The string for the error message.
     */
     public function yyerror(string $message): void;


  }




  /**
   * Information needed to get the list of expected tokens and to forge
   * a syntax error diagnostic.
   */
  class Context {
    public function __construct(Parser $parser, YYStack $stack, SymbolKind $token) {
      $this->yyparser = $parser;
      $this->yystack = $stack;
      $this->yytoken = $token;
    }

    private Parser $yyparser;
    private YYStack $yystack;


    /**
     * The symbol kind of the lookahead token.
     */
    public function getToken(): SymbolKind {
      return $this->yytoken;
    }

    private SymbolKind $yytoken;
    public const NTOKENS = Parser::YYNTOKENS;

    /**
     * Put in YYARG at most YYARGN of the expected tokens given the
     * current YYCTX, and return the number of tokens stored in YYARG.  If
     * YYARG is null, return the number of expected tokens (guaranteed to
     * be less than YYNTOKENS).
     * @param SymbolKind[] $yyarg
     */
    public function getExpectedTokens(array &$yyarg, int $yyoffset, int $yyargn): int {
      $yycount = $yyoffset;
      $yyn = $this->yyparser->yypact[$this->yystack->stateAt(0)];
      if (!$this->yyparser->yyPactValueIsDefault($yyn))
        {
          /* Start YYX at -YYN if negative to avoid negative
             indexes in YYCHECK.  In other words, skip the first
             -YYN actions for this state because they are default
             actions.  */
          $yyxbegin = $yyn < 0 ? -$yyn : 0;
          /* Stay within bounds of both yycheck and yytname.  */
          $yychecklim = Parser::YYLAST - $yyn + 1;
          $yyxend = $yychecklim < self::NTOKENS ? $yychecklim : self::NTOKENS;
          for ($yyx = $yyxbegin; $yyx < $yyxend; ++$yyx)
            if ($this->yyparser->yycheck[$yyx + $yyn] === $yyx && $yyx !== SymbolKind::S_YYerror
                && !$this->yyparser->yyTableValueIsError($this->yyparser->yytable[$yyx + $yyn]))
              {
                if ($yyarg === null)
                  $yycount += 1;
                else if ($yycount === $yyargn)
                  return 0; // FIXME: this is incorrect.
                else
                  $yyarg[$yycount++] = new SymbolKind($yyx);
              }
        }
      if ($yyarg !== null && $yycount === $yyoffset && $yyoffset < $yyargn)
        $yyarg[$yycount] = null;
      return $yycount - $yyoffset;
    }
  }

  class YYStack {
    private array $stateStack = [];
    private array $valueStack = [];

    public int $height = -1;

    /**
     * @param mixed $value
     */
    public function push(int $state, $value): void {
      $this->height++;

      $this->stateStack[$this->height] = $state;
      $this->valueStack[$this->height] = $value;
    }

    public function pop(int $num = 1): void {
      $this->height -= $num;
    }

    public function &stateAt(int $i): int {
      return $this->stateStack[$this->height - $i];
    }

    /**
     * @return mixed
     */
    public function &valueAt(int $i) {
      return $this->valueStack[$this->height - $i];
    }

    // Print the state stack on the debug stream.
    public function print($resource): void {
      fputs($resource,"Stack now");
      for ($i = 0; $i <= $this->height; $i++) {
        fputs($resource, ' ' . $this->stateStack[$i]);
      }
      fputs($resource, PHP_EOL);
    }
  }


  class SymbolKind
  {
    public const S_YYEOF = 0;      /* "end of file"  */
    public const S_YYerror = 1;    /* error  */
    public const S_YYUNDEF = 2;    /* "invalid token"  */
    public const S_T_SERVER = 3;   /* T_SERVER  */
    public const S_T_LISTEN = 4;   /* T_LISTEN  */
    public const S_T_LISTEN_VALUE = 5; /* T_LISTEN_VALUE  */
    public const S_T_LISTEN_VALUE_DEFAULT = 6; /* T_LISTEN_VALUE_DEFAULT  */
    public const S_T_SERVER_NAME = 7; /* T_SERVER_NAME  */
    public const S_T_SERVER_NAME_VALUE = 8; /* T_SERVER_NAME_VALUE  */
    public const S_T_SERVER_ROOT = 9; /* T_SERVER_ROOT  */
    public const S_T_SERVER_ROOT_PATH = 10; /* T_SERVER_ROOT_PATH  */
    public const S_T_LOCATION = 11; /* T_LOCATION  */
    public const S_T_LOCATION_PATH = 12; /* T_LOCATION_PATH  */
    public const S_T_LOCATION_PATH_REGEXP = 13; /* T_LOCATION_PATH_REGEXP  */
    public const S_T_RETURN = 14;  /* T_RETURN  */
    public const S_T_RETURN_CODE = 15; /* T_RETURN_CODE  */
    public const S_T_RETURN_BODY = 16; /* T_RETURN_BODY  */
    public const S_T_REWRITE = 17; /* T_REWRITE  */
    public const S_T_REWRITE_REGEX = 18; /* T_REWRITE_REGEX  */
    public const S_T_REWRITE_REPLACEMENT = 19; /* T_REWRITE_REPLACEMENT  */
    public const S_T_REWRITE_FLAG = 20; /* T_REWRITE_FLAG  */
    public const S_T_ERROR_LOG = 21; /* T_ERROR_LOG  */
    public const S_T_ERROR_LOG_PATH = 22; /* T_ERROR_LOG_PATH  */
    public const S_T_ACCESS_LOG = 23; /* T_ACCESS_LOG  */
    public const S_T_ACCESS_LOG_PATH = 24; /* T_ACCESS_LOG_PATH  */
    public const S_T_FAST_CGI_PATH = 25; /* T_FAST_CGI_PATH  */
    public const S_T_FAST_CGI_PATH_PATH = 26; /* T_FAST_CGI_PATH_PATH  */
    public const S_T_FAST_CGI_SPLIT_PATH_INFO = 27; /* T_FAST_CGI_SPLIT_PATH_INFO  */
    public const S_T_FAST_CGI_SPLIT_PATH_INFO_PATH = 28; /* T_FAST_CGI_SPLIT_PATH_INFO_PATH  */
    public const S_T_FAST_CGI_PARAM = 29; /* T_FAST_CGI_PARAM  */
    public const S_T_FAST_CGI_PARAM_KEY = 30; /* T_FAST_CGI_PARAM_KEY  */
    public const S_T_FAST_CGI_PARAM_VALUE = 31; /* T_FAST_CGI_PARAM_VALUE  */
    public const S_T_FAST_CGI_HIDE_HEADER = 32; /* T_FAST_CGI_HIDE_HEADER  */
    public const S_T_FAST_CGI_HIDE_HEADER_KEY = 33; /* T_FAST_CGI_HIDE_HEADER_KEY  */
    public const S_T_INCLUDE = 34; /* T_INCLUDE  */
    public const S_T_INCLUDE_PATH = 35; /* T_INCLUDE_PATH  */
    public const S_T_INTERNAL = 36; /* T_INTERNAL  */
    public const S_T_TRY_FILES = 37; /* T_TRY_FILES  */
    public const S_T_TRY_FILES_PATH = 38; /* T_TRY_FILES_PATH  */
    public const S_T_ADD_HEADER = 39; /* T_ADD_HEADER  */
    public const S_T_ADD_HEADER_KEY = 40; /* T_ADD_HEADER_KEY  */
    public const S_T_ADD_HEADER_VALUE = 41; /* T_ADD_HEADER_VALUE  */
    public const S_T_INDEX = 42;   /* T_INDEX  */
    public const S_T_INDEX_VALUE = 43; /* T_INDEX_VALUE  */
    public const S_T_CHARSET = 44; /* T_CHARSET  */
    public const S_T_CHARSET_VALUE = 45; /* T_CHARSET_VALUE  */
    public const S_T_ERROR_PAGE = 46; /* T_ERROR_PAGE  */
    public const S_T_ERROR_PAGE_CODE = 47; /* T_ERROR_PAGE_CODE  */
    public const S_T_ERROR_PAGE_URI = 48; /* T_ERROR_PAGE_URI  */
    public const S_T_DENY = 49;    /* T_DENY  */
    public const S_T_DENY_VALUE = 50; /* T_DENY_VALUE  */
    public const S_T_LOCATION_PATH_EQUAL = 51; /* T_LOCATION_PATH_EQUAL  */
    public const S_T_LOG_NOT_FOUND = 52; /* T_LOG_NOT_FOUND  */
    public const S_T_LOG_NOT_FOUND_VALUE = 53; /* T_LOG_NOT_FOUND_VALUE  */
    public const S_T_USER = 54;    /* T_USER  */
    public const S_T_USER_VALUE = 55; /* T_USER_VALUE  */
    public const S_T_GROUP = 56;   /* T_GROUP  */
    public const S_T_GROUP_VALUE = 57; /* T_GROUP_VALUE  */
    public const S_T_WORKER_PROCESSES = 58; /* T_WORKER_PROCESSES  */
    public const S_T_WORKER_PROCESSES_VALUE = 59; /* T_WORKER_PROCESSES_VALUE  */
    public const S_T_PID = 60;     /* T_PID  */
    public const S_T_PID_VALUE = 61; /* T_PID_VALUE  */
    public const S_T_EVENTS = 62;  /* T_EVENTS  */
    public const S_T_MULTI_ACCEPT = 63; /* T_MULTI_ACCEPT  */
    public const S_T_MULTI_ACCEPT_VALUE = 64; /* T_MULTI_ACCEPT_VALUE  */
    public const S_T_WORKER_CONNECTIONS = 65; /* T_WORKER_CONNECTIONS  */
    public const S_T_WORKER_CONNECTIONS_VALUE = 66; /* T_WORKER_CONNECTIONS_VALUE  */
    public const S_T_GZIP = 67;    /* T_GZIP  */
    public const S_T_GZIP_VALUE = 68; /* T_GZIP_VALUE  */
    public const S_T_SENDFILE = 69; /* T_SENDFILE  */
    public const S_T_SENDFILE_VALUE = 70; /* T_SENDFILE_VALUE  */
    public const S_T_TYPES_HASH = 71; /* T_TYPES_HASH  */
    public const S_T_TYPES_HASH_VALUE = 72; /* T_TYPES_HASH_VALUE  */
    public const S_T_SERVER_TOKENS = 73; /* T_SERVER_TOKENS  */
    public const S_T_SERVER_TOKENS_VALUE = 74; /* T_SERVER_TOKENS_VALUE  */
    public const S_T_SERVER_NAMES_HASH_BUCKET_SIZE = 75; /* T_SERVER_NAMES_HASH_BUCKET_SIZE  */
    public const S_T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE = 76; /* T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE  */
    public const S_T_SSL_PROTOCOLS = 77; /* T_SSL_PROTOCOLS  */
    public const S_T_SSL_PROTOCOLS_VALUE = 78; /* T_SSL_PROTOCOLS_VALUE  */
    public const S_T_SSL_PROTOCOLS_VALUE2 = 79; /* T_SSL_PROTOCOLS_VALUE2  */
    public const S_T_SSL_PROTOCOLS_VALUE3 = 80; /* T_SSL_PROTOCOLS_VALUE3  */
    public const S_T_SSL_PROTOCOLS_VALUE4 = 81; /* T_SSL_PROTOCOLS_VALUE4  */
    public const S_T_SSL_PREFER_SERVER_CIPHERS = 82; /* T_SSL_PREFER_SERVER_CIPHERS  */
    public const S_T_SSL_PREFER_SERVER_CIPHERS_VALUE = 83; /* T_SSL_PREFER_SERVER_CIPHERS_VALUE  */
    public const S_T_HTTP = 84;    /* T_HTTP  */
    public const S_T_TCP_NOPUSH = 85; /* T_TCP_NOPUSH  */
    public const S_T_TCP_NOPUSH_VALUE = 86; /* T_TCP_NOPUSH_VALUE  */
    public const S_T_TYPES_HASH_MAX_SIZE = 87; /* T_TYPES_HASH_MAX_SIZE  */
    public const S_T_TYPES_HASH_MAX_SIZE_VALUE = 88; /* T_TYPES_HASH_MAX_SIZE_VALUE  */
    public const S_T_DEFAULT_TYPE = 89; /* T_DEFAULT_TYPE  */
    public const S_T_DEFAULT_TYPE_VALUE = 90; /* T_DEFAULT_TYPE_VALUE  */
    public const S_91_ = 91;       /* '{'  */
    public const S_92_ = 92;       /* '}'  */
    public const S_93_ = 93;       /* ';'  */
    public const S_YYACCEPT = 94;  /* $accept  */
    public const S_main = 95;      /* main  */
    public const S_servers = 96;   /* servers  */
    public const S_events = 97;    /* events  */
    public const S_event_body_list = 98; /* event_body_list  */
    public const S_server_body = 99; /* server_body  */
    public const S_location_body = 100; /* location_body  */
    public const S_http_body = 101; /* http_body  */
    public const S_worker_processes = 102; /* worker_processes  */
    public const S_http = 103;     /* http  */
    public const S_worker_connections = 104; /* worker_connections  */
    public const S_tcp_nopush = 105; /* tcp_nopush  */
    public const S_server = 106;   /* server  */
    public const S_pid = 107;      /* pid  */
    public const S_rewrite = 108;  /* rewrite  */
    public const S_deny = 109;     /* deny  */
    public const S_hide_header = 110; /* hide_header  */
    public const S_gzip = 111;     /* gzip  */
    public const S_sendfile = 112; /* sendfile  */
    public const S_types_hash = 113; /* types_hash  */
    public const S_server_tokens = 114; /* server_tokens  */
    public const S_server_names_hash_bucket_size = 115; /* server_names_hash_bucket_size  */
    public const S_ssl_protocols = 116; /* ssl_protocols  */
    public const S_ssl_prefer_server_ciphers = 117; /* ssl_prefer_server_ciphers  */
    public const S_default_type = 118; /* default_type  */
    public const S_listen = 119;   /* listen  */
    public const S_server_name_values = 120; /* server_name_values  */
    public const S_error_log = 121; /* error_log  */
    public const S_user = 122;     /* user  */
    public const S_group = 123;    /* group  */
    public const S_location_optional_regexp_path = 124; /* location_optional_regexp_path  */
    public const S_add_header = 125; /* add_header  */
    public const S_index = 126;    /* index  */
    public const S_access_log = 127; /* access_log  */
    public const S_log_not_found = 128; /* log_not_found  */
    public const S_charset = 129;  /* charset  */
    public const S_error_page = 130; /* error_page  */
    public const S_include = 131;  /* include  */
    public const S_return = 132;   /* return  */
    public const S_multi_accept = 133; /* multi_accept  */
    public const S_server_body_list = 134; /* server_body_list  */
    public const S_optional_return_body = 135; /* optional_return_body  */
    public const S_try_files_path_list = 136; /* try_files_path_list  */
    public const S_location_body_list = 137; /* location_body_list  */


    private int $yycode;

    public function __construct(int $yycode) {
      $this->yycode = $yycode;
    }

    public function getCode(): int {
        return $this->yycode;
    }


    private const NAMES = array("\"end of file\"", "error", "\"invalid token\"", "T_SERVER", "T_LISTEN",
  "T_LISTEN_VALUE", "T_LISTEN_VALUE_DEFAULT", "T_SERVER_NAME",
  "T_SERVER_NAME_VALUE", "T_SERVER_ROOT", "T_SERVER_ROOT_PATH",
  "T_LOCATION", "T_LOCATION_PATH", "T_LOCATION_PATH_REGEXP", "T_RETURN",
  "T_RETURN_CODE", "T_RETURN_BODY", "T_REWRITE", "T_REWRITE_REGEX",
  "T_REWRITE_REPLACEMENT", "T_REWRITE_FLAG", "T_ERROR_LOG",
  "T_ERROR_LOG_PATH", "T_ACCESS_LOG", "T_ACCESS_LOG_PATH",
  "T_FAST_CGI_PATH", "T_FAST_CGI_PATH_PATH", "T_FAST_CGI_SPLIT_PATH_INFO",
  "T_FAST_CGI_SPLIT_PATH_INFO_PATH", "T_FAST_CGI_PARAM",
  "T_FAST_CGI_PARAM_KEY", "T_FAST_CGI_PARAM_VALUE",
  "T_FAST_CGI_HIDE_HEADER", "T_FAST_CGI_HIDE_HEADER_KEY", "T_INCLUDE",
  "T_INCLUDE_PATH", "T_INTERNAL", "T_TRY_FILES", "T_TRY_FILES_PATH",
  "T_ADD_HEADER", "T_ADD_HEADER_KEY", "T_ADD_HEADER_VALUE", "T_INDEX",
  "T_INDEX_VALUE", "T_CHARSET", "T_CHARSET_VALUE", "T_ERROR_PAGE",
  "T_ERROR_PAGE_CODE", "T_ERROR_PAGE_URI", "T_DENY", "T_DENY_VALUE",
  "T_LOCATION_PATH_EQUAL", "T_LOG_NOT_FOUND", "T_LOG_NOT_FOUND_VALUE",
  "T_USER", "T_USER_VALUE", "T_GROUP", "T_GROUP_VALUE",
  "T_WORKER_PROCESSES", "T_WORKER_PROCESSES_VALUE", "T_PID", "T_PID_VALUE",
  "T_EVENTS", "T_MULTI_ACCEPT", "T_MULTI_ACCEPT_VALUE",
  "T_WORKER_CONNECTIONS", "T_WORKER_CONNECTIONS_VALUE", "T_GZIP",
  "T_GZIP_VALUE", "T_SENDFILE", "T_SENDFILE_VALUE", "T_TYPES_HASH",
  "T_TYPES_HASH_VALUE", "T_SERVER_TOKENS", "T_SERVER_TOKENS_VALUE",
  "T_SERVER_NAMES_HASH_BUCKET_SIZE",
  "T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE", "T_SSL_PROTOCOLS",
  "T_SSL_PROTOCOLS_VALUE", "T_SSL_PROTOCOLS_VALUE2",
  "T_SSL_PROTOCOLS_VALUE3", "T_SSL_PROTOCOLS_VALUE4",
  "T_SSL_PREFER_SERVER_CIPHERS", "T_SSL_PREFER_SERVER_CIPHERS_VALUE",
  "T_HTTP", "T_TCP_NOPUSH", "T_TCP_NOPUSH_VALUE", "T_TYPES_HASH_MAX_SIZE",
  "T_TYPES_HASH_MAX_SIZE_VALUE", "T_DEFAULT_TYPE", "T_DEFAULT_TYPE_VALUE",
  "'{'", "'}'", "';'", "\$accept", "main", "servers", "events",
  "event_body_list", "server_body", "location_body", "http_body",
  "worker_processes", "http", "worker_connections", "tcp_nopush", "server",
  "pid", "rewrite", "deny", "hide_header", "gzip", "sendfile",
  "types_hash", "server_tokens", "server_names_hash_bucket_size",
  "ssl_protocols", "ssl_prefer_server_ciphers", "default_type", "listen",
  "server_name_values", "error_log", "user", "group",
  "location_optional_regexp_path", "add_header", "index", "access_log",
  "log_not_found", "charset", "error_page", "include", "return",
  "multi_accept", "server_body_list", "optional_return_body",
  "try_files_path_list", "location_body_list", null);

    public function getName(): string {
        return trim(self::NAMES[$this->yycode], '"\'');
    }

  }




class Parser
{
  /** Version number for the Bison executable that generated this parser.  */
  public const BISON_VERSION = "3.8.2";

  /** Name of the skeleton that generated this parser.  */
  public const BISON_SKELETON = "vendor/mrsuh/php-bison-skeleton/src/php-skel.m4";

/* "%code parser" blocks.  */
/* "grammar.y":4  */

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

/* "src/Parser.php":609  */






  /**
   * The object doing lexical analysis for us.
   */
  private LexerInterface $yylexer;




  /**
   * Instantiates the Bison-generated parser.
   * @param LexerInterface $lexer The scanner that will supply tokens to the parser.
   */
  public function __construct(LexerInterface $lexer)
  {

    $this->yylexer = $lexer;
    $this->yystack          = new YYStack();
    

  }




  private int $yynerrs = 0;

  /**
   * The number of syntax errors so far.
   */
  public function getNumberOfErrors(): int { return $this->yynerrs; }

  /**
   * Print an error message via the lexer.
   *
   * @param msg The error message.
   */
  public function yyerror(string $msg): void {
      $this->yylexer->yyerror($msg);
  }


  /**
   * Returned by a Bison action in order to stop the parsing process and
   * return success (<tt>true</tt>).
   */
  public const YYACCEPT = 0;

  /**
   * Returned by a Bison action in order to stop the parsing process and
   * return failure (<tt>false</tt>).
   */
  public const YYABORT = 1;



  /**
   * Returned by a Bison action in order to start error recovery without
   * printing an error message.
   */
  public const YYERROR = 2;

  /**
   * Internal return codes that are not supported for user semantic
   * actions.
   */
  private const YYERRLAB = 3;
  private const YYNEWSTATE = 4;
  private const YYDEFAULT = 5;
  private const YYREDUCE = 6;
  private const YYERRLAB1 = 7;
  private const YYRETURN = 8;


  private int $yyerrstatus = 0;

    /**
     * Lookahead token kind.
     */
    private int $yychar = Parser::YYEMPTY;
    /**
     * Lookahead symbol kind.
     */
    private ?SymbolKind $yytoken = null;

    /* State.  */
    private int $yyn     = 0;
    private int $yylen   = 0;
    private int $yystate = 0;
    private YYStack $yystack;
    private int $label = Parser::YYNEWSTATE;



    /**
     * Semantic value of the lookahead.
     * @var mixed
     */
    private $yylval = null;

  /**
   * Whether error recovery is being done.  In this state, the parser
   * reads token until it reaches a known state, and then restarts normal
   * operation.
   */
  public function recovering(): bool
  {
    return $this->yyerrstatus === 0;
  }

  /** Compute post-reduction state.
   * @param yystate   the current state
   * @param yysym     the nonterminal to push on the stack
   */
  private function yyLRGotoState(int $yystate, int $yysym): int {

    $yyr = $this->yypgoto[$yysym - Parser::YYNTOKENS] + $yystate;
    if (0 <= $yyr && $yyr <= Parser::YYLAST && $this->yycheck[$yyr] === $yystate)
      return $this->yytable[$yyr];
    else
      return $this->yydefgoto[$yysym - Parser::YYNTOKENS];
  }

  private function yyaction(int $yyn, YYStack $yystack, int $yylen): int
  {
    /* If YYLEN is nonzero, implement the default value of the action:
       '$$ = $1'.  Otherwise, use the top of the stack.

       Otherwise, the following line sets YYVAL to garbage.
       This behavior is undocumented and Bison
       users should not rely upon it.  */
     /** @var mixed $yyval */
     $yyval = (0 < $yylen) ? $yystack->valueAt($yylen - 1) : $yystack->valueAt(0);

    switch ($yyn)
      {
          case 10: /* servers: servers server  */
    /* "grammar.y":125  */
                 { $yyval[] = $yystack->valueAt(0); };
  break;


  case 11: /* servers: server  */
    /* "grammar.y":126  */
         { $yyval = [$yystack->valueAt(0)]; };
  break;


  case 12: /* events: T_EVENTS '{' event_body_list '}'  */
    /* "grammar.y":130  */
                                   { $yyval = new Node('T_EVENTS', [], $yystack->valueAt(2)); };
  break;


  case 16: /* server_body: T_SERVER_NAME server_name_values ';'  */
    /* "grammar.y":138  */
                                        { $yyval = new Node('T_SERVER_NAME', ['names' => $yystack->valueAt(1)]); };
  break;


  case 17: /* server_body: T_SERVER_ROOT T_SERVER_ROOT_PATH ';'  */
    /* "grammar.y":139  */
                                        { $yyval = new Node('T_SERVER_ROOT', ['path' => $yystack->valueAt(1)]); };
  break;


  case 19: /* server_body: T_LOCATION location_optional_regexp_path T_LOCATION_PATH '{' location_body_list '}'  */
    /* "grammar.y":141  */
                                                                                      { $yyval = new  Node('T_LOCATION', ['regexp' => $yystack->valueAt(4), 'path' => $yystack->valueAt(3)], $yystack->valueAt(1)); };
  break;


  case 20: /* server_body: T_LOCATION T_LOCATION_PATH_EQUAL T_LOCATION_PATH '{' location_body_list '}'  */
    /* "grammar.y":142  */
                                                                              { $yyval = new  Node('T_LOCATION', ['regexp' => $yystack->valueAt(4), 'path' => $yystack->valueAt(3)], $yystack->valueAt(1)); };
  break;


  case 32: /* location_body: T_RETURN T_RETURN_CODE optional_return_body ';'  */
    /* "grammar.y":157  */
                                                                   { $yyval = new Node('T_RETURN', ['code' => $yystack->valueAt(2), 'body' => $yystack->valueAt(1)]); };
  break;


  case 33: /* location_body: T_FAST_CGI_PATH T_FAST_CGI_PATH_PATH ';'  */
    /* "grammar.y":158  */
                                                                   { $yyval = new Node('T_FAST_CGI_PATH', ['path' => $yystack->valueAt(1)]); };
  break;


  case 34: /* location_body: T_FAST_CGI_SPLIT_PATH_INFO T_FAST_CGI_SPLIT_PATH_INFO_PATH ';'  */
    /* "grammar.y":159  */
                                                                   { $yyval = new Node('T_FAST_CGI_SPLIT_PATH_INFO', ['path' => $yystack->valueAt(1)]); };
  break;


  case 35: /* location_body: T_FAST_CGI_PARAM T_FAST_CGI_PARAM_KEY T_FAST_CGI_PARAM_VALUE ';'  */
    /* "grammar.y":160  */
                                                                   { $yyval = new Node('T_FAST_CGI_PARAM', [$yystack->valueAt(2) => $yystack->valueAt(1)]); };
  break;


  case 36: /* location_body: T_INCLUDE T_INCLUDE_PATH ';'  */
    /* "grammar.y":161  */
                                                                   { $yyval = new Node('T_INCLUDE', ['path' => $yystack->valueAt(1)]); };
  break;


  case 37: /* location_body: T_INTERNAL ';'  */
    /* "grammar.y":162  */
                                                                   { $yyval = new Node('T_INTERNAL'); };
  break;


  case 38: /* location_body: T_TRY_FILES try_files_path_list ';'  */
    /* "grammar.y":163  */
                                                                   { $yyval = new Node('T_TRY_FILES', [ 'paths' => $yystack->valueAt(1) ]); };
  break;


  case 59: /* worker_processes: T_WORKER_PROCESSES T_WORKER_PROCESSES_VALUE ';'  */
    /* "grammar.y":191  */
                                                  { $yyval = new Node('T_WORKER_PROCESSES', ['value' => $yystack->valueAt(1)]); };
  break;


  case 60: /* http: T_HTTP '{' http_body '}'  */
    /* "grammar.y":195  */
                           { $yyval = new Node('T_HTTP', [], $yystack->valueAt(2)); };
  break;


  case 61: /* worker_connections: T_WORKER_CONNECTIONS T_WORKER_CONNECTIONS_VALUE ';'  */
    /* "grammar.y":198  */
                                                       { $yyval = new Node('T_WORKER_CONNECTIONS', ['value' => $yystack->valueAt(1)]); };
  break;


  case 62: /* tcp_nopush: T_TCP_NOPUSH T_TCP_NOPUSH_VALUE ';'  */
    /* "grammar.y":201  */
                                      { $yyval = new Node('T_TCP_NOPUSH', ['value' => $yystack->valueAt(1)]); };
  break;


  case 63: /* server: T_SERVER '{' server_body_list '}'  */
    /* "grammar.y":205  */
                                    { static::setAst(new Node('T_SERVER', [], $yystack->valueAt(2))); };
  break;


  case 64: /* pid: T_PID T_PID_VALUE ';'  */
    /* "grammar.y":208  */
                        { $yyval = new Node('T_PID', ['value' => $yystack->valueAt(1)]); };
  break;


  case 65: /* rewrite: T_REWRITE T_REWRITE_REGEX T_REWRITE_REPLACEMENT T_REWRITE_FLAG ';'  */
    /* "grammar.y":211  */
                                                                     { $yyval = new Node('T_REWRITE', ['regex' => $yystack->valueAt(3), 'replacement' => $yystack->valueAt(2), 'flag' => $yystack->valueAt(1)]); };
  break;


  case 66: /* deny: T_DENY T_DENY_VALUE ';'  */
    /* "grammar.y":214  */
                          { $yyval = new Node('T_DENY', ['value' => $yystack->valueAt(1)]); };
  break;


  case 67: /* hide_header: T_FAST_CGI_HIDE_HEADER T_FAST_CGI_HIDE_HEADER_KEY ';'  */
    /* "grammar.y":217  */
                                                          { $yyval = new Node('T_FAST_CGI_HIDE_HEADER', ['key' => $yystack->valueAt(1)]); };
  break;


  case 68: /* gzip: T_GZIP T_GZIP_VALUE ';'  */
    /* "grammar.y":220  */
                          { $yyval = new Node('T_GZIP', ['value' => $yystack->valueAt(1)]); };
  break;


  case 69: /* sendfile: T_SENDFILE T_SENDFILE_VALUE ';'  */
    /* "grammar.y":223  */
                                  { $yyval = new Node('T_SENDFILE', ['value' => $yystack->valueAt(1)]); };
  break;


  case 70: /* types_hash: T_TYPES_HASH T_TYPES_HASH_VALUE ';'  */
    /* "grammar.y":226  */
                                      { $yyval = new Node('T_TYPES_HASH', ['value' => $yystack->valueAt(1)]); };
  break;


  case 71: /* server_tokens: T_SERVER_TOKENS T_SERVER_TOKENS_VALUE ';'  */
    /* "grammar.y":229  */
                                            { $yyval = new Node('T_SERVER_TOKENS', ['value' => $yystack->valueAt(1)]); };
  break;


  case 72: /* server_names_hash_bucket_size: T_SERVER_NAMES_HASH_BUCKET_SIZE T_SERVER_NAMES_HASH_BUCKET_SIZE_VALUE ';'  */
    /* "grammar.y":232  */
                                                                            { $yyval = new Node('T_SERVER_NAMES_HASH_BUCKET_SIZE', ['value' => $yystack->valueAt(1)]); };
  break;


  case 73: /* ssl_protocols: T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE ';'  */
    /* "grammar.y":235  */
                                            { $yyval = new Node('T_SSL_PROTOCOLS', ['value' => $yystack->valueAt(1)]); };
  break;


  case 74: /* ssl_protocols: T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE T_SSL_PROTOCOLS_VALUE2 ';'  */
    /* "grammar.y":236  */
                                                                   { $yyval = new Node('T_SSL_PROTOCOLS', ['value' => [$yystack->valueAt(2), $yystack->valueAt(1)]]); };
  break;


  case 75: /* ssl_protocols: T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE T_SSL_PROTOCOLS_VALUE2 T_SSL_PROTOCOLS_VALUE3 ';'  */
    /* "grammar.y":237  */
                                                                                          { $yyval = new Node('T_SSL_PROTOCOLS', ['value' => [$yystack->valueAt(3), $yystack->valueAt(2), $yystack->valueAt(1)]]); };
  break;


  case 76: /* ssl_protocols: T_SSL_PROTOCOLS T_SSL_PROTOCOLS_VALUE T_SSL_PROTOCOLS_VALUE2 T_SSL_PROTOCOLS_VALUE3 T_SSL_PROTOCOLS_VALUE4 ';'  */
    /* "grammar.y":238  */
                                                                                                                 { $yyval = new Node('T_SSL_PROTOCOLS', ['value' => [$yystack->valueAt(4), $yystack->valueAt(3), $yystack->valueAt(2), $yystack->valueAt(1)]]); };
  break;


  case 77: /* ssl_prefer_server_ciphers: T_SSL_PREFER_SERVER_CIPHERS T_SSL_PREFER_SERVER_CIPHERS_VALUE ';'  */
    /* "grammar.y":241  */
                                                                     { $yyval = new Node('T_SSL_PREFER_SERVER_CIPHERS', ['value' => [$yystack->valueAt(1)]]); };
  break;


  case 78: /* default_type: T_DEFAULT_TYPE T_DEFAULT_TYPE_VALUE ';'  */
    /* "grammar.y":245  */
                                          { $yyval = new Node('T_DEFAULT_TYPE', ['value' => $yystack->valueAt(1)]); };
  break;


  case 79: /* listen: T_LISTEN T_LISTEN_VALUE ';'  */
    /* "grammar.y":249  */
                              { $yyval = new Node('T_LISTEN', ['value' => $yystack->valueAt(1)]); };
  break;


  case 80: /* listen: T_LISTEN T_LISTEN_VALUE T_LISTEN_VALUE_DEFAULT ';'  */
    /* "grammar.y":250  */
                                                     { $yyval = new Node('T_LISTEN', ['value' => $yystack->valueAt(2), 'default_server' => true]); };
  break;


  case 81: /* server_name_values: T_SERVER_NAME_VALUE  */
    /* "grammar.y":253  */
                                          { $yyval = [$yystack->valueAt(0)]; };
  break;


  case 82: /* server_name_values: server_name_values T_SERVER_NAME_VALUE  */
    /* "grammar.y":254  */
                                          { $yyval = $yystack->valueAt(1); $yyval[] = $yystack->valueAt(0); };
  break;


  case 83: /* error_log: T_ERROR_LOG T_ERROR_LOG_PATH ';'  */
    /* "grammar.y":257  */
                                        { $yyval = new Node('T_ERROR_LOG', ['path' => $yystack->valueAt(1)]); };
  break;


  case 84: /* user: T_USER T_USER_VALUE ';'  */
    /* "grammar.y":260  */
                          { $yyval = new Node('T_USER', ['value' => $yystack->valueAt(1)]); };
  break;


  case 85: /* group: T_GROUP T_GROUP_VALUE ';'  */
    /* "grammar.y":263  */
                            { $yyval = new Node('T_GROUP', ['value' => $yystack->valueAt(1)]); };
  break;


  case 86: /* location_optional_regexp_path: %empty  */
    /* "grammar.y":266  */
           { $yyval = ''; };
  break;


  case 87: /* location_optional_regexp_path: T_LOCATION_PATH_REGEXP  */
    /* "grammar.y":267  */
                            { $yyval = $yystack->valueAt(0); };
  break;


  case 88: /* add_header: T_ADD_HEADER T_ADD_HEADER_KEY T_ADD_HEADER_VALUE ';'  */
    /* "grammar.y":270  */
                                                       { $yyval = new Node('T_ADD_HEADER', [$yystack->valueAt(2) => $yystack->valueAt(1)]); };
  break;


  case 89: /* index: T_INDEX T_INDEX_VALUE ';'  */
    /* "grammar.y":273  */
                            { $yyval = new Node('T_INDEX', ['value' => $yystack->valueAt(1)]); };
  break;


  case 90: /* access_log: T_ACCESS_LOG T_ACCESS_LOG_PATH ';'  */
    /* "grammar.y":276  */
                                     { $yyval = new Node('T_ACCESS_LOG', ['path' => $yystack->valueAt(1)]); };
  break;


  case 91: /* log_not_found: T_LOG_NOT_FOUND T_LOG_NOT_FOUND_VALUE ';'  */
    /* "grammar.y":279  */
                                            { $yyval = new Node('T_LOG_NOT_FOUND', ['value' => $yystack->valueAt(1)]); };
  break;


  case 92: /* charset: T_CHARSET T_CHARSET_VALUE ';'  */
    /* "grammar.y":282  */
                                { $yyval = new Node('T_CHARSET', ['value' => $yystack->valueAt(1)]); };
  break;


  case 93: /* error_page: T_ERROR_PAGE T_ERROR_PAGE_CODE T_ERROR_PAGE_URI ';'  */
    /* "grammar.y":285  */
                                                      { $yyval = new Node('T_ERROR_PAGE', ['code' => $yystack->valueAt(2), 'uri' => $yystack->valueAt(1)]); };
  break;


  case 94: /* include: T_INCLUDE T_INCLUDE_PATH ';'  */
    /* "grammar.y":288  */
                               { $yyval = new Node('T_INCLUDE', ['path' => $yystack->valueAt(1)]); };
  break;


  case 95: /* return: T_RETURN T_RETURN_CODE optional_return_body ';'  */
    /* "grammar.y":291  */
                                                  { $yyval = new Node('T_RETURN', ['code' => $yystack->valueAt(2), 'body' => $yystack->valueAt(1)]); };
  break;


  case 96: /* multi_accept: T_MULTI_ACCEPT T_MULTI_ACCEPT_VALUE ';'  */
    /* "grammar.y":295  */
                                          { $yyval = new Node('T_MULTI_ACCEPT', ['value' => $yystack->valueAt(1)]); };
  break;


  case 97: /* server_body_list: server_body_list server_body  */
    /* "grammar.y":298  */
                                { $yyval[] = $yystack->valueAt(0); };
  break;


  case 98: /* server_body_list: %empty  */
    /* "grammar.y":299  */
                                { $yyval = []; };
  break;


  case 99: /* optional_return_body: %empty  */
    /* "grammar.y":304  */
                 { $yyval = '';};
  break;


  case 100: /* optional_return_body: T_RETURN_BODY  */
    /* "grammar.y":305  */
                 { $yyval = $yystack->valueAt(0); };
  break;


  case 101: /* try_files_path_list: T_TRY_FILES_PATH  */
    /* "grammar.y":309  */
                                        { $yyval = [$yystack->valueAt(0)]; };
  break;


  case 102: /* try_files_path_list: try_files_path_list T_TRY_FILES_PATH  */
    /* "grammar.y":310  */
                                        { $yyval = $yystack->valueAt(1); $yyval[] = $yystack->valueAt(0); };
  break;


  case 103: /* location_body_list: location_body_list location_body  */
    /* "grammar.y":314  */
                                    { $yyval[] = $yystack->valueAt(0); };
  break;


  case 104: /* location_body_list: %empty  */
    /* "grammar.y":315  */
                                    { $yyval = []; };
  break;



/* "src/Parser.php":1112  */

        default: break;
      }

    $yystack->pop($yylen);
    $yylen = 0;
    /* Shift the result of the reduction.  */
    $yystate = $this->yyLRGotoState($yystack->stateAt(0), $this->yyr1[$yyn]);
    $yystack->push($yystate, $yyval);
    return Parser::YYNEWSTATE;
  }




  /**
   * Parse input from the scanner that was specified at object construction
   * time.  Return whether the end of the input was reached successfully.
   *
   * @return <tt>true</tt> if the parsing succeeds.  Note that this does not
   *          imply that there were no syntax errors.
   */
  public function parse(): bool 

  {




    $this->yyerrstatus = 0;
    $this->yynerrs = 0;

    /* Initialize the stack.  */
    $this->yystack->push($this->yystate, $this->yylval);



    for (;;)
      switch ($this->label)
      {
        /* New state.  Unlike in the C/C++ skeletons, the state is already
           pushed when we come here.  */
      case Parser::YYNEWSTATE:

        /* Accept?  */
        if ($this->yystate === Parser::YYFINAL) {
          return true;
        }

        /* Take a decision.  First try without lookahead.  */
        $this->yyn = $this->yypact[$this->yystate];
        if ($this->yyPactValueIsDefault($this->yyn))
          {
            $this->label = Parser::YYDEFAULT;
            break;
          }

        /* Read a lookahead token.  */
        if ($this->yychar === Parser::YYEMPTY)
          {

            $this->yychar = $this->yylexer->yylex();
            $this->yylval = $this->yylexer->getLVal();

          }

        /* Convert token to internal form.  */
        $this->yytoken = $this->yytranslate($this->yychar);

        if ($this->yytoken->getCode() === SymbolKind::S_YYerror)
          {
            // The scanner already issued an error message, process directly
            // to error recovery.  But do not keep the error token as
            // lookahead, it is too special and may lead us to an endless
            // loop in error recovery. */
            $this->yychar = LexerInterface::YYUNDEF;
            $this->yytoken = new SymbolKind(SymbolKind::S_YYUNDEF);
            $this->label = Parser::YYERRLAB1;
          }
        else
          {
            /* If the proper action on seeing token YYTOKEN is to reduce or to
               detect an error, take that action.  */
            $this->yyn += $this->yytoken->getCode();
            if ($this->yyn < 0 || Parser::YYLAST < $this->yyn || $this->yycheck[$this->yyn] !== $this->yytoken->getCode()) {
              $this->label = Parser::YYDEFAULT;
            }

            /* <= 0 means reduce or error.  */
            else if (($this->yyn = $this->yytable[$this->yyn]) <= 0)
              {
                if ($this->yyTableValueIsError($this->yyn)) {
                  $this->label = Parser::YYERRLAB;
                } else {
                  $this->yyn = -$this->yyn;
                  $this->label = Parser::YYREDUCE;
                }
              }

            else
              {
                /* Shift the lookahead token.  */
                /* Discard the token being shifted.  */
                $this->yychar = Parser::YYEMPTY;

                /* Count tokens shifted since error; after three, turn off error
                   status.  */
                if ($this->yyerrstatus > 0)
                  --$this->yyerrstatus;

                $this->yystate = $this->yyn;
                $this->yystack->push($this->yystate, $this->yylval);
                $this->label = Parser::YYNEWSTATE;
              }
          }
        break;

      /*-----------------------------------------------------------.
      | yydefault -- do the default action for the current state.  |
      `-----------------------------------------------------------*/
      case Parser::YYDEFAULT:
        $this->yyn = $this->yydefact[$this->yystate];
        if ($this->yyn === 0)
          $this->label = Parser::YYERRLAB;
        else
          $this->label = Parser::YYREDUCE;
        break;

      /*-----------------------------.
      | yyreduce -- Do a reduction.  |
      `-----------------------------*/
      case Parser::YYREDUCE:
        $this->yylen = $this->yyr2[$this->yyn];
        $this->label = $this->yyaction($this->yyn, $this->yystack, $this->yylen);
        $this->yystate = $this->yystack->stateAt(0);
        break;

      /*------------------------------------.
      | yyerrlab -- here on detecting error |
      `------------------------------------*/
      case Parser::YYERRLAB:
        /* If not already recovering from an error, report this error.  */
        if ($this->yyerrstatus === 0)
          {
            ++$this->yynerrs;
            if ($this->yychar === Parser::YYEMPTY) {
              $this->yytoken = null;
            }
            $this->yyreportSyntaxError(new Context($this, $this->yystack, $this->yytoken));
          }

        if ($this->yyerrstatus === 3)
          {
            /* If just tried and failed to reuse lookahead token after an
               error, discard it.  */

            if ($this->yychar <= LexerInterface::YYEOF)
              {
                /* Return failure if at end of input.  */
                if ($this->yychar === LexerInterface::YYEOF) {
                  return false;
                }
              }
            else
              $this->yychar = Parser::YYEMPTY;
          }

        /* Else will try to reuse lookahead token after shifting the error
           token.  */
        $this->label = Parser::YYERRLAB1;
        break;

      /*-------------------------------------------------.
      | errorlab -- error raised explicitly by YYERROR.  |
      `-------------------------------------------------*/
      case Parser::YYERROR:
        /* Do not reclaim the symbols of the rule which action triggered
           this YYERROR.  */
        $this->yystack->pop($this->yylen);
        $this->yylen = 0;
        $this->yystate = $this->yystack->stateAt(0);
        $this->label = Parser::YYERRLAB1;
        break;

      /*-------------------------------------------------------------.
      | yyerrlab1 -- common code for both syntax error and YYERROR.  |
      `-------------------------------------------------------------*/
      case Parser::YYERRLAB1:
        $this->yyerrstatus = 3;       /* Each real token shifted decrements this.  */

        // Pop stack until we find a state that shifts the error token.
        for (;;)
          {
            $this->yyn = $this->yypact[$this->yystate];
            if (!$this->yyPactValueIsDefault($this->yyn))
              {
                $this->yyn += SymbolKind::S_YYerror;
                if (0 <= $this->yyn && $this->yyn <= Parser::YYLAST
                    && $this->yycheck[$this->yyn] === SymbolKind::S_YYerror)
                  {
                    $this->yyn = $this->yytable[$this->yyn];
                    if (0 < $this->yyn)
                      break;
                  }
              }

            /* Pop the current state because it cannot handle the
             * error token.  */
            if ($this->yystack->height === 0) {
              return false;
            }


            $this->yystack->pop();
            $this->yystate = $this->yystack->stateAt(0);
          }

        if ($this->label === Parser::YYABORT)
          /* Leave the switch.  */
          break;



        /* Shift the error token.  */

        $this->yystate = $this->yyn;
        $this->yystack->push($this->yyn, $this->yylval);
        $this->label = Parser::YYNEWSTATE;
        break;

        /* Accept.  */
      case Parser::YYACCEPT:
        return true;

        /* Abort.  */
      case Parser::YYABORT:
        return false;
      }
}








  /**
   * Build and emit a "syntax error" message in a user-defined way.
   *
   * @param ctx  The context of the error.
   */
  private function yyreportSyntaxError(Context $yyctx): void {
      $this->yyerror("syntax error");
  }

  /**
   * Whether the given <code>yypact_</code> value indicates a defaulted state.
   * @param yyvalue   the value to check
   */
  public function yyPactValueIsDefault(int $yyvalue): bool {
    return $yyvalue === $this->yypact_ninf;
  }

  /**
   * Whether the given <code>yytable_</code>
   * value indicates a syntax error.
   * @param yyvalue the value to check
   */
  public function yyTableValueIsError(int $yyvalue): bool {
    return $yyvalue === $this->yytable_ninf;
  }

  public int $yypact_ninf = -76;
  public int $yytable_ninf = -1;

/* YYPACT[STATE-NUM] -- Index in YYTABLE of the portion describing
   STATE-NUM.  */
  
  /** @var int[] */
  public array $yypact = array(    -1,   -75,   -32,   -28,   -27,   -30,   -58,   -57,    36,    34,
     -76,   -76,   -76,   -76,   -76,   -76,   -76,   -76,   -52,   -50,
     -49,   -47,   -41,     5,   -76,   -76,    -4,   -76,   -76,   -76,
     -76,   -17,   -15,   -43,   -76,   -76,    32,    38,    21,   -10,
      -3,   -12,   -11,    -8,   -13,   -14,   -20,   -19,    34,   -22,
     -76,   -76,   -76,   -76,   -76,   -76,   -76,   -76,   -76,   -76,
     -76,   -76,    68,    67,    69,     1,    62,    63,    45,    46,
      47,    49,    48,    50,   -76,   -76,   -76,   -76,   -76,   -76,
     -76,   -76,   -76,   -76,   -76,   -76,   -76,   -76,     7,     8,
     -76,    12,    15,    17,    18,    20,    22,    24,    25,   -73,
      27,    31,    33,   -76,    -2,   -76,    -7,    35,   -76,   102,
     117,   115,   114,    95,    52,    53,    90,    55,    56,   -76,
     -76,   -76,   -76,   -76,   -76,   -76,   -76,   -76,   -76,   -68,
     -76,   -76,   -76,   -76,    58,   -76,   -76,   -76,   -76,    51,
      61,   -76,    60,   119,    64,   -76,   -76,    65,   -76,   -76,
     -66,   -76,   -76,   -76,   -76,   -76,    66,   -76,   -76,    71,
     -76,    70,    98,   -76,   -76,   125,   128,   113,   126,   110,
     120,    72,   122,   -76,   -76,   -76,   -76,   -76,   -76,   -76,
     -76,   -76,   115,    73,    74,   130,    75,    76,   -76,   -76,
     -29,    77,   -76,   -76,    78,   -76,   -76,   -76,   -76,   -76,
     -76);
  

/* YYDEFACT[STATE-NUM] -- Default reduction number in state STATE-NUM.
   Performed when YYTABLE does not specify something else to do.  Zero
   means the default is an error.  */
  
  /** @var int[] */
  public array $yydefact = array(     9,     0,     0,     0,     0,     0,     0,     0,     0,     3,
       8,     6,     4,    11,     7,     2,     5,    98,     0,     0,
       0,     0,    15,    45,     1,    10,     0,    84,    85,    59,
      64,     0,     0,     0,    13,    14,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,    46,     0,
      57,    55,    47,    48,    49,    50,    51,    52,    58,    54,
      53,    56,     0,     0,     0,    86,     0,     0,     0,     0,
       0,     0,     0,     0,    63,    97,    29,    26,    21,    18,
      22,    23,    31,    30,    24,    25,    27,    28,     0,     0,
      12,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,    60,     0,    81,     0,     0,    87,     0,
       0,    99,     0,     0,     0,     0,     0,     0,     0,    96,
      61,    83,    90,    94,    68,    69,    70,    71,    72,     0,
      73,    77,    62,    78,     0,    79,    82,    16,    17,     0,
       0,   100,     0,     0,     0,    89,    92,     0,    66,    91,
       0,    74,    80,   104,   104,    95,     0,    88,    93,     0,
      75,     0,     0,    65,    76,     0,     0,     0,     0,     0,
       0,     0,     0,    20,   103,    39,    40,    41,    43,    44,
      42,    19,    99,     0,     0,     0,     0,     0,    37,   101,
       0,     0,    33,    34,     0,    67,    36,   102,    38,    32,
      35);
  

/* YYPGOTO[NTERM-NUM].  */
  
  /** @var int[] */
  public array $yypgoto = array(   -76,   -76,   140,   -76,   -76,   -76,   -76,   -76,   -76,   -76,
     -76,   -76,     2,   -76,   -76,   146,   -76,   -76,   -76,   -76,
     -76,   -76,   -76,   -76,   -76,   -76,   -76,   147,   -76,   -76,
     -76,   148,   -76,    -5,   149,   -76,   150,   151,   -76,   -76,
     -76,     0,   -76,    26);
  

/* YYDEFGOTO[NTERM-NUM].  */
  
  /** @var int[] */
  public array $yydefgoto = array(     0,     8,     9,    10,    33,    75,   174,    49,    11,    12,
      34,    50,    13,    14,    76,   175,   176,    51,    52,    53,
      54,    55,    56,    57,    58,    78,   106,    59,    15,    16,
     110,   177,    81,   178,   179,    84,   180,    61,    87,    35,
      26,   142,   190,   161);
  

/* YYTABLE[YYPACT[STATE-NUM]] -- What to do in state STATE-NUM.  If
   positive, shift that token.  If negative, reduce the rule whose
   number is the opposite.  If YYTABLE_NINF, syntax error.  */
  
  /** @var int[] */
  public array $yytable = array(    62,   136,     1,    63,   134,    64,   129,    65,     1,   197,
      66,    25,   150,    67,   108,   159,    17,    36,    60,    37,
     130,    82,    31,    18,    32,   151,    36,   160,    37,    19,
      38,    21,    20,    22,    23,    68,    24,     1,    69,    38,
      70,    27,    71,    28,    29,    72,    30,    88,    73,    90,
      25,    89,   109,     2,    91,     3,    93,     4,    94,     5,
      96,     6,    92,    97,   198,    99,   101,    95,    98,   100,
     103,   102,    39,   104,    40,   105,    41,   111,    42,   107,
      43,   112,    44,     7,   165,   113,   137,    45,    74,   114,
      46,   135,   115,    37,    47,   166,   116,   167,   117,   168,
     119,   120,   169,   118,   170,   121,   171,   172,   122,    68,
     123,   124,   165,   125,   139,   126,    71,   127,   128,    72,
     131,    37,    73,   166,   132,   167,   133,   168,   138,   140,
     169,   141,   170,   143,   171,   172,   144,    68,   147,   156,
     182,   184,   153,   186,    71,   145,   146,    72,   148,   149,
      73,   152,   154,   155,   183,   187,   185,   157,   158,   163,
     189,   194,   173,    48,   164,   188,   192,   193,   195,   196,
     199,   200,    77,    79,    80,    83,    85,    86,     0,     0,
     162,     0,   191,     0,     0,     0,     0,     0,     0,     0,
     181);
  


  /** @var int[] */
  public array $yycheck = array(     4,     8,     3,     7,     6,     9,    79,    11,     3,    38,
      14,     9,    80,    17,    13,    81,    91,    21,    23,    23,
      93,    26,    63,    55,    65,    93,    21,    93,    23,    57,
      34,    61,    59,    91,    91,    39,     0,     3,    42,    34,
      44,    93,    46,    93,    93,    49,    93,    64,    52,    92,
      48,    66,    51,    54,    22,    56,    35,    58,    68,    60,
      72,    62,    24,    74,    93,    78,    86,    70,    76,    83,
      92,    90,    67,     5,    69,     8,    71,    15,    73,    10,
      75,    18,    77,    84,    14,    40,    93,    82,    92,    43,
      85,    93,    45,    23,    89,    25,    47,    27,    50,    29,
      93,    93,    32,    53,    34,    93,    36,    37,    93,    39,
      93,    93,    14,    93,    12,    93,    46,    93,    93,    49,
      93,    23,    52,    25,    93,    27,    93,    29,    93,    12,
      32,    16,    34,    19,    36,    37,    41,    39,    48,    20,
      15,    28,    91,    33,    46,    93,    93,    49,    93,    93,
      52,    93,    91,    93,    26,    35,    30,    93,    93,    93,
      38,    31,    92,    23,    93,    93,    93,    93,    93,    93,
      93,    93,    26,    26,    26,    26,    26,    26,    -1,    -1,
     154,    -1,   182,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      92);
  

/* YYSTOS[STATE-NUM] -- The symbol kind of the accessing symbol of
   state STATE-NUM.  */
  
  /** @var int[] */
  public array $yystos = array(     0,     3,    54,    56,    58,    60,    62,    84,    95,    96,
      97,   102,   103,   106,   107,   122,   123,    91,    55,    57,
      59,    61,    91,    91,     0,   106,   134,    93,    93,    93,
      93,    63,    65,    98,   104,   133,    21,    23,    34,    67,
      69,    71,    73,    75,    77,    82,    85,    89,    96,   101,
     105,   111,   112,   113,   114,   115,   116,   117,   118,   121,
     127,   131,     4,     7,     9,    11,    14,    17,    39,    42,
      44,    46,    49,    52,    92,    99,   108,   109,   119,   121,
     125,   126,   127,   128,   129,   130,   131,   132,    64,    66,
      92,    22,    24,    35,    68,    70,    72,    74,    76,    78,
      83,    86,    90,    92,     5,     8,   120,    10,    13,    51,
     124,    15,    18,    40,    43,    45,    47,    50,    53,    93,
      93,    93,    93,    93,    93,    93,    93,    93,    93,    79,
      93,    93,    93,    93,     6,    93,     8,    93,    93,    12,
      12,    16,   135,    19,    41,    93,    93,    48,    93,    93,
      80,    93,    93,    91,    91,    93,    20,    93,    93,    81,
      93,   137,   137,    93,    93,    14,    25,    27,    29,    32,
      34,    36,    37,    92,   100,   109,   110,   125,   127,   128,
     130,    92,    15,    26,    28,    30,    33,    35,    93,    38,
     136,   135,    93,    93,    31,    93,    93,    38,    93,    93,
      93);
  

/* YYR1[RULE-NUM] -- Symbol kind of the left-hand side of rule RULE-NUM.  */
  
  /** @var int[] */
  public array $yyr1 = array(     0,    94,    95,    95,    95,    95,    95,    95,    95,    95,
      96,    96,    97,    98,    98,    98,    99,    99,    99,    99,
      99,    99,    99,    99,    99,    99,    99,    99,    99,    99,
      99,    99,   100,   100,   100,   100,   100,   100,   100,   100,
     100,   100,   100,   100,   100,   101,   101,   101,   101,   101,
     101,   101,   101,   101,   101,   101,   101,   101,   101,   102,
     103,   104,   105,   106,   107,   108,   109,   110,   111,   112,
     113,   114,   115,   116,   116,   116,   116,   117,   118,   119,
     119,   120,   120,   121,   122,   123,   124,   124,   125,   126,
     127,   128,   129,   130,   131,   132,   133,   134,   134,   135,
     135,   136,   136,   137,   137);
  

/* YYR2[RULE-NUM] -- Number of symbols on the right-hand side of rule RULE-NUM.  */
  
  /** @var int[] */
  public array $yyr2 = array(     0,     2,     1,     1,     1,     1,     1,     1,     1,     0,
       2,     1,     4,     1,     1,     0,     3,     3,     1,     6,
       6,     1,     1,     1,     1,     1,     1,     1,     1,     1,
       1,     1,     4,     3,     3,     4,     3,     2,     3,     1,
       1,     1,     1,     1,     1,     0,     1,     1,     1,     1,
       1,     1,     1,     1,     1,     1,     1,     1,     1,     3,
       4,     3,     3,     4,     3,     5,     3,     3,     3,     3,
       3,     3,     3,     3,     4,     5,     6,     3,     3,     3,
       4,     1,     2,     3,     3,     3,     0,     1,     4,     3,
       3,     3,     3,     4,     3,     4,     3,     2,     0,     0,
       1,     1,     2,     2,     0);
  




  /* YYTRANSLATE(TOKEN-NUM) -- Symbol number corresponding to TOKEN-NUM
     as returned by yylex, with out-of-bounds checking.  */
  private function yytranslate(int $t): SymbolKind
  {
    // Last valid token kind.
    $code_max = 345;
    if ($t <= 0)
      return new SymbolKind(SymbolKind::S_YYEOF);
    else if ($t <= $code_max)
      return new SymbolKind($this->yytranslate_table[$t]);
    else
      return new SymbolKind(SymbolKind::S_YYUNDEF);
  }
  
  /** @var int[] */
  public array $yytranslate_table = array(     0,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,    93,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,    91,     2,    92,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     1,     2,     3,     4,
       5,     6,     7,     8,     9,    10,    11,    12,    13,    14,
      15,    16,    17,    18,    19,    20,    21,    22,    23,    24,
      25,    26,    27,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    44,
      45,    46,    47,    48,    49,    50,    51,    52,    53,    54,
      55,    56,    57,    58,    59,    60,    61,    62,    63,    64,
      65,    66,    67,    68,    69,    70,    71,    72,    73,    74,
      75,    76,    77,    78,    79,    80,    81,    82,    83,    84,
      85,    86,    87,    88,    89,    90);
  


  public const YYLAST = 190;
  public const YYEMPTY = -2;
  public const YYFINAL = 24;
  public const YYNTOKENS = 94;


}
/* "grammar.y":317  */

