
install:
	composer --no-interaction --prefer-dist --no-dev install

update:
	composer update

test:
	phpunit tests

