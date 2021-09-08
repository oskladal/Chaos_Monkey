#!/bin/bash

cd chaos-workshop/docker 
sudo systemctl start docker 
./docker-compose-run.sh
./start_test.sh