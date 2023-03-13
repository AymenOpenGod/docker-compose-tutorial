start:
	docker-compose up -d
restart:
	docker stop $$(docker ps -a -q)
	docker rm $$(docker ps -a -q)
	make start

stop:
	docker stop $$(docker ps -a -q)
	docker rm $$(docker ps -a -q)
