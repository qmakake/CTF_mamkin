#!/bin/bash

mysql -u root -p12345 < /docker-entrypoint-initdb.d/sqlath.sql
