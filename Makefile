run:
	@echo "Subindo server" && \
	php -S localhost:8000

tests:
	@echo "--- Testando ---" && \
	phpunit test/
