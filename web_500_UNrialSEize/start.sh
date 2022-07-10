#!/bin/bash

docker build -t="web500" ./deploy

docker run --name='web500' -d -p 4044:80 web500
