.PHONY: install unit-tests cache-clear

install:
	php composer.phar install
	docker-compose up -d
	
unit-tests:
	vendor/bin/phpunit

cache-clear:
	rm -rf ./var/cache/