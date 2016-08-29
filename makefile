list:
	@echo "update"
	@echo "autoload"
	@echo "git-push"
	@echo "composer-update"

git-push:
	git push -u

update:
	git pull
	composer --optimize dump-autoload -vvv

autoload:
	composer --optimize dump-autoload -vvv

composer-update:
	composer update -vvv --prefer-dist
	composer --optimize dump-autoload -vvv