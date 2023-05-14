sail := vendor/bin/sail

setup:
	cp .env.example .env
	./scripts/setup-app.sh

migrate:
	./vendor/bin/sail artisan migrate

seed:
	./vendor/bin/sail artisan db:seed

up:
	./vendor/bin/sail up

vite:
	./vendor/bin/sail yarn run dev

tinker:
	./vendor/bin/sail artisan tinker

bash:
	./vendor/bin/sail bash

ide-helper: ## Make ide-helper files
	./vendor/bin/sail artisan ide-helper:generate
	./vendor/bin/sail artisan ide-helper:models --nowrite
	./vendor/bin/sail artisan ide-helper:meta

test:
	./vendor/bin/sail artisan test

format:
	./vendor/bin/sail composer format
	./vendor/bin/sail yarn run format

lint:
	./vendor/bin/sail composer lint
	./vendor/bin/sail yarn run lint

