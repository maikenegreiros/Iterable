.PHONY: tests build

build:
	docker-compose run build

tests:
	docker-compose run tests
