#!/bin/bash
cd ..
./code/vendor/zircote/swagger-php/bin/openapi ./code/app --format json > swagger.json
