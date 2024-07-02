nginx:
	bison -S vendor/mrsuh/php-bison-skeleton/src/php-skel.m4 -o src/Parser.php grammar.y
test:
	vendor/bin/phpunit
