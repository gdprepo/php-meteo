DB_USER = gabindepaire
DB_PASSWORD = rootroot
DB_NAME = gdbdd

#Starting webServer
start: 
	php -S localhost:8000 -t .



# Show this help.
help:
	@awk '/^#/{c=substr($$0,3);next}c&&/^[[:alpha:]][[:alnum:]_-]+:/{print substr($$1,1,index($$1,":")),c}1{c=0}' $(MAKEFILE_LIST) | column -s: -t

