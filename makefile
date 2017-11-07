.PHONY: install unit-tests cache-clear

unit-tests:
	vendor/bin/phpunit

cache-clear:
	rm -rf ./var/cache/