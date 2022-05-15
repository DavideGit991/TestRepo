#!/usr/bin/env bash

help:    ## Show command list
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

up:    ## Start Laravel Sail (docker)
	./vendor/bin/sail up

upd:    ## Start detached Laravel Sail (docker)
	## ~~~~~
	./vendor/bin/sail up -d

shell:    ## Bash shell
	## ~~~~~
	./vendor/bin/sail shell

stop:    ## Stop all (project) running containers.
	## ~~~~~
	./vendor/bin/sail stop
