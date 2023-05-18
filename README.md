# CakePHP Docker Starter Pack
1. [Overview](#overview)
2. [Prerequisites](#prerequisites)
3. [How to use](#how-to-use)

## Overview
This is a starter pack for CakePHP 4.x on Docker.

## Prerequisites
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## How to use
### Installation
1. Clone this repository.
```
$ git clone https://github.com/jaydenireland/cakephp-docker-starter
```
2. `cp .env.example .env` and replace values with your own
3. `docker-compose up -d`
4. `docker-compose exec app /bin/bash -c "composer i"`
