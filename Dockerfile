FROM ubuntu/postgres:latest
RUN apt-get update && apt-get install -y postgresql-client