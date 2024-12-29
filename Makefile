up:
	@cp --update=none compose.yaml.dist compose.yaml
	@docker compose pull
	@docker compose build
	@docker compose up -d --force-recreate

down:
	@docker compose down --remove-orphans
